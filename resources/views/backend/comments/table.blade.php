<table class="table table-bordered">
    <thead>
        <tr>
            <td width="80">Action</td>
            <td>Author</td>
            <td>Comment</td>
            <td>Submitted</td>
        </tr>
    </thead>
    <tbody>
        @foreach($comments as $comment)
            <tr>
                <td>
                    {!! Form::open(['method' => 'DELETE', 'route' => ['backend.comments.destroy', $comment->id]]) !!}
                        {{-- <a href="{{ route('backend.categories.edit', $comment->id) }}" class="btn btn-xs btn-default">
                            <i class="fa fa-edit"></i>
                        </a> --}}
                        @if(!($comment->updated_at))
                            <a href="{{ route('backend.comments.published', $comment->id) }}" onclick="return confirm('Are you sure to publish comment?');" class="btn btn-xs btn-default">
                                <i class="fa fa-toggle-off"></i>
                            </a>
                        @else
                        <button onclick="return confirm('Are you sure to publish comment?');" type="button" disabled class="btn btn-xs btn-info">
                            <i class="fa fa-toggle-on"></i>
                        </button>
                        @endif
                        <button onclick="return confirm('Are you sure?');" type="submit" class="btn btn-xs btn-danger">
                            <i class="fa fa-times"></i>
                        </button>
                    {!! Form::close() !!}
                </td>
                <td>  
                    <a href="{{ url("'.$comment->post->slug.'")}}">
                        {{ $comment->author_name }}
                    </a>
                </td>
                <td>{{ $comment->body }}</td>
                <td>{{ $comment->created_at }}</td>
            </tr>

        @endforeach
    </tbody>
</table>

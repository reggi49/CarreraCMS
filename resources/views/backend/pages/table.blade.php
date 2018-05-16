<table class="table table-bordered">
    <thead>
        <tr>
            <td width="80">Action</td>
            <td>Page Title</td>
            <td>Body</td>
            <td>Date Created</td>
        </tr>
    </thead>
    <tbody>
        @foreach($pages as $page)

            <tr>
                <td>
                    {!! Form::open(['method' => 'DELETE', 'route' => ['backend.pages.destroy', $page->id]]) !!}
                        <a href="{{ route('backend.pages.edit', $page->id) }}" class="btn btn-xs btn-default">
                            <i class="fa fa-edit"></i>
                        </a>
                        <button onclick="return confirm('Are you sure?');" type="submit" class="btn btn-xs btn-danger">
                            <i class="fa fa-times"></i>
                        </button>
                    {!! Form::close() !!}
                </td>
                <td>{{ $page->title }}</td>
                <td>{{ $page->body }}</td>
                <td>{{ $page->created_at }}</td>
            </tr>

        @endforeach
    </tbody>
</table>

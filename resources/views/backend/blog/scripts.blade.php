@section('style')
    <link rel="stylesheet" href="{{ asset('backend-assets/plugins/tagEditor/jquery.tag-editor.css')}}">
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
@endsection

@section('scripts')
<script src="{{ asset('backend-assets/plugins/tagEditor/jquery.caret.min.js')}}"></script>
<script src="{{ asset('backend-assets/plugins/tagEditor/jquery.tag-editor.min.js')}}"></script>
<script type="text/javascript">
    var options = {};
        options = {
            initialTags: {!! $post->tags_list !!},
            autocomplete: {
                delay: 0, // show suggestions immediately
                position: { collision: 'flip' }, // automatic menu position up/down
                source: {!! $post->tags_all !!},
            },
            forceLowercase: false,
        }
    $('input[name=post_tags]').tagEditor(options);

    // Slug Automatically

    $('#title').on('blur',function(){
        var theTitle = this.value.toLowerCase().trim(),
        slugInput = $('#slug'),
        theSlug = theTitle.replace(/&/g,'-and-')
                            .replace(/[^a-z0-9-]+/g,'-')
                            .replace(/\-\-+/g,'-')
                            .replace(/^-+|-+$/g,'');

        slugInput.val(theSlug);
    });
    $('#datetimepicker1').datetimepicker({
        defaultDate: new Date(),
        format: 'YYYY-MM-DD HH:mm:ss',
        showClear : true,
    });
    
    $('#draft-btn').click(function (e) {
        e.preventDefault();
        $('#published_at').val("");
        $('#post-form').submit();
    });

    </script>
{{-- E:Slug Automatically --}}
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<script src="{{ asset('backend-assets/js/tinymce/jquery.tinymce.min.js')}}"></script>
<script src="{{ asset('backend-assets/js/tinymce/tinymce.min.js')}}"></script>
<script>
    tinymce.init({
  selector: 'textarea',
  height: 500,
  theme: 'modern',
  plugins: 'print preview fullpage paste searchreplace autolink directionality visualblocks visualchars fullscreen image link media template codesample table charmap hr pagebreak nonbreaking anchor toc insertdatetime advlist lists textcolor wordcount imagetools contextmenu colorpicker textpattern help',
  toolbar1: 'insertfile undo redo | link image | formatselect | bold italic strikethrough forecolor backcolor | alignleft aligncenter alignright alignjustify  | numlist bullist outdent indent  | removeformat',
  image_advtab: true,
  templates: [
    { title: 'template 1', content: 'Test 1' },
    { title: 'template 2', content: 'Test 2' }
  ],
  content_css: [
    '//fonts.googleapis.com/css?family=Lato:300,300i,400,400i',
    '//www.tinymce.com/css/codepen.min.css'
  ],
  file_browser_callback : function(field_name, url, type, win) {
      var x = window.innerWidth || document.documentElement.clientWidth || document.getElementsByTagName('body')[0].clientWidth;
      var y = window.innerHeight|| document.documentElement.clientHeight|| document.getElementsByTagName('body')[0].clientHeight;

      var cmsURL = '/' + 'laravel-filemanager?field_name=' + field_name;
      if (type == 'image') {
        cmsURL = cmsURL + "&type=Images";
      } else {
        cmsURL = cmsURL + "&type=Files";
      }

      tinyMCE.activeEditor.windowManager.open({
        file : cmsURL,
        title : 'Filemanager',
        width : x * 0.8,
        height : y * 0.8,
        resizable : "yes",
        close_previous : "no"
      });
    },
 });
</script>
@endsection
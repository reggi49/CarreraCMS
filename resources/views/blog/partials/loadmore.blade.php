<script>
$(document).ready(function(){
   $(document).on('click','#btn-more',function(){
       var id = $(this).data('id');
       var artikel = $(this).data('artikel');
       $("#btn-more").html("Loading....");
       $.ajax({
           url : '{{ url("blog/loadmore") }}',
           method : "POST",
           data : {id:id,artikel:artikel, _token:"{{csrf_token()}}"},
           dataType : "text",
           success : function (data)
           {
              if(data != '') 
              {
                  $('#remove-row').remove();
                  $('#load-data').append(data);
              }
              else
              {
                  $('#btn-more').html("Tidak Ada Berita Terbaru");
              }
           }
       });
   });  
}); 
</script>
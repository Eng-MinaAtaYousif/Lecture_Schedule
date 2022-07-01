$(document).ready(function(){
 
    $('.delete_id').click(function(){
        $('.actully_modify_id').hide();
        $('.actully_delete_id').slideToggle(2000);
    })
    $('.modify_id').click(function(){
        $('.actully_delete_id').hide();
        $('.actully_modify_id').slideToggle(2000);
    })
    $('.btn-delete').click(function(e){
     
        var id = document.getElementById('d-id').value ;

        document.getElementById('show').textContent = 'Are You Sure You Want To Delete This  Id ' + "("+id +")" ;
        
      $('.alertmessage').slideDown(1000);

    })
    $('.modify').click(function(){
        $('.alertmessage').slideToggle(1000);
      })
      $('.alertmessage').blur(function(){
        $('.alertmessage').hide();
      })
})


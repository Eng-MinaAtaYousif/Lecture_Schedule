$(document).ready(function () {

  $('.by_id').click(function () {
    $('.search_by_id').slideToggle();
    $('.by_un_ps').hide();
  })

  $('.by_un_ps').click(function () {
    $('.username-password-search').slideToggle();
    $('.by_id').hide();
  })
  $(".search_by_id , .username-password-search").submit(function (e) {
     $('.data').slideDown();


 
  });
 

     $('.close').click(function(){
      $(".data").hide();
     })


  
   
  
});

var load = document.getElementsByClassName('load')[0] ;
var real_data = document.getElementsByClassName('real-data')[0] ;
var btn_ok = document.querySelector('a.btn-danger') ;
setTimeout(function(){
 load.style.display = 'none';

},2200);

setTimeout(function(){
  real_data.style.display = 'block';
  btn_ok.style.display = 'block';
 },3000);

 var wrong_id = document.querySelector('h1.wrong_id');
 var wrong_username = document.querySelector('h1.wrong_username');
 if(wrong_id.style.display == 'block'){
  wrong_username.style.display ='none';
 }
 else{
  wrong_username.style.display ='block';
 }
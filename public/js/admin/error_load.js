$(function() {
    setTimeout(function(){
      $('body').removeClass('loading');
    }, 1000);


    $('li').click(function(){
      var load = document.getElementsByClassName("loading")[0] ;
      load.getElementsByClassName.display = 'none';
     
    })
    
  

  });
  
$(document).ready(function(){

   $('#search').click(function(){
     var search_i = $('#search_i').val();
     if(search_i == '' || search_i == 'table'){
         $('.table').parent('div').show();
         $('h1').show();
         $('.up').show();
     }

     if(search_i == 'table one general' || search_i == 'one general'){
       
        $('.t1-g').parent('div').siblings().hide(1000);
        $('.t1-g').parent('div').show();
        $('.up').show();
     }
     if(search_i == 'table one bio' || search_i == 'one bio'){
       
        $('.t1-b').parent('div').siblings().hide(1000);
        $('.t1-b').parent('div').show();
        $('.up').show();
     }
     if(search_i == 'one'){
        $('.table').parent('div').hide();
        $('.t1-g').parent('div').show();
        $('.t1-b').parent('div').show();
        $('.up').show();
     }

      if(search_i == 'table two general' || search_i == 'two general'){
       
        $('.t2-g').parent('div').siblings().hide(1000);
        $('.t2-g').parent('div').show();
        $('.up').show();
     }
     if(search_i == 'table two bio' || search_i == 'two bio' ){
       
        $('.t2-b').parent('div').siblings().hide(1000);
        $('.t2-b').parent('div').show();
        $('.up').show();
     }
     if(search_i == 'two'){
        $('.table').parent('div').hide();
        $('.t2-g').parent('div').show();
        $('.t2-b').parent('div').show();
        $('.up').show();
     }
     if(search_i == 'table three general' || search_i == 'three general' ){
       
        $('.t3-g').parent('div').siblings().hide(1000);
        $('.t3-g').parent('div').show();
        $('.up').show();

     }
     if(search_i == 'table three bio' || search_i == 'three bio' ){
       
        $('.t3-b').parent('div').siblings().hide(1000);
        $('.t3-b').parent('div').show();
        $('.up').show();
     }
     if(search_i == 'three'){
        $('.table').parent('div').hide();
        $('.t3-g').parent('div').show();
        $('.t3-b').parent('div').show();
        $('.up').show();
     }
     if(search_i == 'table four general' || search_i == 'four general' ){
       
        $('.t4-g').parent('div').siblings().hide(1000);
        $('.t4-g').parent('div').show();
        $('.up').show();
     }
     if(search_i == 'table four bio' || search_i == 'four bio' ){
       
        $('.t4-b').parent('div').siblings().hide(1000);
        $('.t4-b').parent('div').show();
        $('.up').show();
     }
     if(search_i == 'four'){
        $('.table').parent('div').hide();
        $('.t4-g').parent('div').show();
        $('.t4-b').parent('div').show();
        $('.up').show();
     }
    if(search_i == 'general'){
        $('.t1-g').parent('div').show();
        $('.t2-g').parent('div').show();
        $('.t3-g').parent('div').show();
        $('.t4-g').parent('div').show();
        $('.t1-b').parent('div').hide();
        $('.t2-b').parent('div').hide();
        $('.t3-b').parent('div').hide();
        $('.t4-b').parent('div').hide();
        $('.up').show();
    }
    if(search_i == 'bio'){
        $('.t1-g').parent('div').hide();
        $('.t2-g').parent('div').hide();
        $('.t3-g').parent('div').hide();
        $('.t4-g').parent('div').hide();
        $('.t1-b').parent('div').show();
        $('.t2-b').parent('div').show();
        $('.t3-b').parent('div').show();
        $('.t4-b').parent('div').show();
        $('.up').show();
    }


   });

   $('.up').click(function(){
    window.scrollTo(0,0);
  })
});


var i = 0;
function move() {
  if (i == 0) {
    i = 1;
    var elem = document.getElementById("myBar");
    var width = 1;
    var id = setInterval(frame, 10);
    function frame() {
      if (width >= 100) {
        clearInterval(id);
        i = 0;
      } else {
        width++;
        elem.style.width = width + "%";
      }
    }
  }
}
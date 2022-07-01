var i = 0;
function move() {
  if (i == 0) {
    i = 1;
    var elem = document.getElementById("myBar");
    var width = 0;
    var id = setInterval(frame,50);
    function frame() {
      if (width >= 100) {
        clearInterval(id);
        i = 0;
      } else {
        width++;
        elem.style.width = width + "%";
        elem.innerHTML = width  + "%";
      }
    }
  }
}

setTimeout(move, 500);

$(document).ready(function(){
     
   

    setTimeout(()=>{
      $('.btn-danger').text('Deleted successfully');
      $('.btn-danger').css({
        'backgroundColor':'rgb(83 82 219 / 84%)'
      })
    },7000);
})

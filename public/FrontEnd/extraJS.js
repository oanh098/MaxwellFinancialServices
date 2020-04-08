// $( document ).ready(function() {
//     $('#headerVideoLink').magnificPopup({
//         type:'inline',
//         midClick: true // Allow opening popup on middle mouse click. Always set it to true if you don't provide alternative source in href.
//     });
//
// });


//
// function myFunction() {
//     var popup = document.getElementById("myPopup");
//     popup.classList.toggle("show");
// }

function toggle(){
    var trailer=document.querySelector(".trailer");
    var video=document.querySelector("video");
    trailer.classList.toggle("active");
    video.pause();
    video.currentTime=0;

}
$(document).keyup(function(e) {

    if (e.keyCode == 27) {
        var trailer=document.querySelector(".trailer");
        trailer.classList.toggle("active");
    }   // esc
});

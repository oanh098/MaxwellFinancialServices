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
    // video.pause();
    // video.currentTime=0;

}
$(document).keyup(function(e) {

    if (e.keyCode == 27) {
        var trailer=document.querySelector(".trailer");
        trailer.classList.toggle("active");
    }   // esc
});

$(document).ready(function() {
    var selectElem = document.querySelector("#country");
    var inputEle = document.querySelector("#telNo");
    var spanvalidity = document.querySelector(".validity");

    selectElem.onchange = function () {
        if(selectElem.value === "AU") {
            inputEle.placeholder = "0123-456-789";
            spanvalidity.style.visibility = "visible";
        }else if(selectElem.value === "Others"){
            inputEle.placeholder = "Maximum 20 digits";
            spanvalidity.style.visibility = "hidden";
        }
    }

})



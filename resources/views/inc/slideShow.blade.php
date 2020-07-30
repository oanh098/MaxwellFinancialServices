 @include('inc.nav')
<div class="ttr_slideshow">
    <div id="ttr_slideshow_inner">
        <ul>
            <li id="Slide0" class="ttr_slide"   data-slideEffect="Fade">
            </li>
            <li id="Slide1" class="ttr_slide"   data-slideEffect="Fade" >
            </li>
            <li id="Slide2" class="ttr_slide"  data-slideEffect="Fade" >
            </li>

        </ul>
    </div>

    <div class="container">
        <div class="ttr_slideshow_in "></div>
    </div>

</div>

<script type="text/javascript">
    var slideIndex = 0;
    carousel();

    function carousel() {
      var i;
      var x = document.getElementsByClassName("ttr_slide");
      for (i = 0; i < x.length; i++) {
        x[i].style.display = "none";
      }
      slideIndex++;
      if (slideIndex > x.length) {slideIndex = 1}
      x[slideIndex-1].style.display = "block";
      setTimeout(carousel, 5000); // Change image every 2 seconds
    }
</script>

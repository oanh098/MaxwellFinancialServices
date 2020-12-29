


  <!-- Slideshow container -->
<section class="slideShow">
    <div class="imgBx">
        <img class="active" src="{{asset('FrontEnd')}}/newImages/Slide1.png" alt="Slide1">
        <img src="{{asset('FrontEnd')}}/newImages/Slide2.png" alt="Slide2">
        <img src="{{asset('FrontEnd')}}/newImages/Slide0.png" alt="Slide0">
    </div>
    <ul class="controls">
         <li onclick="prevSlide();"></li>
         <li onclick="nextSlide();"></li>
     </ul>
</section>

<script type="text/javascript">
    const imgBx = document.querySelector('.imgBx');
    const slides = imgBx.getElementsByTagName('img');
    var i = 0;

    setInterval(() => {
      nextSlide()
    }, 3000);


    function nextSlide(){
        slides[i].classList.remove('active');
        i = (i + 1) % slides.length;
        slides[i].classList.add('active');
    }

    function prevSlide(){
            slides[i].classList.remove('active');
            i = (i - 1 + slides.length) % slides.length;
            slides[i].classList.add('active');
        }

</script>

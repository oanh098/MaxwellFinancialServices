

<section class="slideShow">
  <header>
    <a href="#"><img src="{{asset('FrontEnd')}}/logo.png" alt="Logo Image" /></a>
    <a class="toggle">Menu</a>
    
    <!-- <div id="idMenu"> hello -->
      <ul class="">

              <!-- <div> -->
              @guest
                <li><a href="{{ route('login') }}">{{ __('Login') }}</a></li>
              @if (Route::has('register'))
                <li><a href="{{ route('register') }}">{{ __('Register') }}</a></li>
              @endif
              @else
                <li><a href="/holdings/ {{ Auth::user()->id }}"> {{ Auth::user()->name }} </a></li>
                <li><a onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();"> {{ __('Logout') }} </a></li>
                <div>
                  <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                  </form>
                </div>
              @endguest
              <!-- </div> -->

              <li><a href="index">Home</a></li>
              <li><a href="about">About Us</a></li>
              <li tyle="white-space: nowrap;"><a href="#" s>Services<i class="arrow right"></i></a>
                  <ul>
                    <li><a href="business-growth">Superannuation SMSF</a></li>
                    <li><a href="research-and-strategy">International Investing</a></li>
                    <li><a href="liabilities-management">Fixed Term Deposits Annuties</a></li>
                    <li><a href="clearing-and-execution">Refinancing Advice</a></li>
                    <li><a href="product-solutions">Wills & Power of Attorneys Estate Planning</a></li>
                    <li><a href="transition-services">Transition Services</a></li>
                    <li><a href="why-choose-us">Why Choose Us</a></li>
                    
                  </ul>
              </li>
              <li><a href="resort">Resource</a></li>
              <li><a href="contactus">Contact</a></li>
      </ul>
    <!-- </div> -->
  </header>

  <!-- Slideshow container -->
  <div class="slideshow-container">

    <!-- Full-width images with number and caption text -->
    <div class="mySlides fade-Slideshow">
      <div class="numbertext">1 / 3</div>
      <img src="{{asset('FrontEnd')}}/images/Slide1.png" >
      <!-- <div class="text">Caption Text</div> -->
    </div>

    <div class="mySlides fade-Slideshow">
      <div class="numbertext">2 / 3</div>
      <img src="{{asset('FrontEnd')}}/images/Slide2.png" >
      <!-- <div class="text">Caption Two</div> -->
    </div>

    <div class="mySlides fade-Slideshow">
      <div class="numbertext">3 / 3</div>
      <img src="{{asset('FrontEnd')}}/images/Slide0.png" >
      <!-- <div class="text">Caption Three</div> -->
    </div>

    <!-- Next and previous buttons -->
   <!--  <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
    <a class="next" onclick="plusSlides(1)">&#10095;</a> -->

    <!-- The dots/circles -->
  <!-- <div class="cls-dot" style="text-align:center; margin-top: 20px;">
    <span class="dot" onclick="currentSlide(1)"></span>
    <span class="dot" onclick="currentSlide(2)"></span>
    <span class="dot" onclick="currentSlide(3)"></span>
  </div> -->
  </div>

  

  <style type="text/css">
    /* Slideshow container */
    .slideShow .slideshow-container {
      width: 100%;
      position: absolute;
      margin: auto;
      height: 80vh;
      top: 20vh;

    }

    .slideshow-container div.mySlides img
    {
      width: 100%;
      /*object-fit: cover;*/
      height: 80vh;      
    }

    /* Hide the images by default */
    .mySlides 
    {
      display: none;
    }


    /* Next & previous buttons */
    .prev, .next {
      cursor: pointer;
      position: absolute;
      top: 50%;
      width: auto;
      margin-top: -22px;
      padding: 15px;
      margin: 50px;
      color: white !important;
      font-weight: bold;
      font-size: 24px;
      transition: 0.6s ease;
      border-radius: 0 3px 3px 0;
      user-select: none;
    }

    /* Position the "next button" to the right */
    .next {
      right: 10px;
      border-radius: 3px 0 0 3px;
    }

    /* On hover, add a black background color with a little bit see-through */
    .prev:hover, .next:hover {
      background-color: rgba(0,0,0,0.5);
      color: #fff !important;

    }

    /* Caption text */
    .text {
      color: #f2f2f2;
      font-size: 15px;
      padding: 8px 12px;
      position: absolute;
      bottom: 8px;
      width: 100%;
      text-align: center;
    }

    /* Number text (1/3 etc) */
    .numbertext {
      color: #f2f2f2;
      font-size: 12px;
      padding: 8px 12px;
      position: absolute;
      top: 0;
    }

    /* The dots/bullets/indicators */
    .dot {
      cursor: pointer;
      height: 15px;
      width: 15px;
      margin: 0 2px;
      background-color: rgba(0,0,0,.5);
      border-radius: 50%;
      display: inline-block;      
      transition: background-color 0.6s ease;
    }

    .activedot, .dot:hover {
      /*background-color: #717171;*/
      /*background: rgba(255,255,255,.3);*/
    }

    /* Fading animation */
    .fade-Slideshow {
      -webkit-animation-name: fade-Slideshow;
      -webkit-animation-duration: 1.5s;
      animation-name: fade-Slideshow;
      animation-duration: 1.5s;
    }

    @-webkit-keyframes fade-Slideshow {
      from {opacity: .4}
      to {opacity: 1}
    }

    @keyframes fade-Slideshow {
      from {opacity: .4}
      to {opacity: 1}
    }

    @media (max-width: 991px)
    {
      .slideShow .slideshow-container {
      height: 60vh;

    }

    .slideshow-container div img
    {
      height: 60vh;      
    }
    }
  </style>

  <script type="text/javascript">
    var slideIndex = 0;
    showSlides();

    function showSlides() {
      var i;
      var slides = document.getElementsByClassName("mySlides");
      for (i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";
      }
      slideIndex++;
      if (slideIndex > slides.length) {slideIndex = 1}
      slides[slideIndex-1].style.display = "block";
      setTimeout(showSlides, 2000); // Change image every 2 seconds
    }
  </script>

  <style type="text/css">
    header ul li.active a
    {
      background: rgba(163,156,135,.7);
      color: #fff;
    }
    .slideShow header ul li a i.arrow 
    {
      border: solid black;
      border-width: 0 3px 3px 0;
      display: inline-block;
      padding: 3px;
      margin-left: 5px;
    }
    .slideShow header ul li a:hover i.arrow
    {
      border: solid white;
      border-width: 0 3px 3px 0;
    }
    .slideShow
    {
      position: relative;
      width: 100%;
      height: 100vh;
      /*background: url("{{asset('FrontEnd')}}/images/Slide1.png");*/
      display: flex;
      flex-direction: column;
      justify-content: center;
      align-items: center;

    }

    .slideShow header
    {
      position: absolute;
      
      width: 100%;
      height: 20vh;
      top: 0;
      box-sizing: border-box;
      background: rgba(255,255,255,.5);
      box-shadow: 0 5px 50px rgba(0,0,0,.3);
      transition: .5s;
      display: flex;
      justify-content: space-between;
      align-items: center;
      padding: 0px  150px;
    }

    .slideShow .slideshow-container 
    {
      height: 80vh;
      top: 20vh;
    }
    /*document.querySelector("#idMenu")*/
    
    .slideShow header img
    {
      height: 20vh;
      position: absolute;
      top:0;
    }
    .slideShow header ul
    {
      display: flex;
      justify-content: center;
      align-items: center;
      position: relative;
      transition: .5s;
      /*padding-right: 150px;*/
      /*left: 80vh;*/
      /*background: rgba(255,255,255,.2);*/

    }
    .slideShow header ul li
    {
      list-style: none;
    }
    .slideShow header ul li ul
    {
      position: absolute;
      background: rgba(255,255,255,.8);
      /*<rect width="100" height="8"></rect>*/
      /*top: 53px;*/
      display: block;
      transition: .5s;
      visibility: hidden;
      opacity: 0;
      z-index: 1;

    }
     .slideShow header ul li:hover ul
     {
        visibility: visible;
        opacity: 1;
     }
     .slideShow header ul li ul li
     {
      border-bottom: 1px solid rgba(0,0,0,.3);
     }
    .slideShow header ul li a
    {
      position: relative;
      display: block;
      padding: 10px 10px;
      margin: 5px 0;
      text-transform: uppercase;
      text-decoration: none;
      color: #000; 
      font-weight: bold;
      transition: .5s;
    }
    .slideShow header ul li a:hover
    
    {
      background: #A39C87;
      color: #fff;    

    }
    .toggle
    {
      display: none;
      position: absolute;
      top:10px;
      right: 26px;
      background: rgba(0,0,0,.3);
      color: #000;
      padding: 10px;
      cursor: pointer;
      font-weight: bold;
    }

    @media (min-width: 1073px) and (max-width: 1447px)
    {
      .slideShow header
      {
        padding: 0 30px;
      }
      .slideShow header ul li a
      {
        padding: 5px;
      }
    }

    @media (max-width: 1140px)
    {
      .slideShow
      {
        /*height: 80vh;*/
      }
      .slideShow .slideshow-container 
    {
      /*height: 60vh;*/
      /*top: 20vh;*/
    }
      .slideShow header
      {
        flex-direction: column;
        padding: 0;
        background: rgba(255,255,255,1);
      }
      .slideShow header img {
        top: 0;
        left: 0;
      }

     .slideShow header ul li a i.arrow 
        {
          border: solid white;
          border-width: 0 3px 3px 0;
          display: inline-block;
          padding: 3px;
          margin-left: 5px;
        }

      .slideShow header  ul
      {
        width: 100%;
        top: 20vh;
        display: none;
        z-index: 1;
      }

      .slideShow header  ul.activeul 
      {
        display: block;
      }

      .slideShow header ul li a
      {
        margin: 0;
        display: block;
        color: #fff;
        background: rgba(0,0,0,.5);
      }
      .slideShow header  ul li ul
      {
        
        background: rgba(255,255,255,.7);
        top: 30vh;
      }
      .toggle
      {
        display: block;
      }
    }
  </style>

  <script type="text/javascript">
    $(document).ready(function(){
              $('.slideShow .toggle').click(function(){
                  $('.slideShow ul').toggleClass('activeul');
              })

              
          })
   
  </script>

</section>
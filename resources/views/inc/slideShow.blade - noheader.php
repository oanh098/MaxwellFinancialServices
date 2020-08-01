 <!-- @include('inc.nav') -->
<div class="ttr_slideshow">
    <div id="ttr_slideshow_inner" >

        <!-- <a href="#"><img src="{{asset('FrontEnd')}}/slideshowlogo.png" style="height: 80px;"></a> -->
        <a class="toggle">Menu</a>
        

        <ul id="menuself" class="" style="">

            
            <li ><a href="index">Home</a></li>
            <li><a href="about">About Us</a></li>
            <li><a href="#">Services<i class="arrow right"></i></a>
                <ul>
                  <li><a href="business-growth">Superannuation SMSF</a></li>
                  <li><a href="research-and-strategy">International Investing</a></li>
                  <li><a href="liabilities-management">Fixed Term Deposits Annuties</a></li>
                  <li><a href="clearing-and-execution">Refinancing Advice</a></li>
                  <li><a href="product-solutions">Wills & Power of Attorneys Estate Planning</a></li>
                  <li><a href="transition-services">Transition Services</a></li>
                  
                </ul>
            </li>
            <li><a href="resort">Resource</a></li>
            <li><a href="contactus">Contact</a></li>
            

        </ul>

        <ul id="menuAuth">
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

        </ul>

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

<style type="text/css">
/*document.querySelector("#menuself > li:nth-child(6)")*/
 
/*document.querySelector("#menuself > li:nth-child(6)")*/
 


  #ttr_slideshow_inner #menuself li a i.arrow {
    border: solid white;
    border-width: 0 3px 3px 0;
    display: inline-block;
    padding: 3px;
    margin-left: 5px;
  }
  #ttr_slideshow_inner #menuself
  {
    display: flex; 
    float: right; 
    margin-right: 100px;
    position: relative;
    transition: .5s;
    z-index: 3000;
    max-width: 1200px;
    border-bottom: 1px solid rgba(0,0,0,.2);
  }
 

  #ttr_slideshow_inner #menuAuth
  {
    display: flex;
    float: left;
    margin-left: 20px;
    position: relative;
    transition: .5s;
    z-index: 3000;
    max-width: 1200px;
    border-bottom: 1px solid rgba(0,0,0,.2);
  }

  #ttr_slideshow_inner #menuAuth li a
 {
    position: relative;
    display: block;
    padding: 10px 20px;
    margin: 10px 0;
    text-transform: uppercase;
    text-decoration: none;
    color: #262626;
    font-weight: bold;
    transition: .5s;
    white-space: nowrap;
 }

 #ttr_slideshow_inner #menuself li a
 {
    position: relative;
    display: block;
    padding: 10px 20px;
    margin: 10px 0;
    text-transform: uppercase;
    text-decoration: none;
    color: #262626;
    font-weight: bold;
    transition: .5s;
    white-space: nowrap;
 }
 #ttr_slideshow_inner #menuself li a:hover
    {
      background:#A39C87;
      /*color: #fff;*/

    }

 #ttr_slideshow_inner #menuself li ul
  {
    position: absolute;
    /*background:#000;*/
    background: rgba(255,255,255,.7);
    display: block;
    top: 50px;
    left: 222px;
    max-width: 1200px;
    color: #fff;
    transition: 0.3s;
    visibility: hidden;
    opacity: 0;
  }
  #ttr_slideshow_inner #menuself li:hover ul
  {
    visibility: visible;
    opacity: 1;
  }

  #ttr_slideshow_inner #menuself li ul li
  {
    border-bottom: 1px solid rgba(255,255,255,.2);
    border-right: none;
   
    /*height: 25px;*/
  }


  #ttr_slideshow_inner .toggle
  {
    display: none;
    position: absolute;
    right: 10px;
    top: 26px;
    background: rgba(0,0,0,.3);
    color: #fff;
    padding: 5px;
    cursor: pointer;
    font-weight: bold;
  }
  @media (max-width: 992px)
  /*@media (max-width: 768px)*/
  {
    #ttr_slideshow_inner .toggle
    {
      display: block;
      top: 120px;
      z-index: 30001;
    }
    #ttr_slideshow_inner
    {
      padding: 0 0;
      background: rgba(255,255,255,.5);
    }
    #ttr_slideshow_inner #menuself
    {
      width: 100%;
      top: 40px;
      display: none;
      margin-right: 0;
      /*margin-top: 80px;*/
    }
    #ttr_slideshow_inner #menuself.activeul 
    {
      display: block;
      margin-top: 100px;

    }

    #ttr_slideshow_inner #menuAuth
    {
      display: flex;
      top: 120px;
      margin-left: 0px;
      border-bottom: 0;

    }
    #ttr_slideshow_inner #menuAuth li a
    {
      padding: 0 10px;
      margin: 0;
      text-transform: uppercase;
      text-decoration: none;
      font-weight: normal;
    }
   
   
    #ttr_slideshow_inner #menuself li a
      {
        padding: 5px 10px;
        margin: 0;
        display: block;
        text-align: center;
        color: #ffff;
        background: rgba(0,0,0,.5);
      }
      #ttr_slideshow_inner #menuself li ul
      {
        width: 100%;
        top: 100px;
        left: 0;
        z-index:29999; 
      }
     #ttr_slideshow_inner #menuself li ul li a
    {
       padding:5px;
      margin: 0 5px;
    }

      

  }
</style>

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

        $(document).ready(function(){
            $(' #ttr_slideshow_inner .toggle').click(function(){
                $('#ttr_slideshow_inner #menuself').toggleClass('activeul');
            })
        })
    </script>


</div>



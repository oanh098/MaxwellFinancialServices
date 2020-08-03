 <!-- @include('inc.nav') -->
<div class="ttr_slideshow">
    <div id="ttr_slideshow_inner" >
      <header id="headerMenu" class="">
       

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

        <a class="toggle">Menu</a>
        
        <ul id="menuself" style="">

            
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

        
      </header>

        

        <ul>
            <li id="Slide0" class="ttr_slide"   data-slideEffect="Fade">
            </li>
            <li id="Slide1" class="ttr_slide"   data-slideEffect="Fade" >
            </li>
            <li id="Slide2" class="ttr_slide"  data-slideEffect="Fade" >
            </li>

        </ul>

    </div>

    <div class="container" >
        <div class="ttr_slideshow_in " ></div>
    </div>

<style type="text/css">


  #headerMenu #menuAuth
  {
    display: flex;
    justify-content: center;
    align-items: center;
  }

 
  #headerMenu #menuself li a i.arrow {
    border: solid black;
    border-width: 0 3px 3px 0;
    display: inline-block;
    padding: 3px;
    margin-left: 5px;
  }
#headerMenu
  {
    display: flex;
    justify-content: space-around;
    align-items: center;
    border-bottom: 1px solid rgba(0,0,0,.1);
  }
#headerMenu #menuself
{
  display: flex;
  justify-content: space-around;
  margin-right: 10px;
  position: relative;
  transition: .5s;
  z-index: 3000;
  max-width: 1200px;
  width: 100%;
}
#headerMenu #menuself li a
,#headerMenu #menuAuth li a
{
  display: block;
  padding: 15px 30px;
  text-transform: uppercase;
  text-decoration: none;
  color: rgba(0,0,0,1);
  font-weight: bold;
  transition: .5s;
  white-space: nowrap;
}
#headerMenu #menuself li a:hover,
#headerMenu #menuAuth li a:hover
{
  background:#A39C87;
  /*color: #fff;*/

}
#headerMenu #menuself li ul
{
  position: absolute;
  background: rgba(255,255,255,.7);
  display: block;
  top: 50px;
  left: 450px;
  max-width: 1200px;
  color: #fff;
  transition: 0.3s;
  visibility: hidden;
  opacity: 0;
}
#headerMenu #menuself li:hover ul
{
  visibility: visible;
  opacity: 1;
}
#headerMenu #menuself li ul
{
  position: absolute;
  background: rgba(0,0,0,.4);
  display: block;
  top: 60px;
  left: 450px;
  max-width: 1200px;
  color: #fff;
  transition: 0.3s;
  visibility: hidden;
  opacity: 0;
  z-index: 39999;
}

#headerMenu #menuself li ul li
{
  border-bottom: 1px solid rgba(0,0,0,.3);
}

#headerMenu .toggle
{
  display: none;
  position: absolute;
  right: 20px;
  top: 136px;
  background: rgba(0,0,0,.3);
  color: #fff;
  padding: 5px;
  cursor: pointer;
  font-weight: bold;
}

 @media (max-width: 992px)
 {
    #headerMenu .toggle
    {
      display: block;
      top:120px;
    }
    #headerMenu
    {
      border-bottom: none;
    }

    #headerMenu.activeul
    {
      margin-top: 90px;
      display: block;
     
    }
    #headerMenu #menuself li a i.arrow {
    border: solid white;
    border-width: 0 3px 3px 0;
    display: inline-block;
    padding: 3px;
    margin-left: 5px;
  }
    #headerMenu.activeul #menuself
     {
      display: block;
      background: rgba(0,0,0,.4);
      top: -17px;
      right: 0px;

     }
     #headerMenu.activeul #menuAuth
     {
      display: block;
      background: rgba(0,0,0,.4);
      top: 100px;
      right: 0px;

     }
    #headerMenu #menuself li a
    ,#headerMenu #menuAuth li a
    {
      padding: 5px 10px;
      color: white;
    }
    #headerMenu #menuself li ul
    {
      top: 103px;
      background:rgba(0,0,0,.7);
      left: 0;
      width: 100%;
      
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
            $(' #headerMenu .toggle').click(function(){
                $('#headerMenu').toggleClass('activeul');
            })
        })
    </script>


</div>



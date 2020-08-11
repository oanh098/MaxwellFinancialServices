





<section id="idSection" class="slideShow">
  <header>
    <a href="#"><img src="{{asset('FrontEnd')}}/logo.png" alt="Logo Image" /></a>
    <a class="toggle">Menu</a>
    
      <ul class="">

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
                    <li><a href="why-choose-us">Why choose Us</a></li>
                    
                  </ul>
              </li>
              <li><a href="resort">Resource</a></li>
              <li><a href="contactus">Contact</a></li>
      </ul>
  </header>

  <h1>{{$headerTitle ?? ''}}
  </h1>

  <style type="text/css">
    #idSection header ul li.active a
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
      height: 60vh;
      background: url("{{asset('FrontEnd')}}/images/Slide1.png");
      background-position: center center;
      background-size: cover;
      background-repeat: no-repeat;
      display: flex;
      justify-content: space-between;
      align-items: center;
      flex-direction: column;

    }

    

    .slideShow header
    {
      /*position: relative;*/
      
      width: 100%;
      height: 20vh;
      box-sizing: border-box;
      background: rgba(255,255,255,.8);
      box-shadow: 0 5px 50px rgba(0,0,0,.3);
      transition: .5s;
      display: flex;
      justify-content: space-between;
      align-items: center;
      padding: 0  150px;
    }
    #idSection h1
    {
      background: rgba(255,255,255,.2);
      align-self: center;
      font-size: 80px;
      margin-bottom: 10%;
    }
    /*.slideShow header div
    {
      display: flex;
      justify-content: center;
      align-items: center;
      /*align-self: flex-end;*/
      /*float: right;*/
      /*position: relative;*/
      /*left: 20%;*/
    /*}*/
    .slideShow header img
    {
      height: 20vh;
      position: absolute;
      /*left: 10px;*/
      top:0;
    }
    .slideShow header ul
    {
      display: flex;
      position: relative;
      transition: .5s;
      padding: 0;
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
      top: 53px;
      display: block;
      transition: .5s;
      visibility: hidden;
      opacity: 0;
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

    @media (max-width: 1140px)
    {
       .slideShow header
      {
        padding: 0;

      }
      .slideShow header img
      {
        height: 20vh;
        padding: 0 20px;
      }
      .slideShow header ul li a
      {
        padding: 5px 5px;
      }
     /* .slideShow header ul div
      {
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
      }*/

    }

     @media (min-width: 1139px) and (max-width: 1447px)
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
   
      #idSection h1
      {
        font-size: 60px;
        margin-bottom: 15%;
        align-self: center;
      }
      .slideShow
      {
        height: 70vh;
        align-items: center;
      }
      .slideShow header
      {
        flex-direction: column;
        justify-content: center;
        align-items: flex-start;
        padding: 0;
        background: rgba(255,255,255,1);
      }

     .slideShow header ul li a i.arrow 
      {
        border: solid white;
        border-width: 0 3px 3px 0;
        display: inline-block;
        padding: 3px;
        margin-left: 5px;
      }
      .slideShow header img 
      {
        top: 0;
        left: 0;
      }

    

      .slideShow header  ul
      {
        width: 100%;
        top: 30vh;
        display: none;
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
        z-index: 1;
        background: rgba(255,255,255,.7);
        top: 25vh;
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
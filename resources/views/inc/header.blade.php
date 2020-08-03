

<section id="idSection" class="slideShow" >
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
  <h1>{{$headerTitle ?? ''}}
    </h1>
  <style type="text/css">
    #idSection
    {
      display: flex;
      flex-direction: column;
      justify-content: space-between;
      align-items: center;
    }
    #idSection h1
    {
      background: rgba(255,255,255,.2);
      align-self: center;
      font-size: 80px;
      margin-bottom: 10%;
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
      object-fit: fill;

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
    .slideShow header img
    {
      height: 20vh;
      position: absolute;
      left: 10px;
      top:0;
      padding: 0  150px;
    }
    .slideShow header ul
    {
      display: flex;
      position: relative;
      float: right;
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
      padding: 10px 20px;
      margin: 10px 0;
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
    @media (max-width: 768px)
    {
       #idSection h1
      {
        font-size: 50px;
        margin-bottom: 15%;
      }
      .slideShow header
      {
        padding: 0 0;
        background: rgba(255,255,255,1);
      }
      .slideShow header img {
        top: 0;
        left: -150px;
      }
      .slideShow header ul
      {
        width: 100%;
        top: 30vh;
        display: none;
      }
      .slideShow header ul.activeul 
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
      .slideShow header ul li ul
      {
        z-index: 1;
        background: rgba(255,255,255,.7);
        top: 15vh;
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
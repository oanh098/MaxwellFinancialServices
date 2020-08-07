<div class="clsPopupMenu">
  <div id="TopLogo">
    <a href=""><img src="{{asset('FrontEnd')}}/logo.png" alt="Logo Image" /></a>
    <a href=""><img src="{{asset('FrontEnd')}}/images/return.png"  alt="" class=""  olick="toggle()"></a>
  </div>
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
                
              </ul>
          </li>
          <li><a href="resort">Resource</a></li>
          <li><a href="contactus">Contact</a></li>
  </ul>

  <style type="text/css">
    .clsPopupMenu
    {
      position: relative;
      display: flex;
      justify-content: space-around;
      align-items: center;
      height: 20vh;
      background: rgba(255,255,255,.8);
      width: 100%;
    }
    .clsPopupMenu #TopLogo
    {
      display: flex;
      justify-content: center;
      align-items: center;
    }
    /*document.querySelector("#ttr_html_content_margin > div > div:nth-child(1) > div > div > a:nth-child(2) > img")*/
    /*document.querySelector("#TopLogo > a:nth-child(2) > img")*/
    .clsPopupMenu #TopLogo a:nth-child(2) img
    /*close img*/
    {
      position: absolute;
      right: 20px;
      top:0;
      cursor:pointer;
      /*filter: invert(1);*/
      max-width: 30px;
    }
    .clsPopupMenu #TopLogo a:nth-child(1) img
    /*logo*/
    {
      height: 20vh;
      position: absolute;
      left: 10px;
      top:0;
      padding: 0 150px;
    }
    .clsPopupMenu ul
    {
      display: flex;
      justify-content: flex-end;
      align-items: center;
      margin-top: 30px;
      position: relative;
      z-index: 1000;


    }
    .clsPopupMenu ul li
    {
      list-style: none;
    }
    .clsPopupMenu ul li ul
    {
      display: block;
      flex-direction: column;
      align-items: flex-start;
      visibility: hidden;
      opacity: 0;
      position: absolute;
      background: rgba(0,0,0,.8);
      top:0;
    }
    .clsPopupMenu ul li:hover ul
    {

      visibility: visible;
      opacity: 1;
    }
    .clsPopupMenu ul li a
    {
      padding: 20px;
      margin: 0 5px;
      text-transform: uppercase;
      text-decoration: none;
    }

    .clsPopupMenu ul li a:hover
    
    {
      background: #A39C87;
      color: #fff;    

    }

     .clsPopupMenu ul li a i.arrow 
    {
      border: solid black;
      border-width: 0 3px 3px 0;
      display: inline-block;
      padding: 3px;
      margin-left: 5px;
    }

    .clsPopupMenu ul li ul li
    {
      list-style: none;
      border-bottom: solid 1px rgba(255,255,255,.3);
    }
    .clsPopupMenu ul li ul li a
    {
      display: block;
    }

    @media (max-width: 991px)
    {
      .clsPopupMenu 
      {
        visibility: hidden;
        opacity: 0;
      }

    }

  </style>

  <script type="text/javascript">
    $(document).ready(function(){
      $('clsPopupMenu ')
    })
  </script>

</div>


















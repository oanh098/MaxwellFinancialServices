<header>
    <ul id="Auth" style="list-style: none">
    @guest
        <li ><a href="{{ route('login') }}">{{ __('Login') }}</a></li>
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

    <a href="#" id="logo"><img src="{{asset('FrontEnd')}}/logo.png" alt="Logo Image" /></a>
    <a class="menu-toggle"><i class="fa fa-bars" aria-hidden="true"></i></a>

    <nav>
        <ul class="navobj">
              <li class=" {{ Request()->is(['/','index']) ? 'activeLink' : '' }}"><a href="index">Home</a></li>
              <li class="{{ Request()->is('about') ? 'activeLink' : '' }}"><a href="about">About Us</a></li>
              <li class="submenu {{ Request()->is(['business-growth', 'research-and-strategy'
                                                    , 'liabilities-management', 'clearing-and-execution'
                                                    , 'product-solutions', 'transition-services', 'why-choose-us'])
                                                    ? 'activeLink' : '' }}"><a href="#">Services</a>
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
              <li class="{{ Request()->is('resort') ? 'activeLink' : '' }}"><a href="resort">Resource</a></li>
              <li class="{{ Request()->is('contactus') ? 'activeLink' : '' }}"><a href="contactus">Contact</a></li>

        </ul>
    </nav>
</header>

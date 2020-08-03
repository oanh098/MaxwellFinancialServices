<header id="ttr_header">
	<div id="headerMenu" class="">

	<ul id="menuAuth" class="">
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

    <ul id="menuself" class="" >
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
	</div>

	<div class="container">
	    <div id="ttr_header_inner" style="display: flex; justify-content: center; align-items: center;">
	        
	        <div class="ttr_header_logo" >
	            <img src="{{asset('FrontEnd')}}/logo.png" alt="Logo Image" />
	        </div>
	        
	        <div class="ttr_headershape01"  style="display: flex;  justify-content: center; align-items: center;">
	            <h1 class="h1header" >{{$headerTitle ?? ''}}
	            </h1>
	        </div>
		</div>
	</div>

	
	<style type="text/css">
		#ttr_header #menuself li a i.arrow {
		    border: solid black;
		    border-width: 0 3px 3px 0;
		    display: inline-block;
		    padding: 3px;
		    margin-left: 5px;

		  }
		#ttr_header
		{
			display: flex;
			justify-content: space-around;
			align-items: center;
			margin-bottom: 1.5em;
		}
		#ttr_header .container
		{
			position: absolute;
		}
		#headerMenu
		{
			display: flex;
			justify-content: center;
			align-items: center;
			z-index: 99998;
		}
		#ttr_header #menuself
		/*,#ttr_header #menuAuth*/
		{
			display: flex;
			justify-content: center;
			align-items: center;
			position: relative;
			top:-125px;
		  	z-index: 99999;
		  	border-bottom: 1px solid rgba(255,255,255,.2);
		}
		#ttr_header #menuAuth
		{
			display: flex;
			justify-content: center;
			align-items: center;
			position: relative;
			top:-125px;
		  	z-index: 99999;
		  	border-bottom: 1px solid rgba(255,255,255,.2);
		}
		#ttr_header #menuAuth li:nth-child(2)
		{
			border-right: 1px solid rgba(0,0,0,.8);
		}
		#ttr_header #menuself li
		,#menuAuth li
		{
			list-style: none;
		}
		#ttr_header #menuself li a
		,#ttr_header #menuAuth li a
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
		#ttr_header #menuself li a:hover
		,#ttr_header #menuAuth li a:hover
		{
		  background: #A39C87;
		}
		#ttr_header #menuself li ul
		{
		  position: absolute;
		  background: rgba(255,255,255,.7);
		  display: block;
		  top: 51	px;
		  left: 260px;
		  max-width: 1200px;
		  color: #fff;
		  transition: 0.3s;
		  visibility: hidden;
		  opacity: 0;
		}
		#ttr_header #menuself li:hover ul
		{
			visibility: visible;
  			opacity: 1;
		}
		#ttr_header .toggle
		{
			display: none;
			position: absolute;
			  right: 20px;
			  top: 110px;
			  background: rgba(0,0,0,.4);
			  color: #fff;
			  padding: 5px;
			  cursor: pointer;
			  font-weight: bold;
		}
		
		@media (max-width: 992px)
		{
			#ttr_header #menuself li a i.arrow {
		    border: solid white;
		    border-width: 0 3px 3px 0;
		    display: inline-block;
		    padding: 3px;
		    margin-left: 5px;

		  }
			#ttr_header .toggle
			{
				display: block;
				top: 150px;
				right: 50px;
				z-index: 30001;

			}
			 #ttr_header #headerMenu
		    {
		      display: block;
		      width: 100%;
		    }
		    

		    #ttr_header #headerMenu.activeul
		    {
		      margin-top: 100px;
		      display: block;

		    }
		     #ttr_header #headerMenu #menuself 
			, #ttr_header #headerMenu #menuAuth
			{
				
		      display: none;
			}

			 #ttr_header #headerMenu.activeul #menuself 
			, #ttr_header #headerMenu.activeul #menuAuth
			{
				border-bottom: none;
		      background: rgba(0,0,0,.5);
		      top: -30px;
		      left: 10px;
		      width: 90%;
		      display: block;
			}


			#ttr_header #menuself li ul
			{
				top: 105px;
		      background:rgba(0,0,0,.8);
		      left: 0;
		      width: 100%;
			}
			#ttr_header #menuself li a
			,#ttr_header #menuAuth li a
			{
				padding: 5px 10px;
      			color: white;
			}
			
		}

	</style>

	<script type="text/javascript">
    

        $(document).ready(function(){
            $(' #ttr_header .toggle').click(function(){
                $('#ttr_header #headerMenu').toggleClass('activeul');
            })
        })
    </script>


</header>

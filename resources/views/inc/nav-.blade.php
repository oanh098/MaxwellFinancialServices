

<nav class="navbar navbar-expand-md navbar-light bg-light" id ="topheader">
    <div class="container" style="display: flex; flex-direction: row-reverse;">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target=".navbar-collapse" >
                <span class="navbar-toggler-icon"></span>
                </span>
            </button>

            <div class="collapse navbar-collapse" >
                <ul class="nouppercase nav navbar-nav align-items-center"  >
                    @guest
                        <li class="nav-item" >
                            <a class="nav-link" href="{{ route('login') }}">
                                {{ __('Login') }}</a>
                        </li>
                    @if (Route::has('register'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                        </li>
                    @endif
                    @else
                        <li class="nav-item dropdown" >
                            <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" data-target="dropdown_target1">
                                {{ Auth::user()->name }}
                            </a>

                            <div class="dropdown-menu"  aria-labelledby="dropdown_target1">
                                <a class="dropdown-item"
                                   onclick="event.preventDefault();
                                         document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>
                                <a class="dropdown-item" href="/holdings/ {{ Auth::user()->id }}">Profile</a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    @csrf
                                </form>
                            </div>
                        </li>
                    @endguest
                </ul>

                <ul class="ttr_menu_items nav navbar-nav navbar-right ml-auto align-items-center" id="navid">
                    <li class="ttr_menu_items nav-item active">
                        <a href="index" class="nav-link">Home</a>
                    </li>

                    <li class="nav-item ">
                        <a href="about" class="nav-link">
                            About Us</a>
                    </li>

                    <li class="nav-item dropdown" >
                        <a href="#" class="nav-link dropdown-toggle " data-toggle="dropdown" data-target="dropdown_target">Services</a>
                        <div class="dropdown-menu" aria-labelledby="dropdown_target">
                            <a class="dropdown-item" href="business-growth">Superannuation SMSF</a>
                            <a class="dropdown-item" href="research-and-strategy">International Investing</a>
                            <a class="dropdown-item" href="liabilities-management">Fixed Term Deposits Annuties</a>
                            <a class="dropdown-item" href="clearing-and-execution">Refinancing Advice</a>
                            <a class="dropdown-item" href="product-solutions">Wills & Power of Attorneys Estate Planning</a>
                            <a class="dropdown-item" href="transition-services">Transition Services</a>
                        </div>
                    </li>

                    <li class="nav-item">
                        <a href="resort" class="nav-link">Resource</a>
                    </li>

                    <li class="nav-item">
                        <a href="contactus" class="nav-link">Contact</a>
                    </li>
                </ul>
            </div>
    </div>

</nav>

<script type="text/javascript">

    $( '#topheader #navid.navbar-nav a' ).on( 'click', function () {
    $( '#topheader #navid.navbar-nav' ).find( 'li.active' ).removeClass( 'active' );
    $( this ).parent( 'li' ).addClass( 'active' );
});

//     $(document).ready(function() {
//   $( '#topheader #navid.navbar-nav' ).find( 'li.active' ).removeClass( 'active' );
//   // alert ('hi: ') + $(event.target).text();
//   console.log ('hi: ' + $('a[href="' + location.pathname + '"]'))
//   $('a[href="' + location.pathname + '"]').closest('li').addClass('active'); 
// });

    
</script>




<!-- <section class="menuself">

<style type="text/css">
    section.menuself
    {
        position: relative;
        width: 100%;
        height: 100vh;
        /*background: url(FrontEnd/images/Slide1.png);
        background-position: center center;
        background-repeat: no-repeat;*/
    }
    header.menuself
    {
        padding: 0 100px;
        width: 100%;
        height: 80px;
        box-sizing: border-box;
        background: rgba(255,255,255,.2);
        box-shadow: 0 5px 15px rgba(0,0,0,.2);
        transition: .5s;
    }
    header.menuself ul
    {
        position: relative;
        margin: 0;
        /*margin-top: 80px;*/
        padding: 0;
        display: flex;
        float: right;
        transition: .5s;
    }
    header.menuself ul li
    {
        list-style: none;
    }
    header.menuself ul li a
    {
        position: relative;
        display: block;
        padding: 10px 20px;
        margin: 20px 0;
        text-transform: uppercase;
        text-decoration: none;
        color: #262626;
        font-weight: bold;
        transition: .5s;
    }
     header.menuself ul li a:hover
    {
        background: #000;
        color: #fff;

    }
    header.menuself .toggle
    {
        display: none;
        position: absolute;
        right: 10px;
        top: 26px;
        background: #f00;
        color: #fff;
        padding: 5px;
        cursor: pointer;
        font-weight: bold;

    }
    @media (max-width: 992px)
    {
        header.menuself .toggle
        {
            display: block;
        }
        header.menuself
        {
            padding: 0 0;
            background: rgba(255,255,255,.5);
        }
        header.menuself  ul
        {
            width: 100%;
            top: 0;
            display: none;
            margin-top: 80px;
        }
        header.menuself  ul.active
        {
            display: block;
        }

        header.menuself  ul li a
        {
            margin: 0;
            display: block;
            text-align: center;
            color: #ffff;
            background: rgba(0,0,0,.5);

        }

    }

</style>

    <header class="menuself">
         <a href="#"><img src="{{asset('FrontEnd')}}/images/westpac-logo.png" style="height: 80px;"></a> -->
       <!--  <a class="toggle">Menu</a>
        <ul class="active">
            <li ><a href="index">Home</a></li>
            <li><a href="about">About Us</a></li>
            <li><a href="#">Home2</a></li>
            <li><a href="#">Home3</a></li>
            <li><a href="#">Home4</a></li>
            <li><a href="#">Home5</a></li>
        </ul>
    </header>

    <script type="text/javascript">
        $(document).ready(function(){
            $('.toggle').click(function(){
                $('ul').toggleClass('active');
            })
        })
    </script>
</section> --> 









<section class="menuself">

<style type="text/css">
    
    
    
    section.menuself header ul
    {
        position: relative;
        margin: 0;
        /*margin-top: 80px;*/
        padding: 0;
        display: flex;
        float: right;
        transition: .5s;
    }
    section.menuself header ul li
    {
        list-style: none;
    }
    section.menuself header ul li a
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
    section.menuself header ul li a:hover
    {
        background: #000;
        color: #fff;

    }
    section.menuself header .toggle
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
        section.menuself header .toggle
        {
            display: block;
        }
        section.menuself header
        {
            padding: 0 0;
            background: rgba(255,255,255,.5);
        }
        section.menuself header  ul
        {
            width: 100%;
            top: 0;
            display: none;
            margin-top: 80px;
        }
        section.menuself header  ul.active
        {
            display: block;
        }

        section.menuself header  ul li a
        {
            margin: 0;
            display: block;
            text-align: center;
            color: #ffff;
            background: rgba(0,0,0,.5);

        }

    }
    section.menuself
    {
        position: relative;
        width: 100%;
        height: 100vh;
        display: flex;
        /*flex-direction: column;*/
        /*background: url(FrontEnd/images/Slide1.png);
        background-position: center center;
        background-repeat: no-repeat;*/
    }

    section.menuself header
    {
        padding: 0 100px;
        width: 100%;
        height: 80px;
        box-sizing: border-box;
        background: rgba(255,255,255,.2);
        box-shadow: 0 5px 15px rgba(0,0,0,.2);
        transition: .5s;
        order: 1;
    }

</style>
    
   
    

    <header>
        <a href="#"><img src="{{asset('FrontEnd')}}/images/westpac-logo.png" style="height: 80px;"></a>
        <a class="toggle">Menu</a>
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
</section>



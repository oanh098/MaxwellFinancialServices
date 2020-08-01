<header id="ttr_header" >

	

	<div class="container">
    <div id="ttr_header_inner" style="display: flex; justify-content: center; align-items: center;">
        
        <div class="ttr_header_logo" >
            <img src="{{asset('FrontEnd')}}/logo.png" alt="Logo Image" />
        </div>
        
        <div class="ttr_headershape01"  style="display: flex;  justify-content: center; align-items: center;">

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

            <h1 class="h1header" >{{$headerTitle ?? ''}}
            </h1>
        </div>

	</div>
	</div>

	<style type="text/css">
		#ttr_header #menuself li a i.arrow {
		    border: solid white;
		    border-width: 0 3px 3px 0;
		    display: inline-block;
		    padding: 3px;
		    margin-left: 5px;

		  }
		#ttr_header #menuself
		  {
		    display: flex; 
		    float: right; 
		    right: -3%; 
		    top: -38%;
		    position: relative;
		    transition: .5s;
		    max-width: 1200px;
		    z-index: 4000;
		  }
		#ttr_header #menuself li
			{
				list-style: none;
			}
		#ttr_header #menuself li a
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
		 #ttr_header #menuself li a:hover
		    {
		      background:#A39C87;
		      /*color: #fff;*/

		    }
	    #ttr_header #menuself li ul
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
		#ttr_header #menuself li:hover ul
			  {
			    visibility: visible;
			    opacity: 1;
			  }
		#ttr_header #menuself li ul li
		  {
		    border-bottom: 1px solid rgba(255,255,255,.2);
		    border-right: none;
		   
		    /*height: 25px;*/
		  }
		#ttr_header .toggle
		  {
		  	background: rgba(0,0,0,.3);
		    display: none;
		    position: absolute;
		    right: 10px;
		    top: 26px;
		    color: #fff;
		    padding: 5px;
		    cursor: pointer;
		    font-weight: bold;
		  }

		@media (max-width: 768px)
	  	{
		    #ttr_header .toggle
		    {
		      display: block;
		      top: 20px;
		      z-index: 30001;
		    }
		    #ttr_header
		    {
		      padding: 0 0;
		      background: rgba(255,255,255,.5);
		    }
		    #ttr_header #menuself
		    {
		      width: 100%;
		      display: none;
		      margin-right: 0;
		    }
		    #ttr_header #menuself.activeul 
		    {
		      display: block;
		      top: -3%;
		      width: 90%;

		    }
		   
		    #ttr_header #menuself li a
		      {
		        padding: 5px 10px;
		        margin: 0;
		        display: block;
		        text-align: center;
		        color: #ffff;
		        background: rgba(0,0,0,.5);
		      }
		      #ttr_header #menuself li ul
		      {
		        width: 100%;
		        top: 100px;
		        left: 0;
		        z-index:29999; 
		      }
		     #ttr_header #menuself li ul li a
		    {
		       padding:5px;
		      margin: 0 5px;
		    }

	      

	  }
	</style>
	<script type="text/javascript">
    

        $(document).ready(function(){
            $(' #ttr_header .toggle').click(function(){
                $('#ttr_header #menuself').toggleClass('activeul');
            })
        })
    </script>


</header>

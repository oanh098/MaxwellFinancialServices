
<div class="cls-OurCustomer" >

    <div class="OurClients" style="margin-top: 40px; margin-bottom: 40px; text-align: center;" >
        <h1>
        Our Affiliated Clientele</h1>
    </div>

    <div class="row multiple-items margin-bottom" style="margin-bottom:40px;" >
        <div class="col-lg-2 col-md-2 col-sm-3 col-xs-3">
            <img class="img-fluid" src="{{asset('FrontEnd')}}/images/westpac-logo.png" alt="wespac" />
        </div>

        <div class=" col-lg-2 col-md-2 col-sm-3 col-xs-3">
           <img class="img-fluid" src="{{asset('FrontEnd')}}/images/citibank.png" />
        </div>

        <div class=" col-lg-2 col-md-2 col-sm-3 col-xs-3">
            <img class="img-fluid"  src="{{asset('FrontEnd')}}/images/commonwealth-bank.png" alt="commonwealthbank" />
        </div>

        <div class=" col-lg-2 col-md-2 col-sm-3 col-xs-3">
            <img class="img-fluid"  src="{{asset('FrontEnd')}}/images/nab.png" alt="nab" />
        </div>

        <div class=" col-lg-2 col-md-2 col-sm-3 col-xs-3">
            <img class="img-fluid"  src="{{asset('FrontEnd')}}/images/hsbc.png" alt="hsbc" />
        </div>
        <div class=" col-lg-2 col-md-2 col-sm-3 col-xs-3">
            <img class="img-fluid"  src="{{asset('FrontEnd')}}/images/anz.png" alt="anz" />
        </div>


        <div class=" col-lg-2 col-md-2 col-sm-3 col-xs-3">
            <img class="img-fluid"  src="{{asset('FrontEnd')}}/images/61171.png" />
        </div>
        <div class=" col-lg-2 col-md-2 col-sm-3 col-xs-3">
            <img class="img-fluid" src="{{asset('FrontEnd')}}/images/eBay-Logo2.png" alt="ebay" />

        </div>

        <div class=" col-lg-2 col-md-2 col-sm-3 col-xs-3">
            <img class="img-fluid"  src="{{asset('FrontEnd')}}/images/xe.png" alt="xe" />
        </div>
    </div>

</div>

<style type="text/css">
    .cls-OurCustomer
    {
        padding: 50px 150px;
    }
    @media (max-width: 992px)
    {
        .cls-OurCustomer
        {
        padding: 20px;
            
        }
    }
</style>

<script type="text/javascript">
   $(document).ready(function(){
 
$('.multiple-items').slick({
  infinite: true,
  slidesToShow: 6,
  slidesToScroll: 6,
  autoplay: true,
  arrows: false,
});
        
    
});
</script>
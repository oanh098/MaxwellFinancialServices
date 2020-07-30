
@extends('layouts.appMaxwell')

@section('content')


    <div class="row">
        <section>
            <div><p>Due to the COVID-19 and our intro fixed term deposit we are currently receiving a high volume of calls you can email us at
                    <a style="color: #000000;" href="mailto:info@maxwellfinancialservices.com"> info@maxwellfinancialservices.com </a> and we will get back to you within 2 business hours.</p></div>
            <div><p>Due to the COVID-19 and our intro fixed term deposit we are currently receiving a high volume of calls you can email us at
                    <a style="color: #000000;" href="mailto:info@maxwellfinancialservices.com"> info@maxwellfinancialservices.com  </a> and we will get back to you within 2 business hours.</p></div>

        </section>
    </div>

    <!-- <div class="container" style="text-align: center; justify-content: space-between;">
    <div class="row">
        
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" id="xecurrencywidget"></div>

        <script>
            var xeCurrencyWidget = {"domain":"www.maxwellfinancialservices.com","language":"en","size":"compact"};
        </script>
        <script src="https://www.xe.com/syndication/currencyconverterwidget.js"></script>

        
    </div></div> -->

    @include('inc.ourServices')

    <div class="indexRelyon"  >
            <div class="container" >
                <h1>
                    Rely on a trusted financial services custodian
                    who is dedicated to your success.</h1>

            </div>
    </div>

    <div class="row" >
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 ">
            <div class="container">
                <p>Maxwell Financial Services believes that our client’s success is our success. Maxwell Financial Services has over 23 years of professional financial services.
                    Excellence. With our strong tenure in the financial services industry, focusing on the Australasian European markets our clients are secure and confident . We specialize in providing customized execution, clearing, and custody solutions to full-service firms and independent broker dealers.
                </p>
                <p>We offer direct accounts and prime brokerage services to professional and institutional clients as well as high-profile individual investors. We offer clearing services to broker dealers that service both institutional and retail accounts. Fully disclosed clearing arrangements are available to all of our clients worldwide.
                </p>
                <p>We believe that an advisor’s strength is his belief in innovation and his ability to turn a loss into an opportunity, and his capability to forecast success. Our focus is to ensure that the settlement process is time-saving, smooth running, and efficient reducing risk and giving you more time on your hands to spend on that matters most growing your client accounts.
                </p>
                <p>Simplify your business operations by relying on all the services we will be providing you Maxwell Financial services understand that your success depends on the advisor client relationship.
                </p>
                <p>Small and medium businesses are what runs the economy.
                </p>
                <p>Our team is your team.
                </p>
                <p>As our client, you are assured that we will always be on your side of the trade. We have but one goal, to prosper.
                </p>
                <p>Maxwell Financial services office is comprised of a team of stockbrokers and financial planning professionals offering a comprehensive range of financial advice, incorporating stockbroking, financial planning, fixed interest, superannuation, insurance, estate planning, margin lending and SMSF Self-Managed Superannuation Fund advice.
                </p>
                <p>We pride ourselves on offering clients professional and objective financial advice, as well as access to new IPO's and other opportunities.
                </p>
                <p>Our advisers are supported by the firm's award-winning research team, as well as the corporate finance team, which has members based in the Melbourne, Sydney and London offices.
                </p>
                <p>No matter what your investment requirements are, we can match you to an adviser who is best suited to your style of investment.
                    The Australian share market accounts for a mere 3% of global equities by market capitalisation. Investing in international shares though Maxwell Financial service allows you to access those opportunities which are unavailable at home and thereby diversify your portfolio.
                    Maximising your profits in emerging markets.</p>
                </p></div>


               

                <div class="container" style="margin-top: 20px; margin-bottom: 20px;" >
                    <h1>
                    Discover Global Investing</h1>
                </div>
                <div class="container">
                <p>Access global share markets – MFS clients can access shares listed on major markets in North America, Europe, Asia, South America, and various emerging markets across the globe. Your MFS Adviser has direct access to listed shares across all major international exchanges including:
                </p>
                <ul style="margin-left: 0.5em;">
                    <li>US – New York Stock Exchange, NASDAQ</li>
                    <li>United Kingdom – London Stock Exchange</li>
                    <li>Japan – Tokyo Stock Exchange</li>
                    <li>Canada – Toronto Stock Exchange</li>
                </ul>

                <p>Foreign exchange – MFS will settle your foreign exchange obligations using your existing Australian bank account.  Our affiliation with XE gives you the capital needed at the spot market price if requested all keeping your working capital in AUD.  At the best possible exchange rate. You can also keep foreign currencies in your trading account for use at a later date. Hedging them against fluctuating markets
                </p>

                


                <div class="container" style="margin-top: 20px; margin-bottom: 20px;"  >
                    <h1>
                    What We Offer Institutional and Retail Clients</h1>
                </div>

                <p>Funds management clients dealing with MFS Broking team can expect:
                </p>
                <p>
                <ul style= "margin-left: 0.5em;">
                    <li>Access to some of the best analysts in the Australian small and mid-cap market</li>
                    <li>Exclusive access to company roadshows, meetings and events</li>
                    <li>Sought after invitations to site trips and company tours</li>
                    <li>Best trade execution and settlement</li>
                    <li>Weekly market reports</li>
                    <li>Priority access to Maxwell Financial Services arranged IPOs, placements and raisings</li>
                </ul>
                </p>
            </div>
        </div>
    </div>

    <div class="row" style="background-color:#35486E; margin-top:40px; margin-bottom:40px;" > 
        <div class="container ourResource" >
        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 ">
            <div>
               <img src="{{asset('FrontEnd')}}/images/1891930544html_column20.jpg" alt="" class="" ></div>
        </div>
        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 ">
                    <span style="color:rgba(243,243,243,1); font-size: 2.25em; ">Resources</span>
                    <p style="color:rgba(255,255,255,1);">
                        Maxwell Financial Services offers an exceptional suite of execution and clearing services across all the markets we serve.
                        Pur preeminent exchange rankings on all major commodity, futures, and options exchanges coupled with our extensive network of banking and financial relationships
                        enable us to provide unmatched access to pools of liquidity.
                    </p>
                    <p style="text-align: right"><a href="resort"  target="_self" class="btn btn-md btn-default">Read More</a>
                    </p>
        </div>
    </div></div>

    
    @include('inc.ourCustomer')
@endsection


@extends('layouts.appMaxwell')

@section('content')


<!-- section Info -->
    <section class="info">
        <div><p>Due to the COVID-19 and our intro fixed term deposit we are currently receiving a high volume of calls you can email us at
                    <a style="color: #000000;" href="mailto:info@maxwellfinancialservices.com"> info@maxwellfinancialservices.com </a> and we will get back to you within 2 business hours.</p></div>
            <div><p>Due to the COVID-19 and our intro fixed term deposit we are currently receiving a high volume of calls you can email us at
                    <a style="color: #000000;" href="mailto:info@maxwellfinancialservices.com"> info@maxwellfinancialservices.com  </a> and we will get back to you within 2 business hours.</p></div>
    </section>

<!-- section ourServices -->
    <section class="cls-ourServices">
        
        <h1>Our Service</h1>
        <ul>
            <li>
                <img src="{{asset('FrontEnd')}}/newImages/business-growth.png" alt="Business Growth">
                <h2>Business Growth</h2>
                <p>Our team will work closely with your team to connect your firm and advisors to our services and solutions to drive asset growth and client loyalty.</p>
            </li>
            <li>
                <img src="{{asset('FrontEnd')}}/newImages/product-solutions.png" alt="Product Solutions">
                <h2>Product Solutions</h2>
                <p>Through Maxwell Financial Services, financial advisors have a smart and efficient product platform and team support accessible 24 hours a day.</p>
            </li>
            <li>
                <img src="{{asset('FrontEnd')}}/newImages/liabilities-management.png" alt="Liabilities Management">
                <h2>Liabilities Management</h2>
                <p>Your advisors will have access to lending services and specialists amilable through our partners to help your advisors manage both sides of your clients balance sheet</p>
            </li>
        </ul>

        <ul>
            <li>
                <img src="{{asset('FrontEnd')}}/newImages/research-strategy.png" alt="Research & Strategy">
                <h2>Research & Strategy</h2>
                <p>Because of our affiliation with our industry leading partners, your team will have access to these Misted Institutes consisting of dedicated, growth focused research strategists that support advisors with objective.</p>
            </li>
            <li>
                <img src="{{asset('FrontEnd')}}/newImages/transition-service.png" alt="Transition Service">
                <h2>Transition Service</h2>
                <p>The decision to change clearing firm, or to trust another firm to do the clearing for you is a tough decision to make. Than why we will dedicate time and effort to know your business process from start to finish.</p>
            </li>
            <li>
                <img src="{{asset('FrontEnd')}}/newImages/clearing-execution.png" alt="Clearing and Execution">
                <h2>Clearing and Execution</h2>
                <p>We specialize in providing customized execution, clearing, and custody solutions to full service firms and independent broker dealers, advisors, and firms on the financial services sector.</p>
            </li>
        </ul>

        <style type="text/css">
            .cls-ourServices
            {
                display: flex;
                flex-direction: column;
                justify-content: center;
                align-items:center;
                padding: 100px 150px;
            }
            .cls-ourServices  ul
            {
                display: flex;
                justify-content: center;
                align-items: center;

            }
            .cls-ourServices  ul li
            {
                list-style: none;
                display: flex;
                justify-content: center;
                flex-direction: column;
                margin: 20px;

            }
            .cls-ourServices ul li img
            {
                width: 156px;
                align-self: center;
            }
            .cls-ourServices ul li h2
            {
                align-self: center;
            }
           
            
            @media (max-width: 991px)
            {
                .cls-ourServices 
                {
                    padding: 20px;
                }
                .cls-ourServices ul
                {
                    flex-direction: column;
                }
                .cls-ourServices ul li p
                {
                   /*padding: 20px;    */
                }
            }
        </style>

    </section>
<!-- Section indexRelyon -->
    <section class="cls-indexRelyon">
        <h1>Rely on a trusted financial services custodian who is dedicated to your success.</h1>

       

        <style type="text/css">
            .cls-indexRelyon
            {
                display: flex;
                justify-content: center;
                align-items: center;
                background:rgba(0,0,0,.1);
                height: 20vh;
            }
            @media (max-width: 991px)
            {
                .cls-indexRelyon h1
                {
                    padding: 10px;
                    font-size: 30px;
                }
            }
            
           
        </style>
        

    </section>
    <!-- Section RelyonInfo  -->
    <section class="clsRelyonInfo">
        <div>
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
                    The Australian share market accounts for a mere 3% of global equities by market capitalization. Investing in international shares though Maxwell Financial service allows you to access those opportunities which are unavailable at home and thereby diversify your portfolio.
                    Maximizing your profits in emerging markets.</p>
                </p></div>

                <style type="text/css">
                    .clsRelyonInfo
                    {
                        display: flex;
                        padding: 100px 150px;
                        justify-content: center;
                        align-items: center;

                    }
                    @media (max-width: 991px)
                    {
                        .clsRelyonInfo
                        {
                            padding: 20px;
                        }

                    }
                </style> 



    </section>
<!-- Section DiscoverGlobal -->
    <section class="clsDiscoverGlobal">
        <h1>Discover Global Investing</h1>
        <div>
            <p>Access global share markets – MFS clients can access shares listed on major markets in North America, Europe, Asia, South America, and various emerging markets across the globe. Your MFS Adviser has direct access to listed shares across all major international exchanges including:
            </p>

            <ul>
                <li>US – New York Stock Exchange, NASDAQ</li>
                <li>United Kingdom – London Stock Exchange</li>
                <li>Japan – Tokyo Stock Exchange</li>
                <li>Canada – Toronto Stock Exchange</li>
            </ul>

            <p>Foreign exchange – MFS will settle your foreign exchange obligations using your existing Australian bank account.  Our affiliation with XE gives you the capital needed at the spot market price if requested all keeping your working capital in AUD.  At the best possible exchange rate. You can also keep foreign currencies in your trading account for use at a later date. Hedging them against fluctuating markets
                </p>
        </div>
        <style type="text/css">
            .clsDiscoverGlobal
            {
                display: flex;
                justify-content: center;
                /*align-items: center;*/
                background: rgba(26,75,108,.5);
                flex-direction: column;
                padding: 50px 150px;
            }
            .clsDiscoverGlobal h1
            {
                margin-bottom: 1em;
                align-self: center;;
            }
            .clsDiscoverGlobal div ul
            {
                margin-left: 3em;
            }
            @media (max-width: 991px)
            {
                .clsDiscoverGlobal
                {
                    padding: 20px;
                }
            }
        </style>
    </section>
<!-- Section WhyUs -->
    <section class="clsWhyUs">
        <h1>What We Offer Institutional and Retail Clients</h1>
        <div>
            <p>Funds management clients dealing with MFS Broking team can expect:</p>
            <ul>
                <li>Access to some of the best analysts in the Australian small and mid-cap market</li>
                <li>Exclusive access to company roadshows, meetings and events</li>
                <li>Sought after invitations to site trips and company tours</li>
                <li>Best trade execution and settlement</li>
                <li>Weekly market reports</li>
                <li>Priority access to Maxwell Financial Services arranged IPOs, placements and raisings</li>
            </ul>
        </div>
        <style type="text/css">
            .clsWhyUs
            {
                padding: 100px 150px;
                display: flex;
                flex-direction: column;
                justify-content: center;
                /*align-items: center;*/
            }
            .clsWhyUs h1
            {
                align-self: center;
                margin-bottom: 1em;
            }

            .clsWhyUs ul
            {
                margin-left: 3em;
            }
            @media (max-width: 991px)
            {
                .clsWhyUs
                {
                    padding: 20px;
                }
            }
        </style>
    </section>
<!-- Section clsResources -->
    <section class="clsResources">
        <img src="{{asset('FrontEnd')}}/images/1891930544html_column20.jpg" alt="" class="" >
        <div>
            <h1>Resources</h1>
            <p id="info"> Maxwell Financial Services offers an exceptional suite of execution and clearing services across all the markets we serve.
                            Pur preeminent exchange rankings on all major commodity, futures, and options exchanges coupled with our extensive network of banking and financial relationships
                            enable us to provide unmatched access to pools of liquidity.</p>
            <p style="text-align: right"><a href="resort"  target="_self" class="btn btn-md btn-default">Read More</a>
        </div>

        <style type="text/css">
            .clsResources
            {
                background: #35486E;
                display: flex;
                justify-content: space-around;
                align-items: center;
                padding: 50px 150px;
                color: #fff;
                position: relative;

            }
             .clsResources a
             {
                color: #000;
                text-transform: uppercase;
                transition: .5s;
                font-weight: bold;
             }
             .clsResources a:hover
             {
                background:#A39C87;
                color: #fff;
             }
            .clsResources img
            {
                align-self: center;
                margin: 0 30px;
                max-width: 580px;
            }
            .clsResources div
            {
                width: 80vh;
                align-self: center;
                justify-content: space-between;
                display: flex;
                flex-direction: column;
                margin: 0 30px;
            }
            @media (max-width: 991px)
            {
                .clsResources img
                {
                    max-width: 300px;
                    margin: 0 10px;
                }
                .clsResources
                {
                    padding: 40px 20px;
                    flex-direction: column;
                    justify-content: center;
                    align-items: center;
                }
                .clsResources div
                {
                    width: 100%;
                     margin: 0 10px;
                }
                 
            }
        </style>
    </section>
<!-- Section ourCustomer -->
 @include('inc.ourCustomer')
    
@endsection

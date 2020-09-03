<footer id="">
    <section class="cls-footer">
    <!-- Address -->
    <div class="clsAddress">
        <ul>
            <li>
                <p><img style="max-height:40px;max-width:40px;" src="{{asset('FrontEnd')}}/newImages/location.png" alt="location" />Head Office Melbourne:</p>
                <p>Collins Street Level 3, 480 Collins Street Melbourne VIC 3000</p>
                <p>Contact Number: +61 390 711 898</p>
            </li> 
            <li>
                <p><img style="max-height:40px;max-width:40px;" src="{{asset('FrontEnd')}}/newImages/location.png" alt="location" />SYDNEY:</p>
                <p>33 Australia Square 264 George St, Sydney NSW 2000</p>
                <p>Contact Number: +61 291 583 232</p>
            </li> 
            <li>
                <p><img style="max-height:40px;max-width:40px;" src="{{asset('FrontEnd')}}/newImages/location.png" alt="location" />LONDON</p>
                <p>1 Royal Exchange Avenue, London EC3V 3LT</p>
                <p>Contact Number:+44 330 027 2008</p>
            </li>
        </ul>

       
    </div>
    <!-- About Us -->
    <div class="clsAboutUs">
        <p>ABOUT US</p>
        <p>Maxwell Financial Services aim to provide our clients with all the business support and services that they need to create an efficient, professional, and reliable process for them to be able to operate the business with ease and enable them to focus on what's important --- growing a profitable and stable investment strategy.</p>

        <!-- <span id="ABN-Licensed"> -->
        <div>
            <p>GET IN TOUCH
                <a style="color: #1155cc;" href="mailto:info@maxwellfinancialservices.com">info@maxwellfinancialservices.com</a>
            </p>
            <p>
                <span>
                    <iframe
                        src= "https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3151.821075553137!2d144.95576831590415!3d-37.81765974204047!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6ad65d4c53a5c497%3A0x8986700f301f3ba5!2sLevel%203%2F480%20Collins%20St%2C%20Melbourne%20VIC%203000%2C%20Australia!5e0!3m2!1sen!2s!4v1583400873537!5m2!1sen!2s"
                         width="100%" height=auto frameborder="0" allowfullscreen=""></iframe>
                </span>
            </p>
            
        </div>

    </div>
    <!-- Map -->
    
    </section>
    <section id="ABN-Licensed">
        <p>The Maxwell Investment Trust Pty Ltd (Maxwell Financial Services MFS) ABN:  85 092 830 322 is licencsed and regulated by the Australian Securities and Investments Commission and is a participant of ASX 24 and Chi-X Australia. Head Office: Collins Street Level 3, 480 Collins Street, Melbourne, VIC, 3000, Australia. Email: info@maxwellfinancialservices.com - Phone: 0390 711 898</p>
            <p>
            IMPORTANT: This information is general financial product advice only and you should consider the relevant product disclosure statement (PDS) or seek professional advice before making any investment decision. Product disclosure statements for financial products offered through Maxwell Financial Services can be obtained by contacting 0390 711 898. You should consider the product disclosure statement before making a decision about a product. All indications of performance returns are historical and cannot be relied upon as an indicator for future performance
        </p>
        <a href="{{asset('FrontEnd')}}/MFS-PRIVACY-NOTICE.pdf" 
            style="color: #000; background: rgba(234,67,53,.7);cursor: pointer; margin-bottom: 2px;">
            Maxwell Financial Services Privacy Notice.</a> <br>
        <a href="{{asset('FrontEnd')}}/MFS-SECURITY-NOTICE.pdf" 
        style="color: #000; background: rgba(234,67,53,.7);cursor: pointer;">
        Maxwell Financial Services Cyber Security Notice.</a>
    </section>

    <style type="text/css">
        footer
        {
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            padding: 50px 150px;
            color: #fff;
        }
        .cls-footer{
            position: relative;
            width: 100%;
            display: flex;
            align-items: center;
            justify-content: space-between;
        }

        .cls-footer .clsAddress
        {
            display: flex;
            justify-content: center;
            align-items: center;
            position: relative;
            /*width: 50%;*/

        }

        .clsAddress ul li
        {
            list-style: none;
            /*white-space: nowrap;*/
        }

        .clsAboutUs 
        {
            display: flex;
            align-items: flex-start;
            justify-content: center;
            flex-direction: column;
            padding: 0 50px;
            position: relative;
            width: 60%;

        }

        
        .clsAboutUs div
        {
            align-self: flex-start;
        }

        #ABN-Licensed
        {
            margin: 10px;
        }
        
        @media (max-width: 992px)
        {
            footer
            {
                padding: 0;
            }
            .cls-footer
            {
                flex-direction: column;
                align-items: flex-start;
                padding: 0;
            }
            .clsAddress 
            {
                margin: 20px;
               
            }            
            .clsAboutUs
            {
                width: 100%;
                padding: 0;
                margin: 20px;
            }
            
             
        }
             
    </style>
</footer>




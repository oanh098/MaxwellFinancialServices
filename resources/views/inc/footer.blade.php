<footer id="">
    <section class="cls-footer">
    <!-- Address -->
    <div class="clsAddress">
        <ul>
            <li>
                <p><img style="max-height:40px;max-width:40px;" src="{{asset('FrontEnd')}}/newImages/location.png" alt="location" />Head Office Melbourne:</p>
                <p class="pWrap">Collins Street Level 3, 480 Collins Street Melbourne VIC 3000</p>
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
    </div>
    <!-- Map -->
    <div class="clsMap">
        <p>GET IN TOUCH
            <a style="color: #1155cc;" href="mailto:info@maxwellfinancialservices.com">info@maxwellfinancialservices.com</a>
        </p>
        <p>
            <span>
                <iframe
                    src= "https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3151.821075553137!2d144.95576831590415!3d-37.81765974204047!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6ad65d4c53a5c497%3A0x8986700f301f3ba5!2sLevel%203%2F480%20Collins%20St%2C%20Melbourne%20VIC%203000%2C%20Australia!5e0!3m2!1sen!2s!4v1583400873537!5m2!1sen!2s"
                     width=auto height="300" frameborder="0" allowfullscreen=""></iframe>
            </span>
        </p>
    </div>
    </section>

    <style type="text/css">
        footer
        {
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 50px 150px;
            color: #fff;
        }
        .cls-footer{
            position: relative;
            width: 100%;
            display: flex;
            align-items: flex-start;
            justify-content: space-around;
        }

        .clsAddress
        {
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 0 50px;
            position: relative;

        }

        .clsAddress ul li
        {
            list-style: none;
            /*white-space: nowrap;*/
        }

        .clsAboutUs
        {
            display: flex;
            align-items: center;
            justify-content: center;
            flex-direction: column;
            padding: 0 50px;
            position: relative;
            width: 30%;

        }

        .clsAboutUs div
        {
            align-self: flex-start;
        }
        .clsMap
        {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            padding: 0 50px;
            position: relative;


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
                margin: 0 20px;
               

            }
            /*document.querySelector("body > footer > section > div.clsAddress > ul > li:nth-child(1) > p:nth-child(2)")*/
            .clsAddress .pWrap
            {
              word-wrap: break-word !important;

            }
             .clsAboutUs
             {
                width: 100%;
                 margin: 0;
                /*align-self: flex-start;*/
             }
             .clsMap
             {
                width: 100%;
                align-self: flex-start;
                margin: 0;

             }
        }
             
    </style>
</footer>

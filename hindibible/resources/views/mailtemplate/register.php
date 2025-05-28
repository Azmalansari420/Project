
<!DOCTYPE html>
<html>
   <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <title>Yorfie Emailer</title>
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
      <!-- Bootstrap -->
      <!--Text-->
      <link href="https://fonts.googleapis.com/css?family=Lobster" rel="stylesheet" type="text/css">
      <style>
         .form {
         background: rgb(243,243,243);
         padding: 40px;
         max-width: 600px;
         margin: 84px auto;
         border-radius: 50px;
         }
         .form-small {
         background: white;
         padding: 11px !important;
         max-width: 600px;
         margin: 10px auto;
         border-radius: 40px;
         }
        .h1-font {
    font-family: sans-serif;
    text-align: center;
    font-size: 22px;
    padding: 0px !important;
    margin: 0;
}
         .contact-font {
         font-family: sans-serif;
         /*font-style: italic;*/
         text-align: center;
         color: rgb(111,111,111);
         }
         .p-font {
         margin: 20px 10px 20px;
         font-size: 17px;
         font-family: sans-serif;
         text-align: center;
         font-weight: 100;
         }
         .p-footer {
         margin: 20px 10px 20px;
         padding: 10px 50px 0px;
         font-size: 15px;
         font-family: Arial, Helvetica, sans-serif;
         text-align: center;
         line-height: 24px;
         font-weight: 100;
         }
         /* .mail-image {
         padding: 0px;
         max-width:600px;
         margin:10px auto;
         } */
         /* Button */
         :root {
         --bg: rgb(243,243,243);
         --color: rgb(255,178,0);
         --font: Montserrat, Roboto, Helvetica, Arial, sans-serif;
         }
         .wrapper {
         padding: 20px 150px 40px;
         filter: url('#goo');
         }
         .button {
         /* display: inline-block; */
         text-align: center;
         background: linear-gradient(to right, rgba(255,162,0,1) 0%,rgba(255,196,36,1) 100%);
         color: var(--bg);
         font-weight: bold;
         padding: 1.18em 1.32em 1.03em;
         line-height: 1;
         border-radius: 1em;
         position: relative;
         /* min-width: 8.23em; */
         text-decoration: none;
         font-family: var(--font);
         font-size: 17px;
         margin: 0 auto;
         display: block;
         }
         .button:before,
         .button:after {
         width: 4.4em;
         height: 2.95em;
         position: absolute;
         content: "";
         display: inline-block;
         background: var(--color);
         border-radius: 50%;
         transition: transform 0.3s ease;
         transform: scale(0);
         z-index: -1;
         }
         .button:before {
         top: -25%;
         left: 20%;
         }
         .button:after {
         bottom: -25%;
         right: 20%;
         }
         .button:hover:before,
         .button:hover:after {
         transform: none;
         }
         .social-buttons {
         margin: auto;
         font-size: 0;
         text-align: center;
         top: 0;
         bottom: 0;
         left: 0;
         right: 0;
         }
         .social-button {
         display: inline-block;
         background-color: #fff;
         width: 50px;
         height: 50px;
         line-height: 50px;
         margin: 0 10px;
         text-align: center;
         position: relative;
         overflow: hidden;
         opacity: .99;
         border-radius: 50%;
         box-shadow: 0 0 30px 0 rgba(0, 0, 0, 0.05);
         -webkit-transition: all 0.35s cubic-bezier(0.31, -0.105, 0.43, 1.59);
         transition: all 0.35s cubic-bezier(0.31, -0.105, 0.43, 1.59);
         }
         .social-button:before {
         content: '';
         background: linear-gradient(to right, rgba(255,162,0,1) 0%,rgba(255,196,36,1) 100%);
         width: 120%;
         height: 120%;
         position: absolute;
         top: 90%;
         left: -110%;
         -webkit-transform: rotate(45deg);
         transform: rotate(45deg);
         -webkit-transition: all 0.35s cubic-bezier(0.31, -0.105, 0.43, 1.59);
         transition: all 0.35s cubic-bezier(0.31, -0.105, 0.43, 1.59);
         }
         .social-button .fa {
         font-size: 29px;
         vertical-align: middle;
         -webkit-transform: scale(0.8);
         transform: scale(0.8);
         -webkit-transition: all 0.35s cubic-bezier(0.31, -0.105, 0.43, 1.59);
         transition: all 0.35s cubic-bezier(0.31, -0.105, 0.43, 1.59);
         color: #ffb200;
         }
         /* //Facbook */
         .social-button.facebook:before {
         background-color: #3B5998;
         }
         .social-button.facebook .fa {
         color: #3B5998;
         }
         /* //Twitter */
         .social-button.twitter:before {
         background-color: #55acee;
         }
         .social-button.twitter .fa {
         color: #55acee;
         }
         /* //Google Plus */
         .social-button.google:before {
         background-color: #dd4b39;
         }
         .social-button.google .fa {
         color: #dd4b39;
         }
         .social-button:focus:before, .social-button:hover:before {
         top: -10%;
         left: -10%;
         }
         .social-button:focus .fa, .social-button:hover .fa {
         color: #fff;
         -webkit-transform: scale(1);
         transform: scale(1);
         }
         .logo {
         font-family: 'Lobster', cursive;
         font-size: 4em;
         font-weight: 400;
         float: left;
         padding: 5px;
         margin-top: 25px;
         }
         /* Transitions */
         header, .logo{
         -webkit-transition: all 1s;
         transition: all 1s; 
         }
         /* End Icon Social */
         /* cyrillic */
         @font-face {
         font-family: 'Lobster';
         font-style: normal;
         font-weight: 400;
         src: local('Lobster'), local('Lobster-Regular'), url(https://fonts.gstatic.com/s/lobster/v18/c28rH3kclCLEuIsGhOg7evY6323mHUZFJMgTvxaG2iE.woff2) format('woff2');
         unicode-range: U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116;
         }
         /* vietnamese */
         @font-face {
         font-family: 'Lobster';
         font-style: normal;
         font-weight: 400;
         src: local('Lobster'), local('Lobster-Regular'), url(https://fonts.gstatic.com/s/lobster/v18/RdfS2KomDWXvet4_dZQehvY6323mHUZFJMgTvxaG2iE.woff2) format('woff2');
         unicode-range: U+0102-0103, U+1EA0-1EF9, U+20AB;
         }
         /* latin-ext */
         @font-face {
         font-family: 'Lobster';
         font-style: normal;
         font-weight: 400;
         src: local('Lobster'), local('Lobster-Regular'), url(https://fonts.gstatic.com/s/lobster/v18/9NqNYV_LP7zlAF8jHr7f1vY6323mHUZFJMgTvxaG2iE.woff2) format('woff2');
         unicode-range: U+0100-024F, U+1E00-1EFF, U+20A0-20AB, U+20AD-20CF, U+2C60-2C7F, U+A720-A7FF;
         }
         /* latin */
         @font-face {
         font-family: 'Lobster';
         font-style: normal;
         font-weight: 400;
         src: local('Lobster'), local('Lobster-Regular'), url(https://fonts.gstatic.com/s/lobster/v18/cycBf3mfbGkh66G5NhszPQ.woff2) format('woff2');
         unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2212, U+2215;
         }
         /* latin */
         @font-face {
         font-family: 'Indie Flower';
         font-style: normal;
         font-weight: 400;
         src: local('Indie Flower'), local('IndieFlower'), url(https://fonts.gstatic.com/s/indieflower/v8/10JVD_humAd5zP2yrFqw6ugdm0LZdjqr5-oayXSOefg.woff2) format('woff2');
         unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2212, U+2215;
         }
         /* --------------------- */
        .mail-image {
        width: 27%;
        text-align: center;
        margin: 0 auto;
        display: block;
        margin-top: -36px;
        padding-top: 50px !important;
    }
      </style>
   </head>
   <body style="background-color: rgb(255 178 0)">
      <div class="form">
         <div class="form-small"; style="padding: 0px">
            <div>
               <img class="mail-image" alt="top image" src="https://yorfie.com/images/logo.png" width="">
            </div>
            <table cellspacing="0" border="0" cellpadding="0" width="100%" >
               <tr>
                  <td>
                     <table style="max-width:670px; margin:0 auto;" width="100%" border="0"
                        align="center" cellpadding="0" cellspacing="0">
                        <!-- Email Content -->
                        <tr>
                           <td>
                              <table width="95%" border="0" align="center" cellpadding="0" cellspacing="0"
                                 style="max-width:670px; background:#fff; border-radius:3px;padding:0 40px;">
                                 <tr>
                                    <td style="height:40px;">&nbsp;</td>
                                 </tr>
                                 <!-- Title -->
                                 <!-- Details Table -->
                                 <tr>
                                    <td>
                                       <table cellpadding="0" cellspacing="0"
                                          style="width: 100%; border: 1px solid #ededed">
                                          <tbody>
                                             <tr>
                                                <td
                                                   style="padding: 10px; border-bottom: 1px solid #ededed; border-right: 1px solid #ededed; width: 35%; font-weight:500; color:rgba(0,0,0,.64)">
                                                   Business Name
                                                </td>
                                                <td
                                                   style="padding: 10px; border-bottom: 1px solid #ededed; color: #455056;">
                                                   <?=$data['business_name'] ?></td>
                                             </tr>
                                             <tr>
                                                <td
                                                   style="padding: 10px; border-bottom: 1px solid #ededed; border-right: 1px solid #ededed; width: 35%; font-weight:500; color:rgba(0,0,0,.64)">
                                                   Email
                                                </td>
                                                <td
                                                   style="padding: 10px; border-bottom: 1px solid #ededed; color: #455056;">
                                                 <?=$data['email'] ?>
                                                </td>
                                             </tr>
                                             <tr>
                                                <td
                                                   style="padding: 10px; border-bottom: 1px solid #ededed; border-right: 1px solid #ededed; width: 35%; font-weight:500; color:rgba(0,0,0,.64)">
                                                   Mobile
                                                </td>
                                                <td
                                                   style="padding: 10px; border-bottom: 1px solid #ededed; color: #455056;">
                                                 <?=$data['mobile'] ?>
                                                </td>
                                             </tr>
                                             <tr>
                                                <td
                                                   style="padding: 10px; border-bottom: 1px solid #ededed; border-right: 1px solid #ededed; width: 35%; font-weight:500; color:rgba(0,0,0,.64)">
                                                   Vendor Id
                                                </td>
                                                <td
                                                   style="padding: 10px; border-bottom: 1px solid #ededed; color: #455056;">
                                                 <?=$data['user_id'] ?>
                                                </td>
                                             </tr>
                                             
                                             
                                             
                                             

                                            
                                          </tbody>
                                       </table>
                                    </td>
                                 </tr>
                                 <tr>
                                    <td style="height:40px;">&nbsp;</td>
                                 </tr>
                              </table>
                           </td>
                        </tr>
                     </table>
                  </td>
               </tr>
            </table>
            <h1 class="h1-font">Confirmation<h1>
                <p class="p-font">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled.</p>

            <div class="wrapper">
               <a class="button" href="#">Confirmation</a>
            </div>
            <!-- Filter: https://css-tricks.com/gooey-effect/ -->
            <svg style="visibility: hidden; position: absolute;" width="0" height="0" xmlns="http://www.w3.org/2000/svg" version="1.1">
               <defs>
                  <filter id="goo">
                     <feGaussianBlur in="SourceGraphic" stdDeviation="10" result="blur" />
                     <feColorMatrix in="blur" mode="matrix" values="1 0 0 0 0  0 1 0 0 0  0 0 1 0 0  0 0 0 19 -9" result="goo" />
                     <feComposite in="SourceGraphic" in2="goo" operator="atop"/>
                  </filter>
               </defs>
            </svg>
         </div>
         <div>
            <h3 class="contact-font">
                Stay In Touch
            <h3>
            <div class="social-buttons">
               <a class="social-button instagram" href="https://www.facebook.com/people/Yorfieofficial/100086623872786/">
               <i class="fa fa-facebook">
               </i>
               </a>
               <a class="social-button instagram" href="https://www.instagram.com/yorfieofficial/">
               <i class="fa fa-instagram">
               </i>
               </a>
               <!-- <a class="social-button google" href="#">
                  <i class="fa fa-google">
                  </i>
                  </a> -->
            </div>
            <p class="p-footer">Email sent by Yorfie.com <br>
               Copyright © 2022 Yorfie. All rights reserved Designed By <a href="https://codedaddy.in/" target="_blank"> Codedaddy Web Solutions </a> 
            </p>
         

         </div>
      </div>
      
   </body>
</html>
</body>
</html>
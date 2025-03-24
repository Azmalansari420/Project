<?php include('header.php'); ?> 
<style>
   .consumer-complaint { 
   padding-top: 175px;
   }
   @media (max-width: 768px) {
   .consumer-complaint { 
   padding-top: 85px;
   }
   .consumer-complaint-div .form-notice-div { 
   margin: 15px 0px;
   }
   }
</style>
<style type="text/css">
   .preloader-bg { 
   background: rgba(22, 22, 22, 0.3); 
   /*  display: none;  */
   position: absolute; 
   top: 0; 
   right: 0; 
   bottom: 0; 
   left: 0; 
   z-index: 10; 
   }
   #loader { 
   background-image: url(img/1496.gif); 
   background-repeat: no-repeat;
   background-position: center;
   position: fixed; 
   display: block;
   left: 0;
   right:0;
   top:0;
   bottom: 0;
   z-index:9999;
   }
   #loader p{
   position: absolute;
   left: 0;
   right: 0;
   bottom: 66%;
   /* top: 0; */
   display: inline-block;
   text-align: center;
   margin-bottom: -5em;
   font-size: 17px;
   font-weight: 700;
   }
   .panel-title456789{
   font-size: 15px;
   margin-bottom: 2px;
   font-weight: 600;
   }
   .registration-title {
   font-size: 15px !important;
   }
   /*.logo img {*/
   /*    display: none;*/
   /*}*/
   /*.swach {*/
   /*    display: none !important;*/
   /*}*/
   @media (max-width: 768px){
   /*    .heat-titl{*/
   /*  text-align: center;*/
   /*font-size: 17px;*/
   /*font-weight: 700;*/
   /*position: absolute;*/
   /*width: 92%;*/
   /*top: 67px;*/
   /*}*/
   #header {
   width: 100%;
   height: 111px;
   }}
   @media (min-width: 768px){
   /*.heat-titl{*/
   /*     text-align: center;*/
   /*font-size: 20px;*/
   /*font-weight: 700;*/
   /*position: absolute;*/
   /*width: 100%;*/
   /*top: 67px;*/
   /*}*/
   .gem-header{
   height:83px;
   }
   }
   .form-bg2 {
   background: #15325f30  !important;
   border: 1px solid #edecec;
   padding-top: 10px;
   padding-bottom: 10px;
   padding-right: 10px;
   padding-left: 10px;
   color: #222222;
   }
</style>
<div id="loader" style="display: none;">
   <p>Loading...</p>
</div>
<section class="section consumer-complaint">
   <div class="container">
      <div class="row">
         <div class="consumer-complaint-head">
            <h2>G.E.M Account Registration- Seller/Buyer Account</h2>
         </div>
      </div>
      <div class="row">
         <style>
            table {
            width: 70%;
            border-collapse: collapse;
            }
            /* Header styling */
            th {
            background-color: #f2f2f2;
            color: black;
            padding: 12px;
            text-align: left;
            border-bottom: 1px solid #ddd;
            }
            /* Row styling */
            tr:nth-child(even) {
            background-color: #f98b5673;
            color: #260303;
            }
            tr:nth-child(odd) {
            background-color: #f9f9f9;
            }
            td {
            padding: 12px;
            border-bottom: 1px solid #ddd;
            }
            /* Hover effect */
            tr:hover {
            background-color: #f1f1f1;
            }
            /* Remove border from the table */
            .borderless-table {
            border-collapse: collapse;
            border: none;
            margin:auto;
            }
            .borderless-table th,
            .borderless-table td {
            border: none;
            padding: 8px;
            }
         </style>
         <center></center>
         <table class="table borderless-table">
            <tbody>
               <tr>
                  <td>Name</td>
                  <td>:</td>
                  <td>test</td>
               </tr>
               <tr>
                  <td>Contact</td>
                  <td>:</td>
                  <td>9582274108</td>
               </tr>
               <tr>
                  <td>Email</td>
                  <td>:</td>
                  <td>wolverine@gmail.com</td>
               </tr>
               <tr>
                  <td>Date of Birth</td>
                  <td>:</td>
                  <td>2025-03-19</td>
               </tr>
               <tr>
                  <td>Business Name</td>
                  <td>:</td>
                  <td>ddd</td>
               </tr>
               <tr>
                  <td>Type of Organisation</td>
                  <td>:</td>
                  <td>Sole Proprietor</td>
               </tr>
               <tr>
                  <td>Business Start Date</td>
                  <td>:</td>
                  <td>2025-03-19</td>
               </tr>
               <tr>
                  <td>Business Deals In</td>
                  <td>:</td>
                  <td>product</td>
               </tr>
               <tr>
                  <td>Business Office Address</td>
                  <td>:</td>
                  <td>ddd</td>
               </tr>
               <tr>
                  <td>Pincode</td>
                  <td>:</td>
                  <td>110058</td>
               </tr>
               <tr>
                  <td>State</td>
                  <td>:</td>
                  <td>Delhi</td>
               </tr>
               <tr>
                  <td>District</td>
                  <td>:</td>
                  <td>delhi</td>
               </tr>
               <tr>
                  <td>Amount</td>
                  <td>:</td>
                  <td>2999/-</td>
               </tr>
               <tr>
                  <td colspan="3" style="text-align:center;">
                     <form action="request.php" method="post" name="payuForm">
                        <input type="button" id="pay-btn" name="submit_registration" value="Proceed &amp; Pay" style="cursor: pointer;padding: 9px 20px;border-radius: 7px;background-color: #f98b56;color: #fff;font-weight: 700;border: 1px solid #fff;" class="wpcf7-form-control wpcf7-submit" />
                     </form>
                  </td>
               </tr>
            </tbody>
         </table>
      </div>
   </div>
</section>
</div> 

<?php include('footer.php'); ?>
<?php include('header.php'); ?> 

 <style>
.consumer-complaint-div .form-notice-div {
    flex: 0 0 35%;
}
.consumer-complaint-div .form-div {
    flex: 0 0 65%; 
    box-shadow: none;
}
form {
    padding: 10px;
    text-align: left;
}
#customers {
  font-family: Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

#customers td, #customers th {
  border: 1px solid #ddd;
  padding: 8px;
}

#customers tr:nth-child(even){background-color: #f98b5624;}

#customers tr:hover {background-color: #0000f71c;}

#customers th {
    padding: 10px;
    text-align: left;
    background-color: var(--skin-org-color);
    color: #fff;
    font-size: 13px;
}
.table-p{
    border: 1px solid #ddd;
    padding: 10px;
    font-size: 14px;
}
</style>
<section class="section consumer-complaint">
    <div class="container">
        <div class="row">
            <div class="consumer-complaint-head">
                <h2>G.E.M Account Registration- Seller/Buyer Account</h2>
                <h4>Sell Your Product To Government Department</h4> 
            </div>
        </div>
        <div class="row">
            <div class="consumer-complaint-div">
                <div class="form-notice-div">
                    <div class="form-title">
                        <h3>Fil Up The Contact Form</h3> 
                    </div>
                    <form id="regForm" action="#" method="POST"> 
                        <div class="tab" style="display: block;"> 
                          <div class="form-inner">
                              <lebal>Name</lebal> 
                              <input placeholder="Enter your name..." oninput="this.className = ''" name="name" required="">
                          </div>
                          <div class="form-inner">
                              <lebal>Contact no</lebal>
                              <input placeholder="Enter your cotact no..." oninput="this.className = ''" name="contact" required="">
                          </div>
                          <div class="form-inner">
                              <lebal>E-Mail</lebal>
                              <input placeholder="Enter your email..." oninput="this.className = ''" name="email" required="">
                          </div>
                          <div class="form-inner">
                              <lebal>Business Name</lebal>
                              <input placeholder="Enter your business name..." oninput="this.className = ''" name="business_name" required="">
                          </div>
                          <div class="form-inner">
                              <lebal>Nature Of Business</lebal>
                              <select class="form-control" name="nature_of_business" required="">
                                <option value="" disabled="" selected="">-- Select Nature Of Business --</option>
                                <option value="Services Provider">Services provider</option>
                                <option value="Manufacturer">Manufacturer</option>
                                <option value="Trader">Trader</option>
                              </select>
                          </div>
                          <div class="form-inner">
                              <lebal>Number Of Products</lebal>
                              <input placeholder="Number of products..." oninput="this.className = ''" name="no_of_products"  required="">
                          </div>  
                          <div style="overflow:auto;">
                              <div style="float:right;">
                                <button type="button" id="prevBtn" onclick="nextPrev(-1)" class="probtn" style="display: none;">Previous</button>
                                <button type="button" id="nextBtn" onclick="nextPrev(1)" class="probtn">Submit Application</button>
                              </div>
                         </div>
                       </div> 
                       <div style="display: none;">
                         <span class="step active"></span>
                         <span class="step"></span>
                         <span class="step"></span>
                         <span class="step"></span>
                       </div>
                    </form>
                </div>
                <div class="form-div"> 
                    <div class="form-title">
                        <h3>Popular Product Categories On G.E.M</h3>
                    </div> 
                    <div class="form-content">
                        <h3>Name Of The Applicant:</h3>
                        <table id="customers">
                          <tr>
                            <th>PACKAGE</th>
                            <th>NO. OF LISTING (Product / Service )</th>
                            <th>FEE PER LISTING (₹)</th>
                            <th>GROSS TOTAL (₹)</th>
                            <th>GST @ 18% (₹)</th>
                            <th>TOTAL (₹)</th>
                          </tr>
                          <tr>
                            <td>A</td>
                            <td>First 3</td>
                            <td>₹ 847</td>
                            <td>₹ 2,542</td>
                            <td>₹ 457</td>
                            <td>₹ 2,999</td>
                          </tr>
                          <tr>
                            <td>B</td>
                            <td>4</td>
                            <td>₹ 760</td>
                            <td>₹ 3,042</td>
                            <td>₹ 547</td>
                            <td>₹ 3,589</td>
                          </tr>
                          <tr>
                            <td>C</td>
                            <td>5</td>
                            <td>₹ 708</td>
                            <td>₹ 3,542	</td>
                            <td>₹ 637</td>
                            <td>₹ 4,179</td>
                          </tr>
                          <tr>
                            <td>D</td>
                            <td>6</td>
                            <td>₹ 674</td>
                            <td>₹ 4,042</td>
                            <td>₹ 727</td>
                            <td>₹ 4,769</td>
                          </tr> 
                        </table>
                        <p class="table-p">For Every Additional Product Rs. 500 + 18% Gst = 590/- will be charged over and above 3 products. <br>For Ex: For 50 Products Rs. 26042 + 18% GST = 30729/- will be charged.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>



<?php include('footer.php'); ?>
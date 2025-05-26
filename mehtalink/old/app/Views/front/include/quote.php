<?php
$uri = service('uri');
$currentpage=$uri->getSegment(2);
?>
<form enctype="multipart/form-data" id="contact_form" name="contact_form" method="post" action="<?=base_url('page/'.$currentpage.'');?>">
        <?php if(isset($success)){ echo $success; }?>
        <div class="row">
            <input type="hidden" name="send_email" value="<?=$site_email;?>">
<div class='my-form col-md-4'> <label>Roof Top Area (Sq/Ft)</label> <input class='form-control' type='text' name='roof_top_area' placeholder='Roof Top Area (Sq/Ft)'> </div>
<div class='my-form col-md-4'> <label>Solar Panel (KW)</label> <input class='form-control' type='text' name='solar_kw' placeholder='Solar Panel (KW)'> </div>
<div class='my-form col-md-4'> <label>State*</label><select class='form-control' name='state' required=''>
	<option value=''>- Select State -</option><option value='Andhra Pradesh'>Andhra Pradesh</option><option value='Andaman and Nicobar Islands'>Andaman and Nicobar Islands</option><option value='Arunachal Pradesh'>Arunachal Pradesh</option><option value='Assam'>Assam</option><option value='Bihar'>Bihar</option><option value='Chandigarh'>Chandigarh</option><option value='Chhattisgarh'>Chhattisgarh</option><option value='Dadar and Nagar Haveli'>Dadar and Nagar Haveli</option><option value='Daman and Diu'>Daman and Diu</option><option value='Delhi'>Delhi</option><option value='Goa'>Goa</option><option value='Gujarat'>Gujarat</option><option value='Haryana'>Haryana</option><option value='Himachal Pradesh'>Himachal Pradesh</option><option value='Jammu and Kashmir'>Jammu and Kashmir</option><option value='Jharkhand'>Jharkhand</option><option value='Karnataka'>Karnataka</option><option value='Kerala'>Kerala</option><option value='Lakshadweep'>Lakshadweep</option><option value='Madhya Pradesh'>Madhya Pradesh</option><option value='Maharashtra'>Maharashtra</option><option value='Manipur'>Manipur</option><option value='Meghalaya'>Meghalaya</option><option value='Mizoram'>Mizoram</option><option value='Nagaland'>Nagaland</option><option value='Odisha'>Odisha</option><option value='Punjab'>Punjab</option><option value='Puducherry (Pondicherry)'>Puducherry (Pondicherry)</option><option value='Rajasthan'>Rajasthan</option><option value='Sikkim'>Sikkim</option><option value='Tamil Nadu'>Tamil Nadu</option><option value='Telangana'>Telangana</option><option value='Tripura'>Tripura</option><option value='Uttar Pradesh'>Uttar Pradesh</option><option value='Uttarakhand'>Uttarakhand</option><option value='West Bengal'>West Bengal</option></select></div>
<div class='my-form col-md-4'> <label>Avg Electricity Cost (Rs)</label> <input class='form-control' type='text' name='avg_electricity' placeholder='Avg Electricity Cost (Rs)'> </div>
<div class='my-form col-md-4'> <label>Sanctioned Load (KW)</label> <input class='form-control' type='text' name='sanctioned_load' placeholder='Sanctioned Load (KW)'> </div>
<div class='my-form col-md-4'> <label>Category*</label><select class='form-control' name='category' required=''>
	<option value=''>- Select Category -</option>
	<option value='Residential'>Residential</option>
	<option value='Commercial'>Commercial</option>
	<option value='Industrial'>Industrial</option>
	<option value='Others'>Others</option>
</select></div>
<div class='my-form col-md-4'> <label>Full Name*</label> <input class='form-control' type='text' name='name' placeholder='Enter Full Name *' required=''> </div>
<div class='my-form col-md-4'> <label>Email Address*</label> <input class='form-control' type='email' name='email' placeholder='Email Address *' required=''> </div>
<div class='my-form col-md-4'> <label>Contact Number*</label> <input class='form-control' type='text' name='number' pattern='[0-9]{10}' placeholder='Contact Number *' title='10 Digits Number Only' required=''> </div>
<div class='my-form col-md-12'> <label>Message</label> <textarea class='form-control' name='message' placeholder='Enter Message'></textarea> </div>
<div class='my-form col-md-12'> <input type='checkbox' name='accept' title='Accept Terms and Conditions' value='1' required=''> I accept <a href='pagef6e5.html?id=4&amp;title=privacy-policy' target='_blank'>Privacy Policy</a>.</div>
<div class='my-form col-md-4'> <input class='form-control btn btn-primary' type='submit' name='quote_form' value='Submit'> </div>
</form>
<style>.my-form {margin:7px 0px;float:left} #quote_form {margin:10px 0px;} .form_message{padding-top:100px;}</style>
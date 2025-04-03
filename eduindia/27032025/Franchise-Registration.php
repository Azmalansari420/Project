<?php 
	include("header.php");
	
	if(isset($f_btn)){ 
		$col_val = array(
			'name'=>$name,
			'email'=>$email,
			'mobile'=>$mobile,
			'branch_name'=>$institue_name,
			'address'=>$address,
			'city'=>$city,
			'dis'=>$dis,
			'state'=>$state,
            'dob'=>$dob,
            'facilities' =>$facilities
			);
         $f_name   = $_FILES['id_proof']['name'];
      $f_t_name = $_FILES['id_proof']['tmp_name'];
      
      //two pic
      $f_name_one   = $_FILES['franchises_form']['name'];
      $f_t_name_one = $_FILES['franchises_form']['tmp_name'];
      
      
      if(!empty($f_name)){
          $f_new_img = time().$f_name;
          $file_Path    = HP.$f_new_img; 
          $col_val['id_proof'] = $f_new_img; 
          move_uploaded_file($f_t_name,$file_Path);
      }
      
       if(!empty($f_name_one)){
          $f_new_img1 = rand().time().$f_name_one; 
          $file_Paths    = HP.$f_new_img1; 
          $col_val['franchises_form'] = $f_new_img1; 
          move_uploaded_file($f_t_name_one,$file_Paths);
      }
		$row = $con->insert('franchisee_enquiry',$col_val);
		 
		
		 if($row==1){
		   alert('Successful Submit Franchisee','Franchise-Registration.php');   
	   }
	}

?>


 <title>Yoga Course Franchise: Edu India Foundation | 08950071777</title>		
<meta name="keywords" content="Edu India Foundation, Yoga Course Franchise, Computer Centre Franchise, NTT Course Franchise"/>

<meta name="description" content="Get Yoga Course Franchise, Computer Centre Franchise, NTT Course Franchise from JKCS Edu India Foundation." />



<img src="edu_img/frencises.jpg" width="100%" alt="yoga course franchise"/>


	<section class="contact_us sec-padd">
    <div class="container">
        <div class="row">
            <div class="col-md-2 col-sm-12 col-xs-12">
                </div>
            <div class="col-md-6 col-sm-12 col-xs-12">
                <div class="section-title">
                    <h3>Franchisee Registration Form.</h3>
                </div>
                <div class="default-form-area">
                    <form id="contact-form" enctype="multipart/form-data" name="contact_form" class="default-form" action="" method="post">
					<h3>Institute Head Detail.</h3>
                        <div class="row clearfix">
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                
                                <div class="form-group">
                                    <input type="text" name="name" class="form-control" placeholder="Your Name *" required="">
                                </div>
                            </div>
							<div class="col-md-6 col-sm-6 col-xs-12">
                                
                                <div class="form-group">
                                    <input type="email" name="email" class="form-control" placeholder="Email *" required="">
                                </div>
                            </div>
							<div class="col-sm-6 col-xs-12">
                                
                                <div class="form-group">
                                    <input type="text" name="mobile" class="form-control" placeholder="Mobile *" required="">
                                </div>
                            </div>
                            <!--<div class="col-sm-6 col-xs-12">
                                
                                <div class="form-group">
                                    <input type="text" name="dob" class="form-control" placeholder="DOB of Owner/Director" required="">
                                </div>
                            </div>-->
							<div class="col-sm-6 col-xs-12">
                                
                                <div class="form-group">
                                    <input type="text" name="institue_name" class="form-control" placeholder="Institute  Name *" required="">
                                </div>
                            </div>
							 
                               <!--<div class="col-md-12 col-sm-12 col-xs-12">
                                <div class="form-group">
                                    <textarea name="facilities" class="form-control " placeholder="Facilities at Training Centre "></textarea>
                                </div>
                            </div>--> 
                           <!-- <div class="col-md-12 col-sm-12 col-xs-12">
                                <div class="form-group">
                                    <textarea name="address" class="form-control " placeholder="Address...."></textarea>
                                </div>
                            </div> --> 
<div class="col-md-4 col-sm-4 col-xs-12">
                                <div class="form-group">
                                    <input type="text" name="state" class="form-control" value="" placeholder=" 
State *" required="">
                                </div>
                            </div>							
							<div class="col-md-4 col-sm-4 col-xs-12">
                                <div class="form-group">
                                    <input type="text" name="city" class="form-control" value="" placeholder="City/Village *" required="">
                                </div>
                            </div>
							<div class="col-md-4 col-sm-4 col-xs-12">
                                <div class="form-group">
                                    <input type="text" name="dis" class="form-control" value="" placeholder=" 
District *" required="">
                                </div>
                            </div>
							<!--<div class="col-md-4 col-sm-4 col-xs-12">
                                <div class="form-group">
                                    <label>Id Proof *</label>
                                    <input type="file" name="id_proof" class="form-control" value="" placeholder=" 
District *" required="">
                                </div>
                            </div>-->
                            <!--<div class="col-md-4 col-sm-4 col-xs-12">
                                <div class="form-group">
                                    <label>Franchises Form *</label>
                                    <input type="file" name="franchises_form" class="form-control" value="" placeholder=" 
District *" required="">
                                </div>
                            </div>-->
						 <!--<div class="col-md-4 col-sm-4 col-xs-12">
                             <div class="form-group">
                                <label> </label>
                                 <a href="form.pdf" download="" > Click here</a>To Download Form
                             </div>
                         </div>-->
						 <div class="col-md-12">
							<input type="submit" name="f_btn" value="Submit" class="btn btn-info btn-block" />
							</div>
                        </div>
                    </form>
                </div>
            </div>
             <div class="col-md-4">
                        <div class="app-header">
                            <h3>Bank Details</h3>
                        </div>
                        <div class="contact-text">
                          <table class="table table-bordered">
                          	<tr>
                            	<th>Name</th>
                                <td>JKCS Edu India Foundation</td>
                            </tr>
                            <tr>
                            	<th>A/c No.</th>
                                <td>676520110000450</td>
                            </tr>
                            <tr>
                            	<th>IFSC Code</th>
                                <td>BKID0006765</td>
                            </tr>
                            <tr>
                            	<th>Bank</th>
                                <td>Bank of India</td>
                            </tr>
                            <tr>
                            	<th>Location</th>
                                <td>Sirsa</td>
                            </tr>
                            <tr>
                            	<th>Account Type</th>
                                <td>Current</td>
                            </tr>
                          </table>
                        </div>
                    </div>	
        </div>
    </div>
</section>


<?php include("footer.php");?>

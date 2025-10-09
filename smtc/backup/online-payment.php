<?php include_once('header.php'); ?>
<div class="container" style="margin-top:2.5%;">
    <div class="row">
        <div class="col-sm-3"></div>
        <div class="col-sm-6">
            <div class="panel panel-success">
                <div class="panel-heading">Student Online Payment</div>
                <div class="panel-body">
                    <form action="online-paytm-redirect.php" method="post"> 
					<div class="form-group">
					<label for="">Select Course</label>
					  <select required name="s_course" class="form-control select2" id="s_course"> 
						  <option value="">Select Course</option>
					

			 <?php
			  $all_fetch_institue  = $con->all_fetch('course',array('status'=>'Yes'));
			  if(is_array($all_fetch_institue) || is_object($all_fetch_institue)){
				  foreach($all_fetch_institue as $afi){
				?>
				<option value="<?php e($afi->id);?>"><?php e($afi->name);?></option>
			  <?php  } } ?> 
					   </select>
					</div> 
                        <div class="form-group">
                            <label>Enter Name *</label>
                            <input required type="text" name="full_name" class="form-control" placeholder="Name *"/>
                        </div>
                        <div class="form-group">
                            <label>Enter Email *</label>
                            <input required type="email" name="EMAIL" class="form-control" placeholder="Email *"/>
                        </div>
                        <div class="form-group">
                            <label>Enter Mobile *</label>
                            <input onkeyup="if (/\D/g.test(this.value)) this.value = this.value.replace(/\D/g,'')" required type="text" maxlength="10" minlength="10" name="MSISDN" class="form-control" placeholder="Mobile *"/>
                        </div>
                        <div class="form-group">
                            <label>Enter Amount *</label>
                            <input onkeyup="if (/\D/g.test(this.value)) this.value = this.value.replace(/\D/g,'')" required type="text" maxlength="10" name="TXN_AMOUNT" class="form-control" placeholder="Amount *"/>
                        </div>
                        <div class="form-group"> 
                            <input type="submit" name="payment_form_submit" class="btn btn-success btn-block" value="Pay Now"/>
                        </div>
                    </form>
                    
                </div>
            </div>
        </div>    
    </div>
</div>
<?php include_once('footer.php'); ?>
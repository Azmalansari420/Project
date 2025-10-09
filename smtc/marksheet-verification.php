<?php include("header.php");?>


<section class="our-services style-2">
    <div class="container"> 
        <div class="row">
		<?php 
		
		if(isset($show_result) || isset($_GET['reg_id'])){
		    
		    if(isset($_GET['reg_id'])){
		        $reg_id = $_GET['reg_id']; 
		    }else{
    			$reg_id = $stu_reg_number;
    			$dob = $dob;
		    }
		    
		    $table_name = "tbl_user"; 
		    
			$regis  = $con->check($table_name,array('payment_status'=>1,'reg_id'=>$reg_id,'dob'=>$dob));
			
			$fs = fs($table_name,array('reg_id'=>$reg_id)); 
			
			$string_to_array = explode('#',$fs->specialization);
             if(is_array($string_to_array) || is_object($string_to_array)){
                 $user_specialization = "";
                 foreach($string_to_array as $sta){
                     $user_specialization .= id_to_name('specialization',$sta)."</br> ";
                 }
                 
             }
			if($regis >=1){ 
			
			if($fs->mc_status==1){
			?>
			 <div class="col-sm-8 col-sm-offset-2">
        	    <div class="bg_image"  id="dvContainer"> 
        	            <style>
        	                  .bg_image{
                                    background-image: url(img/verify/logo.jpg);
                                    background-repeat: no-repeat;
                                    border: 1px solid #000;
                                    background-size: auto;
                                    background-position: center;
                                }
                                .weight{
                                	font-weight: bold;
                                	border: hidden;
                                }
                                .opacity{
                                
                                background: #ffffffd4;
                                
                                }
                                .opacity   table {
                                            border-collapse: collapse;
                                            }  
                                .opacity th, .opacity td,.opacity table{
                                       
                                        border: none; 
                                        }
                                       
                                .opacity th, .opacity td{
                                         padding: 5px;
                                         font-size: 12px;  
                                       
                                }
                                
                                .opacity h1{
                                    font-size: 40px;font-weight: bold;
                                }
                                
                                .opacity h4{
                                    font-weight: bold;text-align:center;
                                }
                            
                            @media only screen and (max-width: 600px) {
                                   .opacity th, .opacity td{
                                     padding:3px 5px;
                                     font-size: 10px;  
                                   
                                     }
                                    
                                   .opacity  h1{
                                    font-size: 16px;font-weight: bold;
                                    }
                                    
                                    .opacity h4{
                                        font-size: 10px;
                                        font-weight: bold;text-align:center;
                                    }
                                }
        	            </style>
                		<div class="opacity">
                		    <table style="width:95%;margin: auto;">
                                <tbody>
                                  <tr>
                                        <td style="width:20%">  <img src="imge/logo.png"  alt="User Image"> </td>
                                        <td style="text-align:center">
                                            	<h1 style="">SAUNIT MANAGEMENT AND TECHNICAL COUNCIL</h1>
                					            <h4 style="">Reg. Under Ministry Of Corporate Affairs Govt. of India </br> ISO 9001:2015 Certified Institute</h4>
                                        </td>
                                    </tr>
                                   
                                    
                                </tbody>
                            </table>
                            <table style="width:95%;margin: auto;border-top: 3px solid #000;">
                                <tbody>
                                    <tr>
                                        <td>
                                            </br>
                                             <h4 class="text-center" style="font-weight: bold;">Sub: Student Related Verification Information</h4>
                    	 
                    			 
                                				<p style="font-size:16px" class="text-center"><b>SMTC</b> is to Verify that <b><?php if($fs->gender=='Male'){echo "Mr."; }else{echo "Ms.";}?> <?php echo $fs->name; ?></b> has Completed his Course<b> </br><?php 
                                            echo id_to_name('course',$fs->course_id);
                                            ?></b> from 
                                			Saunit Management Technical Council</p>
                                 
                                			<h4 class="text-center" style="font-weight: bold;">Additional Details Regarding the above Mentioned Program </h4>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            
                                            	<table class="table">
                                                        <tbody>
                                                          <tr class="weight">
                                                            <td style="width:30%">Enrollment Number </td><td>:</td>
                                                            <td><?php echo $fs->reg_id; ?></td>
                                                          </tr>
                                                          <tr class="weight">
                                                            <td>Name of the Student</td><td>:</td>
                                                            <td><?php echo ucwords($fs->name); ?></td>
                                                          </tr>
                                                          <tr class="weight">
                                                            <td>Father's Name</td><td>:</td>
                                                            <td><?php echo ucwords($fs->father_name); ?></td>
                                                          </tr>
                                                          <tr class="weight">
                                                            <td>Mother Name</td><td>:</td>
                                                            <td><?php echo ucwords($fs->mother_name); ?></td>
                                                          </tr>
                                                          <tr class="weight">
                                                            <td>Name Of the Program</td><td>:</td>
                                                            <td><?php $course = fs("tbl_course",array('id' =>$fs->course_id)); ?>
                                                                                				<?php echo $course->title; ?></td>
                                                          </tr>
                                                          <tr class="weight">
                                                            <td>Specialization </td><td>:</td>
                                                            <td><?php echo $user_specialization; ?> </td>
                                                          </tr>
                                                        </tbody>
                                                      </table>
                              
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <p>Please feel free to get back to us in the eventuality of any queuies on the given address or  phone number:</p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                             <table style="width:95%;margin: auto;">
                                                <tr>
                                                    <td style="width:50%"><img src="img/verify/1.png" style="height: 100px;" class="img-responsive"></td>
                                                    <td><img src="img/verify/2.png"  style="height: 100px;" class="img-responsive"></td>
                                                </tr>
                                            </table>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <h3 style="font-weight: bold;">Admin Head</h3>
                                				<h3 >SAUNIT MANAGEMENT AND TECHNICAL COUNCIL</h3>
                                				<p>Email:info@smtc.org.in</p>
                                				<p>Website:www.smtc.org.in</p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            	<h4 style="font-weight: bold;border-top: 3px solid #000;    width: 97%;padding-top: 13px;" class="text-center">130B, 4th Floor, Sewak Park, Pillar No -783,  Dwarka Mor, New Delhi-110059 India </h4>
                                				<h4 style="font-weight: bold;" class="text-center">Website:www.smtc.org.in PH.8851481640</h4>
                                				<h4 style="font-weight: bold;" class="text-center">Email.smtcinstitute.dwarka@gmail.com, info@smtc.org.in</h4>
                                        </td>
                                    </tr>
                            </tbody>
                            </table>
            	    	</div>
            		    <br>
            	</div>
            	</br>
            	</br>
            	<div class="row">
                        <div class="col-sm-2"></div>
                        <div class="col-sm-8"> 
                        
                              <center>  &nbsp; &nbsp; &nbsp; 
                              <a href="javascript:void(0)" id="btnPrint" class="print-link avoid-this btn btn-primary ">Print And Save</a> &nbsp; &nbsp; &nbsp;  
                           
                              </center>
                                
                         
                        </div>
                        <div class="col-sm-2"></div>
                    </div>
                    	</br>
            	</br>
             </div>
        	<?php } }else{?>
    		  <div class="col-sm-4 col-sm-offset-4">
    			<div class="alert alert-danger">
    				<strong>Wrong : </strong> Student Registration id is Wrong
    			</div>
    			<p class="text-center">
    			    <a href="" class="btn btn-primary">Try Agian</a>
    			</p>
    		  </div>
		<?php } 
		    
		}else{
		?>
		     <div class="col-sm-4 col-sm-offset-4">
				   <div class="panel panel-primary" style="margin-top:55px;">
						<div class="panel-heading">
						   Get Result 
						</div>
						<div class="panel-body">
						<form action="" method="post">
						   <div class="form-group">
						   <label for="stu_reg_number">Student Registration Number</label>
								<input type="text" required autocomplete="off" name="stu_reg_number" class="form-control" id="stu_reg_number" />
						   </div>
						   
						   <div class="form-group">
						   <label for="dob">Date of birth</label>
								<input type="date" required autocomplete="off" name="dob" class="form-control" id="dob" />
						   </div>
						   
						   <input type="submit" name="show_result" value="Submit" class="btn btn-primary btn-block"/>
						   </form>
						</div>
				   </div>
			 </div>
		<?php } ?>
      
    </div>
    </div>
</section>
<?php include("footer.php");?>

<script src="print.min.js"></script>
<script type='text/javascript'>
jQuery(function($) { 'use strict';
    $('#btnPrint').on('click', function() {
        //Print ele4 with custom options
        $("#dvContainer").print({
            //Use Global styles
            globalStyles : false,
            //Add link with attrbute media=print
            mediaPrint : false,
            //Custom stylesheet
            //Print in a hidden iframe
            iframe : false,
            //Don't print this
            noPrintSelector : ".avoid-this",
            //Log to console when printing is done via a deffered callback
            deferred: $.Deferred().done(function() { console.log('Printing done', arguments); })
        });
    });
});
//]]>
</script>

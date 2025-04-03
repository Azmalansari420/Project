<?php 
include("header.php");
 $g_admin = fs('top_admin',array('type'=>'A'));
?>
<title>JKCS Edu India Foundation - Verification</title>		
<meta name="keywords" content="Edu India Foundation, JKCS Edu India Foundation"/>
<meta name="description" content="Edu India Foundation: Enter your registration number for verification." />



<section class="our-services style-2">
    <div class="container"> 
        <div class="row">
	        <div class="col-sm-10 col-sm-offset-2">
	        	<h2 style="text-align: center;">Student Register Instructions</h2>
	        	 <div class="content_box">
	        	 	<?php echo html_entity_decode($g_admin->reg_instruction) ?>
	        	 </div>
			    <form action="user-register.php" method="POST">
			    	<p><label class="checkbox-inline"><input required type="checkbox" value="">Accept Instructions</label></p>
			    	<div class="form-group">
			    		<input type="submit" name="submit">
			    	</div>
			    </form>
			 
	        </div>
        </div>
    </div>
</section>








<?php include("footer.php");?>
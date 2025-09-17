<?php $this->load->view('header'); ?>



<?php  

$login_active = "active show";
$signup_active = "";
$sponser_id = 0;
if(isset($_GET['sponser_id']))
{
	$login_active = "";
	$signup_active = "active show";
	$sponser_id = $_GET['sponser_id'];
}

?>

		<section class="services-page section-padding" style="text-align: center;">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-lg-12">
                    <div class="services-details">
                      
                        <ul class="nav nav-tabs" id="myTab" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link <?=$login_active ?>" id="inspections-tab" data-toggle="tab" href="#inspections" role="tab" aria-controls="inspections" aria-selected="true" aria-expanded="true">Login</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link <?=$signup_active ?>" id="mortgage-tab" data-toggle="tab" href="#mortgage" role="tab" aria-controls="mortgage" aria-selected="false" aria-expanded="false">Sign Up</a>
                            </li>
                          
                        </ul>

                        <?php echo $this->session->flashdata('message'); ?>




                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade <?=$login_active ?>" id="inspections" role="tabpanel" aria-labelledby="inspections-tab" aria-expanded="true">
                                <form action="<?php echo base_url('user/user_login'); ?>" method="POST">
				                    <div class="row list-input">
				                        
				                        <div class="col-md-12">
				                            <div class="single-get-touch">
				                                <input type="email" name="email" placeholder="Email" required>
				                            </div>
				                        </div>

				                        <div class="col-md-12">
				                            <div class="single-get-touch">
				                                <input type="password" name="password" placeholder="Password" required>
				                            </div>
				                        </div>
				                        <div class="col-md-12">
				                            <div class="single-get-touch">
				                               <button type="submit" name="submit" class="btn btn-default btn-sm">LOGIN</button>
				                            </div>
				                        </div>
				                    </div>
				                </form>
                            </div>

                            <div class="tab-pane fade <?=$signup_active ?>" id="mortgage" role="tabpanel" aria-labelledby="mortgage-tab" aria-expanded="false">
                                <form action="<?php echo base_url('user/registration'); ?>" method="POST">


                                	<input type="hidden" name="sponser_id" value="<?=$sponser_id ?>">


				                    <div class="row list-input">
				                        <div class="col-md-6 mr0">
				                            <div class="single-get-touch">
				                                <input type="text" name="username" placeholder="User Name" required>
				                            </div>
				                        </div>
				                        <div class="col-md-6">
				                            <div class="single-get-touch">
				                                <input type="text" name="mobile" placeholder="Phone" required>
				                            </div>
				                        </div>
				                        <div class="col-md-12">
				                            <div class="single-get-touch">
				                                <input type="email" name="email" placeholder="Email" required>
				                            </div>
				                        </div>
				                        <div class="col-md-12">
				                            <div class="single-get-touch">
				                                <input type="text" name="password" placeholder="Password" required>
				                            </div>
				                        </div>
				                        
				                        <div class="col-md-12">
				                            <div class="single-get-touch">
				                               <button type="submit" name="submit" class="btn btn-default btn-sm">SIGN UP</button>
				                            </div>
				                        </div>
				                    </div>
				                </form>
                            </div>
                           
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
    </section>

<?php $this->load->view('footer'); ?>

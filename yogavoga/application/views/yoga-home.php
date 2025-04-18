
  <?php $this->load->view('header'); ?>

    <!-- Content -->
    <div class="page-content">
        <!-- inner page banner -->
        <div class="dez-bnr-inr" style="background-image:url(<?php echo base_url(); ?>images/background/bg9.jpg);">
            <div class="container">
                <div class="dez-bnr-inr-entry">
                    <h1>Yoga Home</h1>
                </div>
            </div>
        </div>
        <!-- inner page banner END -->
        <!-- Breadcrumb row -->
        <div class="breadcrumb-row">
            <div class="container">
                <ul class="list-inline">
                    <li><a href="#">Home</a></li>
                    <li>Yoga Home</li>
                </ul>
            </div>
        </div>
        <!-- Breadcrumb row END -->
        <!-- contact area -->
        <div class="content-area">
            <!-- Portfolio -->
            <div class="container">
            	<div class="section-content">
					<div class="row">
						<div class="col-lg-12 col-md-12 m-b30">
							<div class="m-b20 text-center">
								<h2 class="h2 m-t0">Yoga At Home</h2>
							</div>
						</div>
					</div>
				</div>


                <div class="m-b30">
                    <div class="">
                        <h2 class="text-uppercase">You can choose any style of yoga at home </h2>
                    </div>
                    <div class="section-content">
                        <div class="blog-carousel owl-carousel mfp-gallery gallery owl-btn-center-lr">
                            <?php
                            $this->db->order_by('id desc');
                            $yhdijj = $this->crud->selectDataByMultipleWhere('yogahome',array('status'=>1,));
                            foreach($yhdijj as $data)
                                { ?>
                            <div class="item">
                                <div class="ow-event-post date-style-2">
                                    <div class="ow-event-media dez-img-effect zoom-slow"> 
                                        <img src="<?php echo base_url(); ?>media/uploads/yogahome/<?php echo $data->image; ?>" alt=""> 
                                    </div>
                                    <div class="ow-event-info ">
                                        <div class="ow-event-title text-center">
                                            <h4 class="event-title"> <a href="#" title="Video post"><?php echo $data->name; ?></a> </h4>
                                        </div>
                                        <div class="m-t10 text-center">
                                            <button type="button" class="mybutton btn btn-primary" onclick="showModal('<?php echo $data->name; ?>')"/>Book Demo</button> 
                                        </div>
                                    </div>
                                </div>
                            </div>

                        <?php } ?>
                        </div>
                    </div>
                </div>

                

                <div class="col-lg-12 col-md-12 m-b30">
                    <div class="m-b20">
                        <h2 class="h2 m-t0">WHAT YOU WILL GET?</h2>
                    </div>
                    <p>We Provide Various Services Starting From Our Own Studio To Coming At Your Doorsteps And Helping You In A Way Best Suited To You According To Your Convenience. We Have Certified And Experienced Trainers Who Are Trained According To Your Needs And Wishes And Dealing With Specific Skills And Knowledge. Our Aim Is To Make You More Conscious And Aware So That You Can-</p>

                    <div class="widget widget_services">
                        <ul>
                            <li><a href="#!">See Yoga As A Way To Guide Your Path In Life</a></li>
                            <li><a href="#!">Understand Yoga Practice And Tailor It To Your Goals.</a></li>
                            <li><a href="#!">Apply Yoga To Remain In Connection With Yourself.</a></li>
                            <li><a href="#!">Develop New Healthy Lifestyle Habits</a></li>
                            <li><a href="#!">Have A Stress Free Life And Be More Mindful.</a></li>
                            <li><a href="#!">Have Your Body Mind And Soul In Alignment With The Rhythm Of The Universe</a></li>
                        </ul>
                    </div>
                </div>


                <div class="col-lg-12 col-md-12 m-b30">
                    <div class="m-b20">
                        <h2 class="h2 m-t0">OUR SERVICES.</h2>
                    </div>
                    <p><strong>YOGA @HOME- ‘’YOGA TEACHES MORE THAN POSTURE; IT TEACHES YOU HOW TO TRUST!!’’</strong></p>
                    <p>Too Busy To Go To A Yoga Studio? No Worries We Bring</p>
                    <p>Yoga At Your Door Steps Based On Your Convenience. Tell Us The Best Time Suited To You And We Will Be There For You. We Have Experienced, Certified And Trained Yoga Teachers Specially Trained In A Way To Meet The Needs Of Your Body And Mind. If You Have Any Specific Health Issue We Cater To Your Needs And Train Our Teacher Specifically And Then Send Them To You Based On The Time Given By You. Yoga trainer at home Is Beneficial For You As We Give More Personalized Attention To You. It Brings Discipline And You Don’t Have To Worry About The Regularity And Hassles Of Travelling.</p>

                    <!-- <div class="widget widget_services">
                        <ul>
                            <li><a href="#!">Yoga At Your Door Steps Based On Your Convenience.</a></li>
                            <li><a href="#!">Tell Us The Best Time Suited To You And We Will Be There For You.</a></li>
                            <li><a href="#!">Apply Yoga To Remain In Connection With Yourself.</a></li>
                            <li><a href="#!">Develop New Healthy Lifestyle Habits</a></li>
                            <li><a href="#!">Have A Stress Free Life And Be More Mindful.</a></li>
                            <li><a href="#!">Have Your Body Mind And Soul In Alignment With The Rhythm Of The Universe</a></li>
                        </ul>
                    </div> -->
                </div>


                <div class="col-lg-12 col-md-12 m-b30">
                    <div class="m-b20">
                        <h2 class="h2 m-t0">We Have Good Experienced And Professional Experts Trainers Available In Each Of The Categories Listed Below. </h2>
                    </div>
                </div>

                <div class="row">
                    
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="widget widget_services">
                            <h4 class="m-b15 text-uppercase">Yoga for fitness</h4>
                            <div class="dez-separator bg-black"></div>
                            <ul>
                                <li><a href="#">Breathing Exercise</a></li>
                                <li><a href="#">Meditation for anxiety</a></li>
                                <li><a href="#">Yoga for Beginners</a></li>
                                <li><a href="#">Yoga for Body Toning</a></li>
                                <li><a href="#">Yoga for General fitness</a></li>
                                <li><a href="#">Yoga for weight loss</a></li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="widget widget_services">
                            <h4 class="m-b15 text-uppercase">Yoga way to cure and transformation</h4>
                            <div class="dez-separator bg-black"></div>
                            <ul>
                                <li><a href="#">Yoga for Medical issue</a></li>
                                <li><a href="#">Yoga for Hypertension</a></li>
                                <li><a href="#">Yoga for heart problems</a></li>
                                <li><a href="#">Yoga for obesity</a></li>
                                <li><a href="#">Yoga for Diabetes</a></li>
                                <li><a href="#">Yoga for Spondylosis</a></li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="widget widget_services">
                            <h4 class="m-b15 text-uppercase">Yoga Flow</h4>
                            <div class="dez-separator bg-black"></div>
                            <ul>
                                <li><a href="#">Vinyasa Yoga</a></li>
                                <li><a href="#">Ashtanga Yoga </a></li>
                                <li><a href="#">Hatha Yoga</a></li>
                                <li><a href="#">Power Yoga</a></li>
                                <li><a href="#">Traditional Yoga</a></li>
                                <li><a href="#">iyengar Yoga</a></li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="widget widget_services">
                            <h4 class="m-b15 text-uppercase">Yoga For Life Style Disorder/ Therapeutic Yoga</h4>
                            <div class="dez-separator bg-black"></div>
                            <ul>
                                <li><a href="#">Yoga for Bone Disease</a></li>
                                <li><a href="#">Yoga for spine disease</a></li>
                                <li><a href="#">Yoga for abdominal disease</a></li>
                                <li><a href="#">yoga for nervous system </a></li>
                                <li><a href="#">yoga for general fitness</a></li>
                                <li><a href="#">yoga for cardiovascular</a></li>
                            </ul>
                        </div>
                    </div>
                    
                </div>

                <!-- <footer class="site-footer footer-white" style="display: block; height: 503.5px;">
        <div class="footer-top">
            <div class="container">
                
            </div>
        </div>
        
    </footer> -->


            </div>
            <!-- Portfolio END -->
        </div>
        <!-- contact END -->
    </div>
    <!-- Content END-->
   




  <?php $this->load->view('footer'); ?>

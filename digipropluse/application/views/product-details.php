<?php include('header.php'); ?>
<style>
	.nice-select .option {
	    color: black!important;

	}
	.contact__form form .nice-select {
		width: 100%;
    font-size: 16px;
    font-weight: 400;
    border: none;
    background-color: var(--sub-bg);
    margin-bottom: 20px;
    padding: 18px 20px;
    height: 57px;
    border-radius: 5px;
    border: 1px solid;
	}
	.contact__form form input, .contact__form form textarea {
	    padding: 10px 20px;
	        color: white;
	}
	.nice-select {
	    line-height: inherit;
	}

	.item.sub-bg.mb-30{
		border: 1px solid white;
    	border-radius: 10px;
	}

</style>

    <main>
        <!-- Page banner area start here -->
        <section class="banner__inner-page bg-image pt-50 pb-50 bg-image">
            <div class="shape2 wow slideInLeft" data-wow-delay="00ms" data-wow-duration="1500ms">
                <img src="<?=base_url() ?>assets/images/banner/inner-banner-shape2.png" alt="shape">
            </div>
            <div class="shape1 wow slideInLeft" data-wow-delay="200ms" data-wow-duration="1500ms">
                <img src="<?=base_url() ?>assets/images/banner/inner-banner-shape1.png" alt="shape">
            </div>
            <div class="shape3 wow slideInRight" data-wow-delay="200ms" data-wow-duration="1500ms">
                <img class="sway__animationX" src="<?=base_url() ?>assets/images/banner/inner-banner-shape3.png" alt="shape">
            </div>
            <div class="container">
                <h2 class="wow fadeInUp" data-wow-delay="00ms" data-wow-duration="1500ms"><?=$EDITDATA[0]->name ?></h2>
            </div>
        </section>
        <!-- Page banner area end here -->

        <!-- Service area start here -->
        <section class="service-single-area pt-50 pb-120">
            <div class="container">
                <div class="row g-4">

                    <div class="col-lg-6 order-2 order-lg-1">
                        <div class="service-single__left-item">

                        	<div class="section-header mb-20">
	                            <?=$EDITDATA[0]->content ?>
	                        </div>	                       
                            
                            
                           
                        </div>
                    </div>

                    <div class="col-lg-6 order-1 order-lg-2"  id="plan-form">
                        <div class="service-single__right-item">
                        	<div class="item sub-bg mb-30">
                                <h5 class="title">Find plans for your device</h5>
                                <div class="contact__form">
	                                <form action="<?=base_url('welcome/searchplan') ?>" method="post">
                                        <input type="hidden"  name="product_id" value="<?=($EDITDATA[0]->id) ?>">
	                                    <div class="row">
	                                        <div class="col-12">
	                                            <label for="name">Device Brand*</label>
	                                            <select class="bg-transparent bor" name="device_id" required>
                                                <?php
                                                  $device = $this->db->get_where('device',array('status'=>1,'product_id'=>$EDITDATA[0]->id))->result_object();
                                                  foreach ($device as $key => $data) 
                                                     { ?>
	                                            	<option value="<?=$data->id ?>"><?=$data->name ?></option>
                                                    <?php } ?>
	                                            </select>
	                                        </div>

	                                        <div class="col-12">
	                                            <label for="purchase_date_input" style="width: 100%;">Purchase date (DD/MM/YYYY)*
	                                               <input style="margin-top: 15px;" class="bg-transparent bor" id="purchase_date_input" type="date"  name="purchase_date" required>
                                                </label>
	                                        </div>
	                                        <div class="col-12">
	                                            <label for="amount">How much did you purchase it for?*</label>
	                                            <input class="bg-transparent bor" id="amount" type="number" name="price" required>
	                                        </div>
	                                    </div>

	                                    
	                                    <div class="btn-two">
	                                        <span class="btn-circle">
	                                        </span>
	                                        <button name="submit" type="submit" class="btn-one">Find Plans <i class="fa-regular fa-arrow-right-long"></i></button>
	                                    </div>
	                                </form>
	                            </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </section>



        <section class="pricing-area pt-0 pb-120">
            <div class="container">
                <div class="section-header text-center mb-60">
                    <h2 class="wow fadeInUp" data-wow-delay="200ms" data-wow-duration="1500ms">Let's find you the best plan
                    </h2>
                </div>
                <div class="row g-4">

                    <?php
                    $plan = $this->db->get_where('plans',array('status'=>1,))->result_object();
                    foreach($plan as $data)
                        { ?>
                    <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="00ms"
                        data-wow-duration="1500ms">
                        <div class="pricing__item">
                            <div class="item-shape">
                                <img src="<?=base_url() ?>assets/images/shape/pricing-item-shape.png" alt="shape">
                            </div>
                            <div class="pricing-head">
                                <div class="text-center">
                                    <h4 class="text-white text-center"><?=$data->name ?></h4>
                                </div>
                            </div>
                            <ul>
                                <?php
                                $content = json_decode($data->content);
                                // print_r($content[1]->get_line);
                                ?>
                                <li><?=$content[0]->get_line ?></li>
                                <li><?=$content[1]->get_line ?></li>
                            </ul>
                            <a href="#plan-form" class="btn-one d-block text-center">Know More <i class="fa-regular fa-arrow-right-long"></i></a>
                        </div>
                    </div>

                    <?php } ?>

                    

                </div>
            </div>
        </section>

    </main>
   

    <?php include('footer.php'); ?>

    

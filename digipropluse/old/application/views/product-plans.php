<?php 

$request_id = $this->input->get('request_id');
$searchplan = $this->db->get_where('searchplan',array('request_id'=>$request_id))->result_object();
$product_id = (int) $searchplan[0]->product_id;  // Ensure it's an integer
if(!empty($searchplan))
{

    $price = (int) $searchplan[0]->price;  // Ensure it's an integer
    $device_id = (int) $searchplan[0]->device_id;
}

$plans = $this->db->get_where('plans',array('status'=>1))->result_object();


// $this->db->where('price_from <=', $price);
// $this->db->where('price_to >=', $price);
// $getplan = $this->db->get_where('pricerange',array('device_id'=>$device_id))->result_object();


// print_r($getplan);
// die;




include('header.php'); ?>
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

	.pricing__item {
	    overflow: hidden;
	    position: relative;
	    z-index: 1;
	    background: linear-gradient(180deg, #3c72fc -1.09%, #00060c 175.27%);
	    padding: 25px 22px;
	    border-radius: 13px;
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
                <h2 class="wow fadeInUp" data-wow-delay="00ms" data-wow-duration="1500ms">Available plans for your <?=devicename($device_id) ?></h2>
            </div>
        </section>
        <!-- Page banner area end here -->

        



        <section class="pricing-area pt-50 pb-120">
            <div class="container">
                <!-- <div class="section-header text-center mb-60">
                    <h2 class="wow fadeInUp" data-wow-delay="200ms" data-wow-duration="1500ms">Let's find you the best plan
                    </h2>
                </div> -->
                <div class="row g-4">

                    <?php
                    if(!empty($plans))
                    {

                    foreach ($plans as $key => $value) 
                        {
                            $this->db->group_by("plan_id");

                            $plan_percentage = $this->db->get_where('plan_percentage',array('p_id'=>$product_id,'plan_id'=>$value->id))->result_object();

                            $get_per = $plan_percentage[0]->plan_percentage;
                            
                            if(!empty($get_per))
                            {
                                $finalprice = $price * ($plan_percentage[0]->plan_percentage / 100);
                            }
                            else
                            {
                                $finalprice = 0;
                            }

                            // print_r($finalprice);
                            

                         ?>
                    <div class="col-xl-6 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="00ms"
                        data-wow-duration="1500ms">
                        <div class="pricing__item">
                            <div class="item-shape">
                                <img src="<?=base_url() ?>assets/images/shape/pricing-item-shape.png" alt="shape">
                            </div>
                            <div class="pricing-head">
                                <div>
                                    <h4 class="text-white mb-10"><?=$value->name ?></h4>
                                    <h2><?=currency_simble($finalprice) ?><span>/ 1 year</span></h2>
                                </div>
                            </div>
                            <ul>
                            <?php
                            $content = json_decode($value->content);
                            foreach($content as $value2)
                                { ?>
                            <li><?=$value2->get_line ?></li>
                            
                            <?php } ?>
                            </ul>
                            <form action="<?=base_url('welcome/plan_update') ?>" method="post">
                                <input type="hidden" name="percentage" value="<?=$get_per ?>">
                                <input type="hidden" name="plan_price" value="<?=$finalprice ?>">
                                <input type="hidden" name="plan_id" value="<?=$value->id ?>">
                                <input type="hidden" name="request_id" value="<?=$request_id ?>">
                                <button type="submit" name="submit" class="btn-one d-block text-center w-100">
                                	choose Plan <i class="fa-regular fa-arrow-right-long"></i>
                                </button>
                            </form>
                            
                        </div>
                    </div>

                    <?php } } else {?>
                        <div class="col-xl-12 col-lg-12 col-md-12 wow fadeInUp" data-wow-delay="00ms"
                        data-wow-duration="1500ms">
                            <div class="pricing__item">
                                <div class="pricing-head">
                                    <div>
                                        <h4 class="text-white mb-10">No PLan Found!</h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php } ?>
                    

                    

                    

                </div>
            </div>
        </section>

    </main>

    <?php include('footer.php'); ?>
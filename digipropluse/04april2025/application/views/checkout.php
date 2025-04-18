<?php 
$request_id = $this->input->get('request_id');
$searchplan = $this->db->get_where('searchplan',array('request_id'=>$request_id))->result_object();
if(!empty($searchplan))
{
    $plan_id = $searchplan[0]->plan_id;
    $plans = $this->db->get_where('plans',array('id'=>$plan_id))->result_object();
    $finalamount = gstamount($searchplan[0]->plan_price);
}


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

    li.mb-15{
        display: flex;
    justify-content: space-between;
    }

    .service-single__left-item {
    padding: 11px 10px;
    border: 1px solid;
    border-radius: 8px;
}

</style>

    <main>
        <!-- Page banner area start here -->
        <section class="banner__inner-page bg-image pt-50 pb-50 bg-image">
            <div class="shape2 wow slideInLeft" data-wow-delay="00ms" data-wow-duration="1500ms">
                <img src="assets/images/banner/inner-banner-shape2.png" alt="shape">
            </div>
            <div class="shape1 wow slideInLeft" data-wow-delay="200ms" data-wow-duration="1500ms">
                <img src="assets/images/banner/inner-banner-shape1.png" alt="shape">
            </div>
            <div class="shape3 wow slideInRight" data-wow-delay="200ms" data-wow-duration="1500ms">
                <img class="sway__animationX" src="assets/images/banner/inner-banner-shape3.png" alt="shape">
            </div>
            <div class="container">
                <h2 class="wow fadeInUp" data-wow-delay="00ms" data-wow-duration="1500ms">Enter your details</h2>
            </div>
        </section>
        <!-- Page banner area end here -->

        



        <section class="service-single-area pt-50 pb-120">
            <div class="container">
                <div class="row g-4">

                    <div class="col-lg-7 order-2 order-lg-1">
                        <div class="service-single__right-item">
                            <div class="item sub-bg mb-30">
                                <h5 class="title">Find plans for your device</h5>
                                <div class="contact__form">
                                    <form action="#">
                                        <div class="row">
                                            <div class="col-12">
                                                <label for="name">Enter name (As per any Govt. ID) *</label>
                                                <input class="bg-transparent bor" id="username" type="text" >
                                            </div>
                                            <div class="col-12">
                                                <label for="mobile">Mobile Number </label>
                                                <input class="bg-transparent bor" id="mobile" type="text" >
                                            </div>
                                            <div class="col-12">
                                                <label for="email">Email * </label>
                                                <input class="bg-transparent bor" id="email" type="text" >
                                            </div>
                                            
                                            <div class="col-12">
                                                <label for="email">Pincode</label>
                                                <input class="bg-transparent bor" id="pincode" type="number" >
                                            </div>
                                            
                                        </div>

                                        <input type="hidden" id="plan_id" value="<?=$plan_id ?>">
                                        <input type="hidden" id="plan_name" value="<?=$plans[0]->name ?>">
                                        <input type="hidden" id="plan_price" value="<?=$searchplan[0]->plan_price ?>">
                                        <input type="hidden" id="finalamount" value="<?=$finalamount ?>">

                                        <div class="btn-two">
                                            <span class="btn-circle">
                                            </span>
                                            <a href="javascript:void(0);" class="btn-one purchase-plan-btn">Continew to Payment  <i class="fa-regular fa-arrow-right-long"></i></a>
                                        </div>

                                    </form>
                                </div>
                            </div>                            

                        </div>
                        
                    </div>

                    <div class="col-lg-5 order-1 order-lg-2">
                        <div class="service-single__left-item">

                            <div class="section-header mb-20">
                                <h4 class="wow fadeInUp" data-wow-delay="200ms" data-wow-duration="1500ms"><?=$plans[0]->name ?></h4>
                            </div>                         
                            <ul>
                                <li class="mb-15"> <strong>Plan Price:- </strong> <?=currency_simble($searchplan[0]->plan_price) ?></li>
                                <li class="mb-15"> <strong>GST:- </strong> 18%</li>
                                <li class="mb-15"> <strong>Amount to be Paid:- </strong> <?=currency_simble(gstamount($searchplan[0]->plan_price)) ?></li>
                            </ul>                            
                           
                        </div>
                    </div>
                </div>
            </div>
        </section>

    </main>

    <?php include('footer.php'); ?>

<script>
    $(document).on("click", ".purchase-plan-btn",(function(e) {
      purchase_plan();
    }));

    function purchase_plan()
    {
        var username = $("#username").val();
        var mobile = $("#mobile").val();
        var email = $("#email").val();
        var pincode = $("#pincode").val();
        var plan_id = $("#plan_id").val();
        var plan_name = $("#plan_name").val();
        var plan_price = $("#plan_price").val();
        var gst = "18";
        var final_amt = $("#finalamount").val();

        if(username=='')
        {
            toaster("Enter Username", 'error');
            return false;
        }
        if(mobile=='')
        {
            toaster("Enter Mobile No.", 'error');
            return false;
        }
        if(email=='')
        {
            toaster("Enter Email No.", 'error');
            return false;
        }
        if(pincode=='')
        {
            toaster("Enter Pincode No.", 'error');
            return false;
        }
        

        
        var form = new FormData();
        form.append("username", username);
        form.append("mobile", mobile);
        form.append("email", email);
        form.append("pincode", pincode);
        form.append("plan_id", plan_id);
        form.append("plan_name", plan_name);
        form.append("plan_price", plan_price);
        form.append("gst", gst);
        form.append("final_amt", final_amt);

        var settings = {
          "url": "<?=base_url() ?>Checkout/plan_purchase",
          "method": "POST",
          "dataType": "json",
          "timeout": 0,
          "processData": false,
          "mimeType": "multipart/form-data",
          "contentType": false,
          "data": form
        };

        $.ajax(settings).done(function (response) {
          console.log(response);
          if(response.status==200)
          {
            window.location.href= response.url;
          }
          else
          {
            toaster(response.message, 'error');
          }
        });
    }

</script>
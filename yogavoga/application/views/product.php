<?php $this->load->view('header'); ?>


	<div class="page-content">
        <!-- inner page banner -->
        <div class="dez-bnr-inr" style="background-image:url(images/background/bg9.jpg);">
            <div class="container">
                <div class="dez-bnr-inr-entry">
                    <h1>Products</h1>
                </div>
            </div>
        </div>
       
        <!-- contact area -->
        <div class="content-area">
            <!-- Product -->
            <div class="container">
                <div class="row">
                	<?php
                	$this->db->order_by('id desc'); 
                	$profuct = $this->crud->selectDataByMultipleWhere('product',array('status'=>1,));
                	foreach($profuct as $data)
                		{ ?>

                    <div class="col-lg-3 col-sm-6 col-md-4 m-b30">
                        <div class="dez-box p-a20 border-1 bg-gray">
                            <div class="dez-thum-bx dez-img-overlay1 dez-img-effect zoom"> 
                            	<img src="<?php echo base_url(); ?>media/uploads/product/<?php echo $data->image; ?>" alt="">
                                
                            </div>
                            <div class="dez-info p-t20 text-center">
                                <h4 class="dez-title m-tb5 text-uppercase"><a href="#"><?php echo $data->name; ?></a></h4>

                                <h2 class="m-b0">₹ <?php echo $data->price; ?> 
                                	<br><del>₹ <?php echo $data->cut_price; ?></del>
                                </h2>
								<button type="button" class="mybutton btn btn-primary" onclick="showModal('<?php echo $data->name; ?>')"/>Enquiry Now</button>
                            </div>
                        </div>
                    </div>
                <?php } ?>


                </div>
            </div>
            <!-- Product END -->
        </div>
        <!-- contact area  END -->
    </div>
    <!-- Content END-->

<?php $this->load->view('footer'); ?>

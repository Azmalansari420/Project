<section class="about-style-two pt_120 pb_120">
            <div class="auto-container">
                <div class="row align-items-center">
                    <div class="col-lg-6 col-md-12 col-sm-12 content-column">
                        <div class="content_block_three">
                            <div class="content-box mr_110">
                                <div class="sec-title mb_20">
                                    <h6>Loan</h6>
                                    <h2><?=$page_title;?></h2>
                                </div>
                                <div class="text-box mb_40">
                                    <?=$page_description;?>
                                </div>
                                <div class="btn-box">
                                    <a href="<?=base_url('contact-us');?>" class="theme-btn btn-one">Discover More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12 col-sm-12 image-column">
                        <div class="image_block_two">
                            <div class="image-box">
                                <div class="image-shape">
                                    <div class="shape-3" style="background-image: url(<?=base_url();?>/public/assets/assets/images/shape/shape-11.png);"></div>
                                    <div class="shape-4" style="background-image: url(<?=base_url();?>/public/assets/assets/images/shape/shape-3.png);"></div>
                                </div>
                                <?=$page_description2;?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <?php
$tab=getdataorder('tbl_media',array('parent_page'=>$page_id,'page_type'=>'9'),'sort_order','asc');
?>
        <section class="service-style-two pt_10 pb_20">
            <div class="bg-layer" style="background-image: url(assets/images/background/service-bg-2.jpg);"></div>
            <div class="auto-container">
                
                <div class="tabs-box">
                    <div class="tab-btn-box p_relative mb_100">
                        <ul class="tab-btns tab-buttons">
                            <?php $i=0; if($tab) { foreach($tab as $values) {  ?>
							<li class="tab-btn <?php if($i==0){ echo "active-btn";}?>" data-tab="#tab-<?=$i;?>"><span><?=$values->title;?></span></li>
							<?php $i++; } } ?>
                            <!--<li class="tab-btn" data-tab="#tab-2"><span>Features & Benefits</span></li>
                            <li class="tab-btn" data-tab="#tab-3"><span>Fees & Charges</span></li>
                            <li class="tab-btn" data-tab="#tab-4"><span>Eligibility</span></li>
                            <li class="tab-btn" data-tab="#tab-5"><span>Document Required</span></li>
                            <li class="tab-btn" data-tab="#tab-6"><span>How to Apply</span></li>-->
                        </ul>
                    </div>
                    <div class="tabs-content">
                         <?php $i=0; if($tab) { foreach($tab as $values) {  
						 $page_description233=str_replace(array_in(),array_out(),$values->description);
						 
						 ?>
						<div class="tab <?php if($i==0){ echo "active-tab";}?>" id="tab-<?=$i;?>">
                            <div class="row clearfix">
                                <div class="col-lg-12 col-md-12 col-sm-12 content-column">
                                    <div class="content_block_four">
                                        <div class="content-box mr_110">
                                            <?=$page_description233;?>
                                            
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php $i++; } } ?>
                    </div>
                </div>
            </div>
        </section>

           <?php
$faq=getdataorder('tbl_media',array('parent_page'=>$page_id,'page_type'=>'11'),'sort_order','asc');
if($faq) { 
?>
        <section class="faq-section pt_120 pb_100">
            <div class="auto-container">
                <div class="sec-title centred mb_70">
                    <h2>Frequently Asked Questions</h2>
                </div>
                <div class="row clearfix">
                    <div class="col-lg-12 col-md-12 col-sm-12 accordion-column">
                        <ul class="accordion-box">
                            <?php $i=0; if($faq) { foreach($faq as $values) {  
						 $page_description233=str_replace(array_in(),array_out(),$values->description);
						 
						 ?>
							<li class="accordion block <?php if($i==0){ echo "active-block";}?>">
                                <div class="acc-btn <?php if($i==0){ echo "active";}?>">
                                    <div class="icon-box"></div>
                                    <h4><?=$values->title;?></h4>
                                </div>
                                <div class="acc-content <?php if($i==0){ echo "current";}?>">
                                    <div class="text">
                                        <p><?=$page_description233;?></p>
                                    </div>
                                </div>
                            </li>
							 <?php $i++; } } ?>
                           
                           
                        </ul>
                    </div>
                    
                </div>
            </div>
        </section>
<?php } ?>
<section class="career-section  pb_20">
            <div class="bg-layer" style="background-image: url(assets/images/background/career-bg.jpg);"></div>
            <div class="auto-container">
                <div class="inner-container">
                    <div class="career-block-one">
                        <div class="inner-box">
                            <div class="author-box">
                                <figure class="thumb-box"><img src="<?=$page_file;?>" alt=""></figure>
                                <div class="text-box">
                                    <h3><?=$page_title;?></h3>
                                    <span class="designation">Card Type : VISA</span>
                                </div>
                            </div>
                            
                            <div class="btn-box">
                                <a href="<?=base_url('contact-us');?>">Apply Now</a>
                            </div>
                        </div>

                        <p>
                        	<?=$page_description;?>
                        </p>
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
$sub_products33=getdataorder('tbl_pages',array('status','parent_page'=>$parent_page),'sort_order','asc');
if($sub_products33) {  
?>
        <section class="career-section pt_50 pb_90">
            <div class="bg-layer" style="background-image: url(<?=base_url();?>/public/assets/assets/images/background/career-bg.jpg);"></div>
            <div class="auto-container">
                <div class="sec-title centred mb_70">
                    <h2>Similar Cards</h2>
                </div>
                <div class="inner-container">
                    <?php if($sub_products33) { foreach($sub_products33 as $values) { 
					if($values->id!=$page_id) {
					?>
					<div class="career-block-one">
                        <div class="inner-box">
                            <div class="author-box">
                                <figure class="thumb-box"><img src="<?=base_url('public/uploads/'.$values->file.'');?>" alt=""></figure>
                                <div class="text-box">
                                    <h3><?=$values->title;?></h3>
                                    <span class="designation">Card Type : Rupay </span>
                                </div>
                            </div>
                            <div class="btn-box">
                                <a href="<?=base_url('contact-us');?>">Apply Now</a>
                            </div>
                        </div>
                    </div>
                    <?php } } } ?>
                   
                </div>
            </div>
        </section>
<?php }  ?>
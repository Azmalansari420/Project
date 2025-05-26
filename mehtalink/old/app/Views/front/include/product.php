

            <div class="contentWrapper">
               
                <section class="section section_306 second" style="" id="txtblk_429">
                    <div class="container">
                        <div class="row no-gutters">
                            <div class="col-12">
                                <div class="slider">
                                    <div class="slide">
                                        <div class="container p-0">
                                            <div class="row">
                                                <div class="col-12">
                                                    <h1 class="main-headline">
                                                        <?=$user->title;?>
                                                    </h1>
                                                    <div class="text">
                                                        <?=$page_description;?>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <section class="section section_311" id="txtblk_596">
                    <div class="container">
                        <div class="row">
                            <div class="col-12">
                                <h2 class="main-headline text-center">
                                   <?=$user->title;?>
                                </h2>
                            </div>
                            <div class="col-12 col-lg-8 offset-lg-2 mt-3"><div class="text"></div></div>
                        </div>
                        <div class="row gallery">
                            <?php
							$sub_products66=getdataorder('tbl_pages',array('parent_page'=>$page_id),'sort_order','asc');
							?>
							<?php $i=1; if($sub_products66) { foreach($sub_products66 as $values) { 
							$new_description1= str_replace(array_in(),array_out(),$values->description); 
						$new_attachment_link= str_replace('#base_url#',base_url(),$values->attachment_link);
				  
				 if($new_attachment_link!=''){ $url= $new_attachment_link;} 
				  else if($values->udf1!='') { $url= base_url($values->slug); }
				  else if($values->page_type==0){ $url= base_link().'/page/'.$values->slug;} 
							?>
							<div class="item col-12 col-lg-4">
                                <a class="<?=$url;?>">
                                    <div class="media">
                                        <!-- <i class="mdi mdi-magnify"></i> -->
                                        <!-- <div class="cover"></div> -->
                                        <span class="abstand"></span>
                                        <div class="mediaContainer">
                                            <img  src="<?=base_url('public/uploads/'.$values->file.'');?>" />
                                        </div>
                                    </div>
                                    <div class="bottom">
                                        <div class="main-subline">
                                            <?=$values->title;?>
                                        </div>
                                    </div>
                                </a>
                            </div>
                           <?php } } ?>

                        </div>
                    </div>
                </section>

                
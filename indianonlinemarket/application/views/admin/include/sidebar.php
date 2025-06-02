<?php
$sitesetting = $this->crud->fetchdatabyid('1','site_setting');
?>

      <div id="sidebar" class="app-sidebar">
            <div class="app-sidebar-content" data-scrollbar="true" data-height="100%">
               <div class="menu">
                  <div class="menu-profile">
                     <a href="<?php echo base_url(); ?>" target="_blank" class="menu-profile-link">
                        <div class="menu-profile-cover with-shadow"></div>
                        <div class="menu-profile-image">
                           <img src="<?php echo base_url(); ?>media/uploads/site_setting/<?php echo $sitesetting[0]->logo; ?>" alt="" />
                        </div>
                        <!-- <div class="menu-profile-info">
                           <div class="d-flex align-items-center">
                              <div class="flex-grow-1">
                                <?php echo website_name; ?>
                              </div>
                           </div>
                           <small>Frontend developer</small>
                        </div> -->
                     </a>
                  </div>

<?php
if($this->session->userdata('role')==1)
   { ?>
                 
                  <div class="menu-header">Admin Panels</div>

                  <div class="menu-item ">
                     <a href="<?php echo base_url('admin/dashboard');?>" class="menu-link">
                        <div class="menu-icon">
                           <i class="fa fa-dashboard"></i>
                        </div>
                        <div class="menu-text">Dashboard</div>
                     </a>
                  </div>


                  <div class="menu-item">
                     <a href="<?php echo base_url('admin_con/site_setting/edit/1');?>" class="menu-link">
                        <div class="menu-icon">
                           <i class="fa fa-cog"></i>
                        </div>
                        <div class="menu-text">Site Setting</div>
                     </a>
                  </div>

                  <div class="menu-item has-sub ">
                     <a href="javascript:;" class="menu-link">
                        <div class="menu-icon">
                           <i class="fa fa-first-order"></i>
                        </div>
                        <div class="menu-text">Orders <span class="menu-label"><?php echo $this->db->count_all('finalorder'); ?></span></div>
                        <div class="menu-caret"></div>
                     </a>
                     <div class="menu-submenu">
                        <div class="menu-item">
                           <a href="<?php echo base_url('admin_con/finalorder/listing?status=0');?>" class="menu-link">
                              <div class="menu-text">Not Paid
                               <span class="menu-label">
                                 <?php $this->db->where('status',0);
                                 $query = $this->db->get('finalorder');
                                 echo $query->num_rows(); ?></span>
                              </div>
                           </a>
                        </div>
                        <div class="menu-item">
                           <a href="<?php echo base_url('admin_con/finalorder/listing?status=1');?>" class="menu-link">
                              <div class="menu-text">Confirm Order
                               <span class="menu-label">
                                 <?php $this->db->where('status',1);
                                 $query = $this->db->get('finalorder');
                                 echo $query->num_rows(); ?></span>
                              </div>
                           </a>
                        </div>
                        <div class="menu-item">
                           <a href="<?php echo base_url('admin_con/finalorder/listing?status=2');?>" class="menu-link">
                              <div class="menu-text">Warehouse <span
                               class="menu-label"><?php
                                 $this->db->where('status',2);
                                 $query = $this->db->get('finalorder');
                                 echo $query->num_rows(); ?></span>
                              </div>
                           </a>
                        </div>
                        <div class="menu-item">
                           <a href="<?php echo base_url('admin_con/finalorder/listing?status=3');?>" class="menu-link">
                              <div class="menu-text">Shipped Order
                               <span class="menu-label">
                                 <?php $this->db->where('status',3);
                                 $query = $this->db->get('finalorder');
                                 echo $query->num_rows(); ?></span>
                              </div>
                           </a>
                        </div>
                        <div class="menu-item">
                           <a href="<?php echo base_url('admin_con/finalorder/listing?status=4');?>" class="menu-link">
                              <div class="menu-text">Deliverd <span
                               class="menu-label"><?php
                                 $this->db->where('status',4);
                                 $query = $this->db->get('finalorder');
                                 echo $query->num_rows(); ?></span>
                              </div>
                           </a>
                        </div>
                        <div class="menu-item">
                           <a href="<?php echo base_url('admin_con/finalorder/listing?status=6');?>" class="menu-link">
                              <div class="menu-text">Order Exchange Request<span
                               class="menu-label"><?php $this
                                 ->db->where('status',6);
                                 $query = $this->db->get('finalorder');
                                 echo $query->num_rows(); ?></span>
                              </div>
                           </a>
                        </div>
                        <div class="menu-item">
                           <a href="<?php echo base_url('admin_con/finalorder/listing?status=7');?>" class="menu-link">
                              <div class="menu-text">Accept Order Exchange Request <span
                               class="menu-label"><?php $this
                                 ->db->where('status',7);
                                 $query = $this->db->get('finalorder');
                                 echo $query->num_rows(); ?></span>
                              </div>
                           </a>
                        </div>
                        <div class="menu-item">
                           <a href="<?php echo base_url('admin_con/finalorder/listing?status=8');?>" class="menu-link">
                              <div class="menu-text">Decline Order Exchange Request <span
                               class="menu-label"><?php $this
                                 ->db->where('status',8);
                                 $query = $this->db->get('finalorder');
                                 echo $query->num_rows(); ?></span>
                              </div>
                           </a>
                        </div>
                     </div>
                  </div>

                  <div class="menu-item">
                     <a href="<?php echo base_url('admin_con/vendor_list/listing');?>" class="menu-link">
                        <div class="menu-icon">
                           <i class="fa fa-users"></i>
                        </div>
                        <div class="menu-text">All Vendors <span class="menu-label"><?php 
                        $this->db->where('role',2);
                          $query = $this->db->get('tbl_admin');
                          echo $query->num_rows(); ?></span></div>
                     </a>
                  </div>
                  <div class="menu-item">
                     <a href="<?php echo base_url('admin_con/categories/listing');?>" class="menu-link">
                        <div class="menu-icon">
                           <i class="fa fa-calendar-days"></i>
                        </div>
                        <div class="menu-text">Categories <span class="menu-label"><?php echo $this->db->count_all('categories'); ?></span></div>
                     </a>
                  </div>
                  <div class="menu-item">
                     <a href="<?php echo base_url('admin_con/product/listing');?>" class="menu-link">
                        <div class="menu-icon">
                           <i class="fa fa-cart-shopping"></i>
                        </div>
                        <div class="menu-text">Product <span class="menu-label"><?php echo $this->db->count_all('product'); ?></span></div>
                     </a>
                  </div>

                   <div class="menu-item">
                     <a href="<?php echo base_url('admin_con/product_review/listing');?>" class="menu-link">
                        <div class="menu-icon">
                           <i class="fa fa-users"></i>
                        </div>
                        <div class="menu-text">Product Review <span class="menu-label"><?php echo $this->db->count_all('product_review'); ?></span></div>
                     </a>
                  </div>

                  <div class="menu-item">
                     <a href="<?php echo base_url('admin_con/color/listing');?>" class="menu-link">
                        <div class="menu-icon">
                           <i class="fa fa-camera-retro"></i>
                        </div>
                        <div class="menu-text">Color <span class="menu-label"><?php echo $this->db->count_all('color'); ?></span></div>
                     </a>
                  </div>
                  <div class="menu-item">
                     <a href="<?php echo base_url('admin_con/size/listing');?>" class="menu-link">
                        <div class="menu-icon">
                           <i class="fa fa-signal"></i>
                        </div>
                        <div class="menu-text">Size <span class="menu-label"><?php echo $this->db->count_all('size'); ?></span></div>
                     </a>
                  </div>
                  <div class="menu-item">
                     <a href="<?php echo base_url('admin_con/admin_vendor_ticket/listing');?>" class="menu-link">
                        <div class="menu-icon">
                           <i class="fa fa-cart-shopping"></i>
                        </div>
                        <div class="menu-text">Vendor Ticket <span class="menu-label"><?php echo $this->db->count_all('vendor_ticket'); ?></span></div>
                     </a>
                  </div>
                  <div class="menu-item">
                     <a href="<?php echo base_url('admin_con/slider/listing');?>" class="menu-link">
                        <div class="menu-icon">
                           <i class="fa fa-signal"></i>
                        </div>
                        <div class="menu-text">Slider <span class="menu-label"><?php echo $this->db->count_all('slider'); ?></span></div>
                     </a>
                  </div>
                  <div class="menu-item">
                     <a href="<?php echo base_url('admin_con/offer_banners/listing');?>" class="menu-link">
                        <div class="menu-icon">
                           <i class="fa fa-signal"></i>
                        </div>
                        <div class="menu-text">Offer Banners <span class="menu-label"><?php echo $this->db->count_all('offer_banners'); ?></span></div>
                     </a>
                  </div>
                  <div class="menu-item">
                     <a href="<?php echo base_url('admin_con/offer_single_banner/listing');?>" class="menu-link">
                        <div class="menu-icon">
                           <i class="fa fa-signal"></i>
                        </div>
                        <div class="menu-text">Single Offer Banners <span class="menu-label"><?php echo $this->db->count_all('offer_single_banner'); ?></span></div>
                     </a>
                  </div>

                  <div class="menu-item">
                     <a href="<?php echo base_url('admin_con/instagram/listing');?>" class="menu-link">
                        <div class="menu-icon">
                           <i class="fa fa-signal"></i>
                        </div>
                        <div class="menu-text">Instagram Photo <span class="menu-label"><?php echo $this->db->count_all('instagram'); ?></span></div>
                     </a>
                  </div>

                  <div class="menu-item">
                     <a href="<?php echo base_url('admin_con/videos/listing');?>" class="menu-link">
                        <div class="menu-icon">
                           <i class="fa fa-signal"></i>
                        </div>
                        <div class="menu-text">Videos <span class="menu-label"><?php echo $this->db->count_all('videos'); ?></span></div>
                     </a>
                  </div>
                  <div class="menu-item">
                     <a href="<?php echo base_url('admin_con/marquee/listing');?>" class="menu-link">
                        <div class="menu-icon">
                           <i class="fa fa-signal"></i>
                        </div>
                        <div class="menu-text">Headings <span class="menu-label"><?php echo $this->db->count_all('marquee'); ?></span></div>
                     </a>
                  </div>


                  <div class="menu-item">
                     <a href="<?php echo base_url('admin_con/contact/listing');?>" class="menu-link">
                        <div class="menu-icon">
                           <i class="fa fa-server"></i>
                        </div>
                        <div class="menu-text">Contact Enquiry <span class="menu-label"><?php echo $this->db->count_all('contact'); ?></span></div>
                     </a>
                  </div>

                   

<?php } ?>

<?php
if($this->session->userdata('role')==2)
   { ?>
                  <div class="menu-header">Vendor Panels</div>

                  <div class="menu-item ">
                     <a href="<?php echo base_url('admin/dashboard');?>" class="menu-link">
                        <div class="menu-icon">
                           <i class="fa fa-dashboard"></i>
                        </div>
                        <div class="menu-text">Dashboard</div>
                     </a>
                  </div>

                  <div class="menu-item">
                     <a href="<?php echo base_url('admin_con/vendor_profile/edit'); ?>" class="menu-link">
                        <div class="menu-icon">
                           <i class="fa fa-user"></i>
                        </div>
                        <div class="menu-text">Update Profile</div>
                     </a>
                  </div>

                  <div class="menu-item">
                     <a href="<?php echo base_url('admin_con/vendor_product/listing');?>" class="menu-link">
                        <div class="menu-icon">
                           <i class="fa fa-cart-shopping"></i>
                        </div>
                        <div class="menu-text">Products <span class="menu-label"><?php 
                        $this->db->where('vendor_id',$this->session->userdata('id'));
                          $query = $this->db->get('product');
                          echo $query->num_rows(); ?></span></div>
                     </a>
                  </div>

                  <div class="menu-item">
                     <a href="<?php echo base_url('admin_con/vendor_ticket/listing');?>" class="menu-link">
                        <div class="menu-icon">
                           <i class="fa fa-contact-book"></i>
                        </div>
                        <div class="menu-text">Raise a Ticket <span class="menu-label"><?php $this->db->where('vendor_id',$this->session->userdata('id'));
                          $query = $this->db->get('vendor_ticket');
                          echo $query->num_rows(); ?></span></div>
                     </a>
                  </div>

                  <div class="menu-item">
                     <a href="<?php echo base_url('admin_con/vendor_order/listing');?>" class="menu-link">
                        <div class="menu-icon">
                           <i class="fa fa-server"></i>
                        </div>
                        <div class="menu-text">Orders</div>
                     </a>
                  </div>

<?php } ?>


                <!--   <div class="menu-item">
                     <a href="<?php echo base_url('admin_con/slider/listing');?>" class="menu-link">
                        <div class="menu-icon">
                           <i class="fa fa-server"></i>
                        </div>
                        <div class="menu-text">Slider</div>
                     </a>
                  </div>

                  <div class="menu-item">
                     <a href="<?php echo base_url('admin_con/contact/listing');?>" class="menu-link">
                        <div class="menu-icon">
                           <i class="fa fa-server"></i>
                        </div>
                        <div class="menu-text">Contact Enquiry</div>
                     </a>
                  </div> -->


                



                























                  <!-- ----single dropdown--------- -->
                  <!-- <div class="menu-item has-sub ">
                     <a href="javascript:;" class="menu-link">
                        <div class="menu-icon">
                           <i class="fa fa-server"></i>
                        </div>
                        <div class="menu-text">Slider</div>
                        <div class="menu-caret"></div>
                     </a>
                     <div class="menu-submenu">
                        <div class="menu-item">
                           <a href="<?php echo base_url('admin_con/slider/add');?>" class="menu-link">
                              <div class="menu-text">Add Slider</div>
                           </a>
                        </div>
                        <div class="menu-item">
                           <a href="<?php echo base_url('admin_con/slider/listing');?>" class="menu-link">
                              <div class="menu-text">All Slider</div>
                           </a>
                        </div>
                     </div>
                  </div> -->
                  <!-- --------with number show------- -->
                  <!-- <div class="menu-item">
                     <a href="widget.html" class="menu-link">
                        <div class="menu-icon">
                           <i class="fab fa-simplybuilt"></i>
                        </div>
                        <div class="menu-text">Widgets <span class="menu-label">NEW</span></div>
                     </a>
                  </div> -->

                  <!-- ------sub sub menu lavel---- -->
                  <!-- <div class="menu-item has-sub">
                     <a href="javascript:;" class="menu-link">
                        <div class="menu-icon">
                           <i class="fa fa-align-left"></i>
                        </div>
                        <div class="menu-text">Menu Level</div>
                        <div class="menu-caret"></div>
                     </a>
                     <div class="menu-submenu">
                        <div class="menu-item has-sub">
                           <a href="javascript:;" class="menu-link">
                              <div class="menu-text">Menu 1.1</div>
                              <div class="menu-caret"></div>
                           </a>
                           <div class="menu-submenu">
                              <div class="menu-item has-sub">
                                 <a href="javascript:;" class="menu-link">
                                    <div class="menu-text">Menu 2.1</div>
                                    <div class="menu-caret"></div>
                                 </a>
                                 <div class="menu-submenu">
                                    <div class="menu-item">
                                       <a href="javascript:;" class="menu-link">
                                          <div class="menu-text">Menu 3.1</div>
                                       </a>
                                    </div>
                                    <div class="menu-item">
                                       <a href="javascript:;" class="menu-link">
                                          <div class="menu-text">Menu 3.2</div>
                                       </a>
                                    </div>
                                 </div>
                              </div>
                              <div class="menu-item">
                                 <a href="javascript:;" class="menu-link">
                                    <div class="menu-text">Menu 2.2</div>
                                 </a>
                              </div>
                              <div class="menu-item">
                                 <a href="javascript:;" class="menu-link">
                                    <div class="menu-text">Menu 2.3</div>
                                 </a>
                              </div>
                           </div>
                        </div>
                        <div class="menu-item">
                           <a href="javascript:;" class="menu-link">
                              <div class="menu-text">Menu 1.2</div>
                           </a>
                        </div>
                        <div class="menu-item">
                           <a href="javascript:;" class="menu-link">
                              <div class="menu-text">Menu 1.3</div>
                           </a>
                        </div>
                     </div>
                  </div> -->




                  <div class="menu-item d-flex">
                     <a href="javascript:;" class="app-sidebar-minify-btn ms-auto d-flex align-items-center text-decoration-none" data-toggle="app-sidebar-minify"><i class="fa fa-angle-double-left"></i></a>
                  </div>
               </div>
            </div>
         </div>


         <div class="app-sidebar-bg"></div>
         <!-- -------Azmal Ansari----------- -->
         <div class="app-sidebar-mobile-backdrop"><a href="#" data-dismiss="app-sidebar-mobile" class="stretched-link"></a></div>
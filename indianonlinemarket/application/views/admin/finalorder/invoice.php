<?php 
$sitesetting = $this->crud->fetchdatabyid('1','site_setting');
?>
<!DOCTYPE html>
<html lang="en">
   <head>
      <title>Print Invoice</title>
      <?php $this->load->view('admin/include/allcss') ?>
      <style>
         @media print {
          body * {
            visibility: hidden;
          }
          #section-to-print, #section-to-print * {
            visibility: visible;
          }
          #section-to-print {
            position: absolute;
            left: 10px;
            /*right: -400px;*/
            top: 0;
            width: 100%;
          }
        }
        button.btn.btn-dark {
            padding: 10px;
            position: relative;
            top: 0px;
        }
    </style>

   </head>
   <body>
       <?php echo loder; ?> 
      <div id="app" class="app app-header-fixed app-sidebar-fixed ">


          <?php $this->load->view('admin/include/header') ?>
          <?php $this->load->view('admin/include/sidebar') ?>


         <div id="content" class="app-content">
            <ol class="breadcrumb hidden-print float-xl-end">
               <li class="breadcrumb-item"><a href="javascript:;">Home</a></li>
               <li class="breadcrumb-item active">Invoice</li>
            </ol>
            <h1 class="page-header hidden-print">Invoice </h1>


            <div class="invoice" id="section-to-print">
               <div class="invoice-company">
                  <span class="float-end hidden-print">
                  <a href="javascript:;" onclick="window.print()" class="btn btn-sm btn-white mb-10px" data-cf-modified-2f7f48af56a934115cee098a-=""><i class="fa fa-print t-plus-1 fa-fw fa-lg"></i> Print</a>
                  </span>
                  <?php echo website_name; ?>
               </div>
               <div class="invoice-header">
                  <div class="invoice-from">
                     <small>from</small>
                     <address class="mt-5px mb-5px">
                        <strong class="text-dark"><?php echo website_name; ?></strong><br />
                        <?php echo $sitesetting[0]->address; ?><br />
                        Phone: <?php echo $sitesetting[0]->mobile; ?><br />
                        Email: <?php echo $sitesetting[0]->email; ?>
                     </address>
                  </div>
                  <div class="invoice-to">
                     <small>to</small>
                     <address class="mt-5px mb-5px">
                        <strong class="text-dark"><?php echo $EDITDATA[0]->firstname; ?> <?php echo $EDITDATA[0]->lastname; ?> </strong><br />
                        <?php echo $EDITDATA[0]->companyname; ?> <br />
                        <?php echo $EDITDATA[0]->street_address; ?> <br />
                        <?php echo $EDITDATA[0]->town_city; ?>, <?php echo $EDITDATA[0]->state; ?><br />
                        <?php echo $EDITDATA[0]->zip; ?>, <?php echo $EDITDATA[0]->country; ?> <br/>
                        Phone: <?php echo $EDITDATA[0]->mobile; ?><br />
                        Email: <?php echo $EDITDATA[0]->email; ?>
                     </address>
                  </div>
                  <div class="invoice-date">
                     <small>Invoice</small>
                     <div class="date text-dark mt-5px"><?php echo date('d M Y', strtotime($EDITDATA[0]->addeddate)); ?></div>
                     <div class="invoice-detail">
                        <?php echo $EDITDATA[0]->order_id; ?>
                     </div>
                  </div>
               </div>

               <div class="invoice-content">
                  <div class="table-responsive">
                     <table class="table table-invoice">
                        <thead>
                           <tr>
                              <th>No</th>
                              <th>Product Image</th>
                              <th>Product Description</th>
                              <th>Price(₹)</th>
                              <th>Qty</th>
                              <th>Total</th>
                           </tr>
                        </thead>
                        <tbody>
                            <?php $i=0;
                             $order_id = $EDITDATA[0]->order_id;
                             $ALLDATA = $this->crud->selectDataByMultipleWhere('orders',array('order_id'=>$order_id,));
                             foreach($ALLDATA as $order)
                                              { 
                                 $i++; 
                                 $coupon = $this->crud->selectDataByMultipleWhere('order_coupon',array('user_id'=>$order->user_id,'order_id'=>$order_id));
                                 $product = $this->crud->selectDataByMultipleWhere('product',array('id'=>$order->p_id,));

                                 $this->db->group_by('p_id');
                                 $allimage = $this->crud->selectDataByMultipleWhere('all_images',array('p_id'=>$order->p_id,'size_id'=>$order->size_id,'color_id'=>$order->color_id,));
                                 if(!empty($allimage))
                                 $get_image = json_decode($allimage[0]->image);
                                 if(!empty($get_image))
                                 $showimage = $get_image[0];
                                 // print_r($allimage);

                                 $color_id = 0;
                                 $this->db->group_by('color_id');
                                 $this->db->limit(1);
                                 $this->db->select("color_id");
                                 $color_hh = $this->db->get_where('all_images',array('p_id'=>$order->p_id,'color_id'=>$order->color_id))->result_object();
                                 if(!empty($color_hh))
                                 {
                                     foreach ($color_hh as $key => $value3) 
                                     { 
                                         $color_id = $value3->color_id;
                                         break;
                                     } 
                                 }
                                 $size_id = 0;
                                 $this->db->group_by('size_id');
                                 $this->db->limit(1);
                                 $this->db->select("size_id");
                                 $color_arr = $this->db->get_where('all_images',array('p_id'=>$order->p_id,'size_id'=>$order->size_id,))->result_object();
                                 if(!empty($color_arr))
                                 {
                                     foreach ($color_arr as $key => $value4) 
                                     { 
                                         $size_id = $value4->size_id;
                                         break;
                                     } 
                                 }
                                             
                             ?>
                           <tr>
                              <td><?php echo $i; ?></td>
                              <td >
                                  <?php
                                  if(!empty($showimage))
                                  { ?>
                                  
                                 <img class="avatar is-squared" style="height: 75px;" alt="user-icon" src="<?php echo base_url(); ?>media/uploads/product/<?php echo $showimage; ?>">
                                <?php } ?>
                              </td>
                              <td>
                                 <strong>Name:- </strong> <?php echo $product[0]->name; ?><br>
                                 <strong>Color:- </strong> <?php if(!empty($color_id)) echo colorname($color_id); ?> <br>
                                 <strong>Size:- </strong> <?php if(!empty($size_id)) echo sizename($size_id); ?> 
                              </td>
                              <td><?php if(!empty($allimage[0]->price)) echo number_format($allimage[0]->price,2); ?></td>
                              <td><?php echo $order->quantity; ?></td>
                              <td>₹ <?php if(!empty($allimage[0]->price)) echo number_format($order->quantity*$allimage[0]->price,2); ?></td>
                           </tr>
                           
                         <?php } ?>
                        </tbody>
                     </table>
                  </div>
                  <div class="invoice-price">
                     
                     <div class="invoice-price-left">
                        <div class="invoice-price-row">
                           <div class="sub-price">
                              <small>SUBTOTAL</small>
                              <span class="text-dark">₹ <?php echo number_format($EDITDATA[0]->sub_total,2); ?></span>
                           </div>
                           <div class="sub-price">
                              <i class="fa fa-plus text-muted"></i>
                           </div>

                           <div class="sub-price">
                              <small>Shipping Charge</small>
                              <span class="text-dark">+₹ <?php echo number_format($EDITDATA[0]->shipping_charge,2); ?></span>
                           </div>

                             <?php
                             if(!empty($coupon))
                                 {
                                     $couponamout = $EDITDATA[0]->finalprice-$EDITDATA[0]->after_discount_final_price;
                                     // print_r($couponamout);
                                  ?>
                           <div class="sub-price">
                              <i class="fa fa-minus text-muted"></i>
                           </div>

                           <div class="sub-price">
                              <small>Apply Coupon</small>
                              <span class="text-dark">-₹ <?php echo number_format($couponamout,2); ?></span>
                           </div>

                             <?php } ?>

                        </div>
                     </div>


                     <div class="invoice-price-right">
                        <small>TOTAL</small> <span class="fw-bold">₹ <?php echo number_format($EDITDATA[0]->after_discount_final_price,2); ?></span>
                     </div>
                  </div>
               </div>
               <div class="invoice-note">
                  * Make all cheques payable to <?php echo website_name ?><br />
                  * Payment is due within 30 days<br />
                  <!-- * If you have any questions concerning this invoice, contact [Name, Phone Number, Email] -->
               </div>
               <div class="invoice-footer">
                  <p class="text-center mb-5px fw-bold">
                     THANK YOU FOR YOUR SHOPPING
                  </p>
                  <p class="text-center">
                     <!-- <span class="me-10px"><i class="fa fa-fw fa-lg fa-globe"></i> <?php echo $sitesetting[0]->email; ?></span> -->
                     <span class="me-10px">
                        <i class="fa fa-fw fa-lg fa-phone-volume"></i> 
                        <a href="tel:<?php echo $sitesetting[0]->mobile; ?>">
                           T:<?php echo $sitesetting[0]->mobile; ?>
                        </a>
                     </span>

                     <span class="me-10px">
                        <i class="fa fa-fw fa-lg fa-envelope"></i> 
                        <a href="mailto:<?php echo $sitesetting[0]->email; ?>">
                           <?php echo $sitesetting[0]->email; ?>
                        </a>
                     </span>
                  </p>
               </div>
            </div>
         </div>
       
      </div>



   <?php $this->load->view('admin/include/footer') ?>
<script>
  $('#wysihtml5').wysihtml5();
</script>
   </body>
</html>
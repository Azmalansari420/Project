<?php 
$sitesetting = $this->crud->fetchdatabyid('1','site_setting');

include("header.php"); ?>


<style>
   .contact-form form .form-group .form-control {
    border: 1px solid!important;
}
</style>
<div class="search-overlay">
   <div class="d-table">
      <div class="d-table-cell">
         <div class="search-overlay-layer"></div>
         <div class="search-overlay-layer"></div>
         <div class="search-overlay-layer"></div>
         <div class="search-overlay-close">
            <span class="search-overlay-close-line"></span>
            <span class="search-overlay-close-line"></span>
         </div>
         <div class="search-overlay-form">
            <form>
               <input type="text" class="input-search" placeholder="Search here...">
               <button type="submit"><i class="bx bx-search"></i></button>
            </form>
         </div>
      </div>
   </div>
</div>
<div class="page-banner bg-1">
   <div class="d-table">
      <div class="d-table-cell">
         <div class="container">
            <div class="page-content">
               <h2>Contact With Us</h2>
               <ul>
                  <li><a href="">Home</a></li>
                  <li>Contact</li>
               </ul>
            </div>
         </div>
      </div>
   </div>
</div>
<style>
   a.box-size {
    background: #9d191d;
    color: white;
    padding: 8px 5px;
        border-radius: 7px;
    /* margin-bottom: 14px; */
}
</style>

<div class="pt-100 pb-70">
   <div class="container">
      <div class="row">
         <?php
         $country = $this->crud->selectDataByMultipleWhere('country',array('status'=>1,'type'=>2));
         foreach($country as $data)
            { ?>
         <div class="col-lg-3 col-md-6" style="margin-bottom: 26px;">
            <a href="<?=base_url('country-details/'.$data->slug) ?>" class="box-size"><?=$data->name ?></a>
         </div>
      <?php } ?>




      </div>
   </div>
</div>

<?php include("footer.php"); ?>
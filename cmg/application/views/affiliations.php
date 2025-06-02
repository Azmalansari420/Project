<?php include 'header.php';?>
<style>
	.list-imgs li {
    width: auto;
    padding: 5px;
}
ul.list-imgs>li>img {
    width: 160px;
}
</style>
    
    <main class="main">
      <section class="section">
        <div class="container">
          <div class="box-pageheader-1 text-center" style="background: url(https://47billion.com/wp-content/uploads/2020/12/Logistic-banner.png) no-repeat top center;padding: 179px 0px;"><span class="btn btn-tag wow animate__animated animate__fadeIn" style="background: #fec20100;"><!-- Who We Are --></span>
            <h2 class="color-brand-1 mt-15 mb-10 wow animate__animated animate__fadeIn"><!-- About Us --></h2>
          </div>
        </div>
      </section>
      <!-- <section class="section">
        <div class="container">
          <div class="box-pageheader-1 text-center"><span class="btn btn-tag wow animate__animated animate__fadeIn"></span>
            <h2 class="color-brand-1 mt-15 mb-10 wow animate__animated animate__fadeIn">Affiliations</h2>
          </div>
        </div>
      </section> -->

      <section class="section mt-100 mb-50">
        <div class="container">
          <div class="row align-items-center">
            <div class="col-lg-12 mb-30">

              <!-- <h2 class="mb-10 color-brand-1">Affiliations</h2> -->
              <div class="galleries-footer"> 
                <ul class="list-imgs">
                <?php
                $affi = $this->crud->selectDataByMultipleWhere('affiliations',array('status'=>1,));
                foreach($affi as $data)
                { ?> 
                  <li> <img src="<?=base_url() ?>media/uploads/affiliations/<?=$data->image ?>" alt="transp"></li>
                 <?php } ?>
                </ul>
              
            </div>
     
          </div>
        </div>
      </section>
    
      <div class="mt-50"></div>
      
    </main>
    
    
<?php include 'footer.php';?>
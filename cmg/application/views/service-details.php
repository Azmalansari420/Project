<?php include('header.php'); ?>

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
            <h2 class="color-brand-1 mt-15 mb-10 wow animate__animated animate__fadeIn"><?=$EDITDATA[0]->name ?></h2>
          </div>
        </div>
      </section> -->
     
      <section class="section mt-50">
        <div class="container">
          <div class="row">

            <div class="col-md-6">
              <div class="content-detail">
                <p class="wow animate__animated animate__fadeIn"><img src="<?=base_url() ?>media/uploads/services/<?=$EDITDATA[0]->image ?>" alt="transp"></p>               
              </div>
            </div>

            <div class="col-md-6">
                <h3 class="color-brand-2 wow animate__animated animate__fadeIn"><?=$EDITDATA[0]->name ?></h3>
                <?=$EDITDATA[0]->content ?>

                <a href="<?=base_url() ?>contact" class="mt-15 btn btn-brand-1-big">Enquiry Now</a>
            </div>
                
          </div>
        </div>
      </section>
      
      <div class="line-border"></div>
     
    </main>
  <?php include('footer.php'); ?>

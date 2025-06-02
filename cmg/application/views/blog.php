<?php include('header.php'); ?>

    <main class="main">
      <section class="section">
        <div class="container">
          <div class="box-pageheader-1 text-center" style="background: url(https://47billion.com/wp-content/uploads/2020/12/Logistic-banner.png) no-repeat top center;padding: 179px 0px;"><span class="btn btn-tag wow animate__animated animate__fadeIn" style="background: #fec20100;"><!-- Who We Are --></span>
            <h2 class="color-brand-1 mt-15 mb-10 wow animate__animated animate__fadeIn"><!-- About Us --></h2>
          </div>
        </div>
      </section>

      
      <section class="section mt-70">
        <div class="container">
          <div class="row">
            <?php
              $this->db->order_by('id desc');
              $blog = $this->crud->selectDataByMultipleWhere('blog',array('status'=>1,));
              foreach($blog as $data)
                { ?>

            <div class="col-lg-4 wow animate__animated animate__fadeIn">
              <div class="card-blog-grid hover-up">
                <div class="card-image"><a href="<?=base_url('blog-details/'.$data->slug) ?>"><img src="<?=base_url() ?>media/uploads/blog/<?=$data->image ?>" alt="transp"></a>
                </div>
                <div class="card-info"><a href="<?=base_url('blog-details/'.$data->slug) ?>">
                    <h5 class="color-brand-2"><?=$data->name ?></h5></a>
                  <p class="font-sm color-grey-500 mt-20"><?=$data->small_info ?></p>
                  <div class="line-border"></div>
                  <div class="mt-5 d-flex align-items-center justify-content-between pt-0">
                    <a class="btn btn-link font-sm color-brand-2" href="<?=base_url('blog-details/'.$data->slug) ?>">View Details<span>
                      <svg class="w-6 h-6 icon-16" fill="none" stroke="currentColor" viewbox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                      </svg></span></a><span class="date-post font-sm color-grey-700"><?=date('d M, Y',strtotime($data->addeddate)) ?></span></div>
                </div>
              </div>
            </div>
          <?php } ?>


            
          </div>
          
        </div>
      </section>
      <div class="mt-70"></div>
      
     
    </main>
    
<?php include('footer.php'); ?>
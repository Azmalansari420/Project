    <?php include('header.php'); ?>
<style>
  .card-image>a>img {
    height: 288px;
}
</style>
    <main class="main">
      <section class="section">
        <div class="container">
          <div class="content-detail">
            <div class="box-pageheader-1 box-pageheader-services text-start pb-30">
              <h2 class="color-brand-2 mt-15 mb-25 wow animate__animated animate__fadeIn"><?=$EDITDATA[0]->name ?></h2>
              
            </div>
          </div>
        </div>
      </section>
      <div class="section">
        <div class="container">
          <div class="row">
            <div class="col-xl-1"></div>
            <div class="col-xl-10"><img class="w-100 wow animate__animated animate__fadeIn" src="<?=base_url() ?>media/uploads/blog/<?=$EDITDATA[0]->image ?>" alt="transp"></div>
          </div>
        </div>
      </div>
      <section class="section mt-50">
        <div class="container">
          <div class="content-detail">
            <?=$EDITDATA[0]->content ?>
          </div>
        </div>
      </section>
      <div class="mt-100"></div>
    </main>
    
    <?php include('footer.php'); ?>
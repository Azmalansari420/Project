<?php include('header.php'); ?>
<style type="text/css">
    .team-one__single-content {
    position: relative;
    display: block;
    padding: 15px 25px 15px;
}
.team-one__single-img {
    position: relative;
    overflow: hidden;
    height: 280px; /* ✅ Set fixed height */
    border-radius: 10px;
}

.team-one__single-img img {
    width: 100%;
    height: 100%; /* ✅ Fill the div */
    object-fit: cover; /* ✅ Crop extra image and maintain aspect ratio */
    display: block;
    border-radius: 10px;
}


@media (max-width: 768px) {
    .team-one__single-img {
        height: 200px;
    }
}
</style>

<!--Start Page Header-->
        <section class="page-header">
            <div class="page-header__bg" style="background-image: url(assets/images/backgrounds/page-header-bg.jpg)">
            </div>
            <div class="page-header__pattern"
                style="background-image: url(assets/images/pattern/page-header-pattern.png);"></div>
            <div class="container">
                <div class="page-header__inner">
                    <h2 class="wow fadeInDown" data-wow-duration="1500ms"><?=$EDITDATA[0]->name ?></h2>
                    <ul class="thm-breadcrumb wow fadeInUp" data-wow-duration="1500ms">
                        <li><a href="">Home</a></li>
                        <li><span class="icon-right-chevron1"></span></li>
                        <li><?=$EDITDATA[0]->name ?></li>
                    </ul>
                </div>
            </div>
        </section>
        <!--End Page Header-->


        <section class="team-one team-one--team">
            <div class="container">
                <div class="row">
                    <?php
                    $subcat = $this->db->get_where('sub_categories',array('status'=>1,'cat_id'=>$EDITDATA[0]->id))->result_object();
                    foreach($subcat as $data)
                        { ?>
                    <div class="col-xl-4 col-lg-4 wow fadeInUp" data-wow-delay="100ms">
                        <div class="team-one__single">
                            <div class="team-one__single-img">
                                <img src="<?=base_url() ?>media/uploads/sub_categories/<?=$data->image ?>" alt="#">
                            </div>

                            <div class="team-one__single-content">
                                <h2 style="text-align:center;"><a href="<?=base_url($data->slug) ?>"><?=$data->name ?></a></h2>
                            </div>
                        </div>
                    </div>
                <?php } ?>
                    <!--End Team One Single-->

                    

                </div>
            </div>
        </section>

<?php include('footer.php'); ?>
<?php include("header.php");?>
<title> Edu India Foundation - Gallery</title>		
<meta name="keywords" content="Edu India Foundation"/>
<meta name="description" content="To have an overview of Edu India Foundation see our gallery. " />
<img src="edu_img/gallry.jpg" width="100%" />





<section class="latest-project sec-padd">
    <div class="container">
         <div class="row">
             <div class="col-sm-2">
                 </div>
                 <div class="col-sm-10">
                     <div class="row masonary-layout filter-layout">
		 <?php 
		 $all_gallery_pic = $con->all_fetch('post',array('status'=>'Yes','type'=>2),"order by sort_order desc");
		    if(is_array($all_gallery_pic) || is_object($all_gallery_pic)){
			 foreach($all_gallery_pic as $agp){
			 ?>
            <div class="col-md-4 col-sm-6 col-xs-12 filter-item">
                <div class="single-project">
                    <div class="img-box">
                        <img src="<?php echo BASE_URL.HP.$agp->img;?>" alt="Awesome Image"/>
                        <div class="overlay">
                            <div class="box">
                                <div class="content">
                                    <div class="top">
                                        <ul class="list-inline">
                                            <li>
											<p style="color:#fff;"><?php echo $agp->name;?></p>
                                                <a data-group="1" href="<?php echo BASE_URL.HP.$agp->img;?>" class="img-popup"><i class="fa fa-search-plus"></i></a>
                                            </li>                                            
                                        </ul>
                                    </div>

                                </div>
                            </div>
                        </div>
                        
                    </div>
                    </div>
            </div>
		 <?php } } ?>
		 
</div>
</div>
        </div><!-- /.row -->

        <div class="border-bottom"></div>
       

    </div><!-- /.container -->
</section><!-- /.latest-project sec-pad -->



<?php include("footer.php");?>
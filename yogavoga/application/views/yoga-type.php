<?php $this->load->view('header'); ?>
    <!-- Content -->
    <div class="page-content">
        <!-- inner page banner -->
        <div class="dez-bnr-inr" style="background-image:url(<?php echo base_url(); ?>images/background/bg9.jpg);">
            <div class="container">
                <div class="dez-bnr-inr-entry">
                    <h1>Yoga Types</h1>
                </div>
            </div>
        </div>
        <!-- inner page banner END -->
        <!-- Breadcrumb row -->
        <div class="breadcrumb-row">
            <div class="container">
                <ul class="list-inline">
                    <li><a href="#">Home</a></li>
                    <li>Yoga Types</li>
                </ul>
            </div>
        </div>
        <!-- Breadcrumb row END -->


        <div class="content-area">
            <!-- Left & right section start -->
            <div class="container">
                <!-- Pricing table-1 Columns 3 with gap -->
                <div class="m-b60">
                    <div class="section-head">
                        <h2 class="text-uppercase">Online Yoga</h2>
                    </div>
                    <div class="section-content">
                        <div class="pricingtable-row m-b30">
                            <div class="row">

                                <div class="col-12 col-md-6 col-lg-6 col-lg-6">
                                    <div class="pricingtable-wrapper">
                                        <div class="pricingtable-inner">
                                            <div class="pricingtable-price"> <span class="pricingtable-bx">₹ 999/-</span> 
                                                <!-- <span class="pricingtable-type">Group Yoga</span> ---> 
                                            </div> 
                                            <div class="pricingtable-title">
                                                <h2>Group Yoga</h2>
                                            </div>
                                            <!-- <ul class="pricingtable-features">
                                                <li><i class="fas fa-check"></i> Full Responsive </li>
                                                <li><i class="fas fa-check"></i> Multi color theme</li>
                                                <li><i class="fas fa-check"></i> With Bootstrap</li>
                                                <li><i class="fas fa-check"></i> Easy to customize</li>
                                                <li><i class="fas fa-check"></i> Many Sortcodes</li>
                                            </ul> -->
                                            <div class="pricingtable-footer"> 
                                                <button type="button" class="mybutton btn btn-primary" onclick="showModal('Group Yoga')"/>Book Demo</button> 
                                            </div>
                                        </div>
                                    </div>
                                </div>

                              

                                <div class="col-12 col-md-6 col-lg-6 col-lg-6">
                                    <div class="pricingtable-wrapper">
                                        <div class="pricingtable-inner">
                                            <div class="pricingtable-price"> <span class="pricingtable-bx">₹ 3500/-</span>  </div>
                                            <div class="pricingtable-title">
                                                <h2>Personal Session</h2>
                                            </div>
                                            <!-- <ul class="pricingtable-features">
                                                <li><i class="fas fa-check"></i> Full Responsive </li>
                                                <li><i class="fas fa-check"></i> Multi color theme</li>
                                                <li><i class="fas fa-check"></i> With Bootstrap</li>
                                                <li><i class="fas fa-check"></i> Easy to customize</li>
                                                <li><i class="fas fa-check"></i> Many Sortcodes</li>
                                            </ul> -->
                                            <div class="pricingtable-footer"> 
                                                <button type="button" class="mybutton btn btn-primary" onclick="showModal('PERSONAL SESSION')"/>Book Demo</button> 
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="content-area">
            <div class="container">
                <div class="">
                    <!-- blog grid -->
                    <div id="masonry" class="row dez-blog-grid-3">

                        <?php
                            $this->db->order_by('id desc');
                            $ytype = $this->crud->selectDataByMultipleWhere('yogatype',array('status'=>1,));
                            foreach($ytype as $data)
                                { ?>
                        <div class="post card-container col-lg-3 col-md-4 col-sm-6">
                            <div class="blog-post blog-grid date-style-2">
                                <div class="dez-post-media dez-img-effect zoom-slow"> <a href="#"><img src="<?php echo base_url(); ?>media/uploads/yogatype/<?php echo $data->image; ?>" alt=""></a> </div>
                                <div class="dez-post-info">
                                    <div class="dez-post-title ">
                                        <h3 class="post-title text-center"><a href="#"><?php echo $data->name; ?></a></h3>
                                    </div>
                                    
                                    <div class="dez-post-text">
                                        <p><?php echo $data->content; ?></p>
                                    </div>
                                    <div class="dez-post-readmore"> 
                                        <div class="m-t10 text-center">
                                            <button type="button" class="mybutton btn btn-primary" onclick="showModal('<?php echo $data->name; ?>')"/>Book Demo</button> 
                                        </div>
                                     </div>
                                </div>
                            </div>
                        </div>
                    <?php } ?>

                        
                    </div>
                    <!-- blog grid END -->
                    <!-- Pagination -->
                    <!-- <div class="pagination-bx">
                        <ul class="pagination">
                            <li class="previous"><a href="#"><i class="fas fa-angle-double-left"></i></a></li>
                            <li class="active"><a href="#">1</a></li>
                            <li><a href="#">2</a></li>
                            <li><a href="#">3</a></li>
                            <li class="next"><a href="#"><i class="fas fa-angle-double-right"></i></a></li>
                        </ul>
                    </div> -->
                    <!-- Pagination END -->
                </div>
            </div>
        </div>
    </div>
    <!-- Left & right section END -->
    <!-- Content END-->
   <?php $this->load->view('footer'); ?>
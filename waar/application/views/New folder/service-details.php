       <?php include('header.php'); ?>
<style>
    .class-tech .text {
        padding-top: 0;
    }
    .class-img-outer>img {
        height: 257px;
    }
</style>

        <main>
            
            <!-- breadcrumb-area -->
            <section class="breadcrumb-area d-flex align-items-center" style="background-image:url(<?=base_url() ?>img/bg/bdrc-bg.png)">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-xl-12 col-lg-12">
                            <div class="breadcrumb-wrap text-left">
                                <div class="breadcrumb-title">
                                    <h2><?=$EDITDATA[0]->name ?></h2>    
                                    <div class="breadcrumb-wrap">
                              
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="<?=base_url() ?>">Home</a></li>
                                        <li class="breadcrumb-item active" aria-current="page"><?=$EDITDATA[0]->name ?> </li>
                                    </ol>
                                </nav>
                            </div>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                </div>
            </section>
            <!-- breadcrumb-area-end -->
                 <!-- Classes-area -->
            <section class="class-area fix p-relative pt-110 pb-90" style="background: #f6f8fc;">   
                <div class="animations-01"><img src="<?=base_url() ?>img/bg/an-img-01.png" alt="an-img-01"></div>
                <div class="animations-02"><img src="<?=base_url() ?>img/bg/an-img-02.png" alt="contact-bg-an-01"></div>
                <div class="container">  
                   <div class="row"> 

                   <?php
                   $service = $this->crud->selectDataByMultipleWhere('services',array('status'=>1,'cat_id'=>$EDITDATA[0]->id,));
                   foreach($service as $data)
                   { ?>   

                       <div class="col-xl-4 col-lg-4 col-md-6">
                            <div class="class-item mb-30">
                                <div class="class-img hover-zoomin">
                                    <div class="class-img-outer">
                                        <img src="<?=base_url() ?>media/uploads/services/<?=$data->image ?>" alt="class image">
                                    </div>                                    
                                </div>
                                <div class="class-content">
                                    <div class="class-tech text-center">
                                        <div class="text" style="cursor: pointer;" onclick="showModal('<?=$data->name ?>')">Book Now</div>
                                    </div>
                                    <h4 class="title"><a style="cursor: pointer;" onclick="showModal('<?=$data->name ?>')"><?=$data->name ?></a></h4>
                                    <p><?=$data->content ?></p>
                                </div>                               
                            </div>
                        </div>
                    <?php } ?>
                 

                        
                    </div>
                </div>
            </section>
            
            
        </main>

       <?php include('footer.php'); ?>


    <div class="modal fade" id="myModalform" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h4 class="modal-title" id="exampleModalLabel">HOPE HEALTH</h4>
            <button type="button" class="close" data-dismiss="modal">&times;</button>
          </div>
          <div class="modal-body">
            <form action="<?=base_url('welcome/service_booking') ?>" method="post" class="contact-form mt-35">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="contact-field p-relative c-name mb-30">
                            <input type="text" id="firstn" name="name" placeholder="Full Name" required>
                        </div>                               
                    </div>
                    <div class="col-lg-6">                               
                        <div class="contact-field p-relative c-subject mb-30">
                            <input type="text" id="email" name="email" placeholder="Eamil Address" required>
                        </div>
                    </div>      
                    <div class="col-lg-6">                               
                        <div class="contact-field p-relative c-subject mb-30">
                            <input type="text" id="phone" name="mobile" placeholder="Phone No." required>
                        </div>
                    </div>    
                    <div class="col-lg-6">                               
                        <div class="contact-field p-relative c-subject mb-30">
                            <input type="date" id="date" name="book_date" placeholder="Phone No." required>
                        </div>
                    </div>   
                    <div class="col-lg-12">                               
                        <div class="contact-field p-relative c-subject mb-30">
                            <input type="text" id="subject"  name="subject" placeholder="Subject" required>
                        </div>
                    </div>  
                    <div class="col-lg-12">
                        <div class="contact-field p-relative c-message mb-30">
                            <textarea name="message" id="message" cols="30" rows="10" placeholder="Write comments"></textarea>
                        </div>

                        <div class="slider-btn text-center" style="display: inherit;">
                            <button name="submit" type="submit" class="btn ss-btn" data-animation="fadeInRight" data-delay=".8s">Submint Now</button>                
                        </div>                             
                    </div>

                </div>
            </form>          
          </div> 

        </div>
      </div>
    </div>


<script>
    function showModal(text='') 
    {
      $('#myModalform').modal('show');
      $("#subject").val(text);
    }
    $(".close").click(function(){
        $("#myModalform").modal('hide');
    });
</script>
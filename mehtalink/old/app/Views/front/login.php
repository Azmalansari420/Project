<!-- Title Bar -->
         <div class="pbmit-title-bar-wrapper">
            <div class="container">
               <div class="pbmit-title-bar-content">
                  <div class="pbmit-title-bar-content-inner">
                     <div class="pbmit-tbar">
                        <div class="pbmit-tbar-inner">
                           <h1 class="pbmit-tbar-title">Login</h1>
                        </div>
                     </div>
                     <div class="pbmit-breadcrumb">
                        <div class="pbmit-breadcrumb-inner">
                           <span><a title="" href="#" class="home"><span>Home</span></a></span>
                           <span class="sep">-</span>
                           <span><span class="post-root post post-post current-item">Login</span></span>
                        </div>
                     </div>
                  </div>
               </div> 
            </div> 
         </div>
         <!-- Title Bar End-->

         <!-- Page Content -->
         <div class="page-content">  

            <!-- Appointment Start -->
            <section>
               <div class="container mt-5 mb-5 sfdwe">
                  <div class="row justify-content-center">
                     <div class="col-xl-6 home-1-appointment-section-bg pbmit-bg-color-global">
                        <div class="home-1-appointment-section-inner-left ms-auto">
                           <div class="pbmit-heading-subheading">
                              <h2 class="pbmit-title text-white text-uppercase">Login <em class="pbmit-heading-subheading right">SignIn</em></h2>
							  <?php if(isset($error)) { echo $error; }?>
                           </div>
                           <div role="form" class="home-1-appointment-form">
                              <form action="" method="post" class="home-1-appointment-form init">
                                 <div class="pbmit-main-form pbmit-form-style-1">
                                    <div class="row">
                                       <div class="col-sm-12">
                                          <div class="input-group">
                                             <span class="input-item" data-name="your-name">
                                                <input type="text" name="email" required value="" size="40" aria-invalid="false" placeholder="Email*">
                                             </span>
                                          </div>
                                       </div>
                                       <div class="col-sm-12">
                                          <div class="input-group">
                                             <span class="input-item" data-name="your-email">
                                                <input type="password" required name="password" value="" size="40" aria-required="true" aria-invalid="false" placeholder="Password*">
                                             </span>
                                          </div>
                                       </div>
                                       <div class="col-sm-12">
                                          <div class="input-button">
                                             <button type="submit" id="submit" name="login" class="w-100 input-control input-submit pbmit-btn pbmit-btn-hover-black">Login</button>
                                          </div>
                                       </div>
                                       <div class="col-sm-12">
                                          <p><a href="<?=base_url('register');?>"><u>Create an Account</u></a></p>
                                       </div>
                                    </div>
                                 </div>
                              </form>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </section>
            <!-- Appointment End -->

         </div>
         <!-- Page Content End -->
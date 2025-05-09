<?php 
include('include/header.php'); ?>

         <?php include('include/sidebar.php'); ?>

         <div class="page-wrapper">
            <div class="content container-fluid">
               <div class="page-header">
                  <div class="row">
                     <div class="col-sm-12">
                        <h3 class="page-title">Welcome <?=$ambulance->username ?>!</h3>
                        <ul class="breadcrumb">
                           <li class="breadcrumb-item active">Dashboard</li>
                        </ul>
                     </div>
                  </div>
               </div>
               <!-- <div class="row">
                  <div class="col-xl-3 col-sm-6 col-12">
                     <div class="card">
                        <div class="card-body">
                           <div class="dash-widget-header">
                              <span class="dash-widget-icon text-primary border-primary">
                              <i class="fe fe-money"></i>
                              </span>
                              <div class="dash-count">
                                 <h3>$50.00</h3>
                              </div>
                           </div>
                           <div class="dash-widget-info">
                              <h6 class="text-muted">Sales Today</h6>
                              <div class="progress progress-sm">
                                 <div class="progress-bar bg-primary w-50"></div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="col-xl-3 col-sm-6 col-12">
                     <div class="card">
                        <div class="card-body">
                           <div class="dash-widget-header">
                              <span class="dash-widget-icon text-success">
                              <i class="fe fe-credit-card"></i>
                              </span>
                              <div class="dash-count">
                                 <h3>$5.22</h3>
                              </div>
                           </div>
                           <div class="dash-widget-info">
                              <h6 class="text-muted">Expense Today</h6>
                              <div class="progress progress-sm">
                                 <div class="progress-bar bg-success w-50"></div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="col-xl-3 col-sm-6 col-12">
                     <div class="card">
                        <div class="card-body">
                           <div class="dash-widget-header">
                              <span class="dash-widget-icon text-danger border-danger">
                              <i class="fe fe-folder"></i>
                              </span>
                              <div class="dash-count">
                                 <h3>485</h3>
                              </div>
                           </div>
                           <div class="dash-widget-info">
                              <h6 class="text-muted">Medicine</h6>
                              <div class="progress progress-sm">
                                 <div class="progress-bar bg-danger w-50"></div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="col-xl-3 col-sm-6 col-12">
                     <div class="card">
                        <div class="card-body">
                           <div class="dash-widget-header">
                              <span class="dash-widget-icon text-warning border-warning">
                              <i class="fe fe-users"></i>
                              </span>
                              <div class="dash-count">
                                 <h3>50</h3>
                              </div>
                           </div>
                           <div class="dash-widget-info">
                              <h6 class="text-muted">Staff</h6>
                              <div class="progress progress-sm">
                                 <div class="progress-bar bg-warning w-50"></div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               
               <div class="row">
                  <div class="col-md-12">
                     <div class="card card-table">
                        <div class="card-header">
                           <h4 class="card-title">Latest Customers</h4>
                        </div>
                        <div class="card-body">
                           <div class="table-responsive">
                              <table class="table table-hover table-center mb-0">
                                 <thead>
                                    <tr>
                                       <th>#</th>
                                       <th>Name</th>
                                       <th>Address</th>
                                       <th>Telephone</th>
                                       <th>Email</th>
                                       <th class="text-end">Date added</th>
                                    </tr>
                                 </thead>
                                 <tbody>
                                    <tr>
                                       <td>01</td>
                                       <td>
                                          <h2 class="table-avatar">
                                             Ruby Perrin
                                          </h2>
                                       </td>
                                       <td>takrakka</td>
                                       <td>
                                          <h2 class="table-avatar">
                                             +54 1245463984
                                          </h2>
                                       </td>
                                       <td><a href="https://doccure.dreamguystech.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="7c2e091e050c190e0e15121b3c051d14131352111d1510">[email&#160;protected]</a></td>
                                       <td class="text-end">April 14, 2020</td>
                                    </tr>
                                    <tr>
                                       <td>02</td>
                                       <td>
                                          <h2 class="table-avatar">
                                             Darren Elder
                                          </h2>
                                       </td>
                                       <td>339, Terromont Street</td>
                                       <td>
                                          <h2 class="table-avatar">
                                             +54 874654536
                                          </h2>
                                       </td>
                                       <td><a href="https://doccure.dreamguystech.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="1470756666717a7178707166547379757d783a777b79">[email&#160;protected]</a></td>
                                       <td class="text-end">April 15, 2020</td>
                                    </tr>
                                    <tr>
                                       <td>03</td>
                                       <td>
                                          <h2 class="table-avatar">
                                             Deborah Angel
                                          </h2>
                                       </td>
                                       <td>takrakka</td>
                                       <td>
                                          <h2 class="table-avatar">
                                             +54 3647787889
                                          </h2>
                                       </td>
                                       <td><a href="https://doccure.dreamguystech.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="1d79787f726f7c757c737a78715d647c757272337e7270">[email&#160;protected]</a></td>
                                       <td class="text-end">April 16, 2020</td>
                                    </tr>
                                    <tr>
                                       <td>04</td>
                                       <td>
                                          <h2 class="table-avatar">
                                             Ruby Perrin
                                          </h2>
                                       </td>
                                       <td>2061 Angus Road</td>
                                       <td>
                                          <h2 class="table-avatar">
                                             +54 1245463984
                                          </h2>
                                       </td>
                                       <td><a href="https://doccure.dreamguystech.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="085a7d6a71786d7a7a61666f4871696067672665696164">[email&#160;protected]</a></td>
                                       <td class="text-end">April 17, 2020</td>
                                    </tr>
                                    <tr>
                                       <td>05</td>
                                       <td>
                                          <h2 class="table-avatar">
                                             Krystyna Rodriquez
                                          </h2>
                                       </td>
                                       <td>takrakka</td>
                                       <td>
                                          <h2 class="table-avatar">
                                             +54 8965722222
                                          </h2>
                                       </td>
                                       <td><a href="https://doccure.dreamguystech.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="046f767d77707d6a65766b60766d7571617e446369656d682a676b69">[email&#160;protected]</a></td>
                                       <td class="text-end">April 18, 2020</td>
                                    </tr>
                                 </tbody>
                              </table>
                           </div>
                        </div>
                     </div>
                  </div>
               </div> -->
            </div>
         </div>

<?php include('include/footer.php'); ?> 
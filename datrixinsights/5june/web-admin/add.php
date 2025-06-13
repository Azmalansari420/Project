<?php include_once"header.php";?>

            <!-- Page Container START -->
            <div class="page-container">
              <!-- Content Wrapper START -->
                <div class="main-content">
                    <div class="container-fluid">
                        <div class="page-header">
                            <h2 class="header-title">Form Layouts</h2>
                            <div class="header-sub-title">
                                <nav class="breadcrumb breadcrumb-dash">
                                    <a href="#" class="breadcrumb-item"><i class="ti-home p-r-5"></i>Home</a>
                                    <a class="breadcrumb-item" href="#">Forms</a>
                                    <span class="breadcrumb-item active">Form Layouts</span>
                                </nav>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="p-h-10">
                                            <h5>Basic Form</h5>
                                            <form class="m-t-15">
                                                <div class="form-row">
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label class="control-label">First Name</label>
                                                            <input type="text" class="form-control">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label class="control-label">Last Name</label>
                                                            <input type="text" class="form-control">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <div class="m-b-10">  
                                                        <label class="control-label">Gender</label>
                                                    </div>   
                                                    <div class="radio d-inline m-r-15">
                                                        <input id="basicFormRadio1" name="basicForm" type="radio" checked="">
                                                        <label for="basicFormRadio1">Male</label>
                                                    </div>
                                                    <div class="radio d-inline m-r-15">
                                                        <input id="basicFormRadio2" name="basicForm" type="radio">
                                                        <label for="basicFormRadio2">Female</label>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <div class="form-group">
                                                        <label class="control-label">Email</label>
                                                        <input type="email" class="form-control">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <div class="form-group">
                                                        <label class="control-label">Password</label>
                                                        <input type="password" class="form-control">
                                                    </div>
                                                </div>
                                                <div class="form-row">
                                                    <div class="col-sm-6">
                                                        <div class="form-group">
                                                            <div class="checkbox">
                                                                <input id="basicFormCheckbox2" type="checkbox">
                                                                <label for="basicFormCheckbox2">Remember Me</label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <div class="form-group">
                                                            <div class="text-sm-right">
                                                                <button class="btn btn-default">Reset</button>
                                                                <button class="btn btn-gradient-success">Submit</button>
                                                            </div>
                                                        </div>
                                                    </div>        
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="p-h-10">
                                            <h5>Basic Form Without Label</h5>
                                            <form class="m-t-45">
                                                <div class="form-row">
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <input type="text" class="form-control" placeholder="First Name">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <input type="text" class="form-control" placeholder="Last Name">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <div class="radio d-inline m-r-15">
                                                        <input id="noLabelRadio1" name="noLabel" type="radio" checked="">
                                                        <label for="noLabelRadio1">Male</label>
                                                    </div>
                                                    <div class="radio d-inline m-r-15">
                                                        <input id="noLabelRadio2" name="noLabel" type="radio">
                                                        <label for="noLabelRadio2">Female</label>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <div class="form-group">
                                                        <input type="email" class="form-control"  placeholder="Email">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <div class="form-group">
                                                        <input type="password" class="form-control"  placeholder="Password">
                                                    </div>
                                                </div>
                                                <div class="form-row">
                                                    <div class="col-sm-6">
                                                        <div class="form-group">
                                                            <div class="checkbox">
                                                                <input id="noLabelCheckbox1" type="checkbox">
                                                                <label for="noLabelCheckbox1">Remember Me</label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <div class="form-group">
                                                            <div class="text-sm-right">
                                                                <button class="btn btn-default">Reset</button>
                                                                <button class="btn btn-gradient-success">Submit</button>
                                                            </div>
                                                        </div>
                                                    </div>        
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>        
                </div>
                <!-- Content Wrapper END -->

                <!-- Footer START -->
                <footer class="content-footer">
                    <div class="footer">
                        <div class="copyright">
                            <span>Copyright © 2018 <b class="text-dark">Theme_Nate</b>. All rights reserved.</span>
                            <span class="go-right">
                                <a href="#" class="text-gray m-r-15">Term &amp; Conditions</a>
                                <a href="#" class="text-gray">Privacy &amp; Policy</a>
                            </span>
                        </div>
                    </div>
                </footer>
                <!-- Footer END -->

            </div>
            <!-- Page Container END -->
<?php include_once"footer.php";?>
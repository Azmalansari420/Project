<?php include_once"header.php";?>

            <!-- Page Container START -->
            <div class="page-container">
              <!-- Content Wrapper START -->
                <div class="main-content">
                    <div class="container">
                        <div class="page-header">
                            <h2 class="header-title">Add Admin</h2>
                            <div class="header-sub-title">
                                <nav class="breadcrumb breadcrumb-dash">
                                    <a href="dashboard.php" class="breadcrumb-item"><i class="ti-home p-r-5"></i>Dashboard</a>
                                    <a class="breadcrumb-item" href="#">Admin</a>
                                    <span class="breadcrumb-item active">Add Admin</span>
                                </nav>
                            </div>
                        </div>
                          <p class="text-right" style="margin-top: -65px !important;">
                                    <a href="all-admin.php" class="btn btn-info"><i class="fa fa-reply" aria-hidden="true"></i> Back</a>
                                </p>
                        <div class="card">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="p-h-10">
                                            <h5>Add Admin</h5>
                                            <form class="m-t-15" action="" method="post">
                                                <div class="form-row">
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label class="control-label">User Name</label>
                                                            <input type="text" name="name" class="form-control" placeholder="Admin Name">
                                                        </div>
                                                    </div>
                                                   <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label class="control-label">Password</label>
                                                            <input type="Password" name="password" class="form-control" placeholder="Password">
                                                        </div>
                                                    </div>
                                                </div>
                                                
                                                <div class="form-row">
                                                   
                                                    <div class="col-sm-6">
                                                        <div class="form-group">
                                                            <div class="text-sm-right">
                                                                
                                                                <button type="submit" name="submit" class="btn btn-gradient-success">Submit</button>
                                                            </div>
                                                        </div>
                                                    </div>        
                                                </div>
                                                <?php
                                                if(isset($_POST['submit'])){ 
                                                    $user_name = $_POST['name'];
                                                    $check_login_id = $con->check("admin","username='$user_name'");;
                                                    if($check_login_id==0){
                                                        
                                                        $value = array(
                                                            'username' => $user_name,
                                                            'password' => md5($_POST['password'])
                                                            
                                                            );
                                                        $row = $con->insert("admin",$value);
                                                        if($row == true){
                                                           echo "<script>alert('One Details has been added successfully!');</script>";
                                                        }
                                                        else{
                                                            echo "<script>alert('Something Went Wrong!');</script>";
                                                        }
                                                    }else{
                                                        echo "<script>alert('Username already Exists!');</script>";    
                                                    }
                                                }



                                                ?>
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
               
                <!-- Footer END -->

         
            <!-- Page Container END -->
<?php include_once"footer.php";?>
<?php include_once"header.php";
 $id = $_GET['id'];
 
 
 if($_SESSION['role_id']!=1)
 {
     if($_SESSION['user_id']!=$id)
     {
         ?>
         
         <script>window.location.href="dashboard.php";</script>
         
         <?php
         
     }
 }
 
 
$fetch_data = $con->fetch_all_data("admin","id",$id);
foreach ($fetch_data as  $value) {
$name = $value['username'];
$pass = $value['password'];
$status = $value['status'];
 } 
?>

            <!-- Page Container START -->
            <div class="page-container">
              <!-- Content Wrapper START -->
                <div class="main-content">
                    <div class="container-fluid">
                        <div class="page-header">
                            <h2 class="header-title">Edit Admin</h2>
                            <div class="header-sub-title">
                                <nav class="breadcrumb breadcrumb-dash">
                                    <a href="dashboard.php" class="breadcrumb-item"><i class="ti-home p-r-5"></i>Dashboard</a>
                                    <a class="breadcrumb-item" href="#">Admin</a>
                                    <span class="breadcrumb-item active">Edit Admin</span>
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
                                            <h5>Edit Admin</h5>
                                            <form class="m-t-15" action="" method="post">
                                                <div class="form-row">
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label class="control-label">User Name</label>
                                                            <input type="text" name="name" value="<?php echo $name; ?>" class="form-control" placeholder="User Name">
                                                        </div>
                                                    </div>
                                                    
                                                     <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label class="control-label">Password ( <span style="color:red;">* Leave Blank For No Change in Password </span>)</label>
                                                            <input type="password" name="password" value="" class="form-control" placeholder="Admin Name">
                                                        </div>
                                                    </div>
                                                    
                                                </div>
                                                
                                                <div class="form-row">
                                                   
                                                    <div class="col-sm-6">
                                                        <div class="form-group">
                                                            <div class="text-sm-right">
                                                                
                                                                <button type="submit" name="submit" class="btn btn-gradient-success" >Submit</button>
                                                            </div>
                                                        </div>
                                                    </div>        
                                                </div>
                                                <?php
                                                 
                                                if(isset($_POST['submit']))
                                                {
                                                
                                                    if($_POST['password']==""){
                                                        $password =$pass;
                                                    }
                                                    else{
                                                        $password = md5($_POST['password']);
                                                    }
                                                    $value = array(
                                                        'id'        => $id,
                                                        'username' => $_POST['name'],
                                                        'password' => $password
                                                        
                                                );
                                                    $row = $con->update($value,"admin",$id);
                                                    if($row == true){
                                                       echo "<script>alert('One Details has been Updated successfully!');</script>";
                                                       echo"<script type='text/javascript'>document.location= 'all-admin.php';</script>";
                                                    }
                                                    else{
                                                        echo "<script>alert('Something Went Wrong!');</script>";
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
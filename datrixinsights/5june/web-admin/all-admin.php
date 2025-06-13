<?php include("header.php");
if(isset($_GET['id']) && !empty($_GET['id'])){
    $id = $_GET['id'];
    $delete = $con->delete("admin","id",$id);
     if($delete == true){
echo "<script>alert('One Details has been Delete successfully!');</script>";
echo"<script type='text/javascript'>document.location= 'all-admin.php';</script>";
}
else{
echo "<script>alert('Something Went Wrong!');</script>";
}
}

?>

            <!-- Page Container START -->
            <div class="page-container">
                

                <!-- Content Wrapper START -->
                <div class="main-content">
                    <div class="container">
                        <div class="page-header">
                            <h2 class="header-title">All Admin</h2>
                            <div class="header-sub-title">
                                <nav class="breadcrumb breadcrumb-dash">
                                    <a href="dashboard.php" class="breadcrumb-item"><i class="ti-home p-r-5"></i>Dashboard</a>
                                    <a class="breadcrumb-item" href="#">Admin</a>
                                    <span class="breadcrumb-item active">View Admin</span>

                                </nav>
                                
                            </div>

                        </div> 
                         <p class="text-right" style="margin-top: -65px !important;">
                                    <a href="add-admin.php" class="btn btn-info">Add Admin</a>
                                </p> 
                        <div class="card">
                            <div class="card-body">
                                <div class="table-overflow">
                                    <table id="dt-opt" class="table table-hover table-xl">
                                        <thead>
                                           
                                            <tr>
                                              

                                                <th>S.No</th>
                                                <th>Name</th>
                                                <th>Login Type</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                             <?php
                                             
                        if($_SESSION['role_id']==1)
                        {
                        $fetch_data = $con->fetch_all_data("admin"); 
                            $i=0;
                            foreach ($fetch_data as $value) {
                             $i++;
                                            ?>
                                            <tr>
                                              
                                                <td><?php echo $i; ?></td>
                                                <td> <?php echo  $value['username']; ?></td>
                                                <td> <?php if($value['type']==1){ echo "<b class='text-danger'>Master Admin</b>"; }else{ echo "<b>Sub Admin</b>"; }; ?></td>
                                                <td>
                                                    <a href="edit-admin.php?id=<?php echo $value['id']; ?>" class="text-gray m-r-15"><i class="ti-pencil"></i></a>
                                                   <?php
												   if(count($fetch_data) > 1){
												       if($value['type']==2){
												   ?>
                                                    <a href="?id=<?php echo $value['id']; ?>" class="text-gray"><i class="ti-trash"></i></a>
												   <?php } } ?>
                                                </td>
                                            </tr>
                                           <?php
                                            
                                                
                                                }
                        }
                        else if($_SESSION['role_id']==2)
                        {
                            $fetch_data = $con->fetch_all_data("admin","username",$_SESSION['name']); 
                            
                            $value = $fetch_data = $fetch_data[0];
                            // print_r($fetch_data);
                            ?>
                            
                            <tr>
                                <td><?php echo '1'; ?></td>
                                <td> <?php echo  $value['username']; ?></td>
                                <td> <?php if($value['type']==1){ echo "<b class='text-danger'>Master Admin</b>"; }else{ echo "<b>Sub Admin</b>"; }; ?></td>
                                <td>
                                    <a href="edit-admin.php?id=<?php echo $value['id']; ?>" class="text-gray m-r-15"><i class="ti-pencil"></i></a>
                                   <?php
								   if(count($fetch_data) > 1){
								       if($value['type']==2){
								   ?>
                                    <a href="?id=<?php echo $value['id']; ?>" class="text-gray"><i class="ti-trash"></i></a>
								   <?php } } ?>
                                </td>
                            </tr>
                            
                            <?php
                            
                        }
                                            ?>
                                        </tbody>
                                    </table>
                                </div> 
                            </div>       
                        </div>   
                    </div>
                </div>
                <!-- Content Wrapper END -->

                <!-- Footer START -->
            
            <!-- Page Container END -->

    <?php include("footer.php");?>
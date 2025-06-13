<?php include("header.php");?>

            <!-- Page Container START -->
            <div class="page-container">
                

                <!-- Content Wrapper START -->
                <div class="main-content">
                    <div class="container-fluid">
                        <div class="page-header">
                            <h2 class="header-title">Data Table</h2>
                            <div class="header-sub-title">
                                <nav class="breadcrumb breadcrumb-dash">
                                    <a href="#" class="breadcrumb-item"><i class="ti-home p-r-5"></i>Home</a>
                                    <a class="breadcrumb-item" href="#">Tables</a>
                                    <span class="breadcrumb-item active">Data Table</span>
                                </nav>
                            </div>
                        </div>  
                        <div class="card">
                            <div class="card-body">
                                <div class="table-overflow">
                                    <table id="dt-opt" class="table table-hover table-xl">
                                        <thead>
                                            <tr>
                                                <th>
                                                    <div class="checkbox p-0">
                                                        <input id="selectable1" type="checkbox" class="checkAll" name="checkAll">
                                                        <label for="selectable1"></label>
                                                    </div>
                                                </th>
                                                <th>Name</th>
                                                <th>Status</th>
                                                <th>Bill Code</th>
                                                <th>Date</th>
                                                <th>Amount</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>
                                                    <div class="checkbox">
                                                        <input id="selectable2" type="checkbox">
                                                        <label for="selectable2"></label>
                                                    </div> 
                                                </td>
                                                <td>
                                                    <div class="list-media">
                                                        <div class="list-item">
                                                            <div class="media-img">
                                                                <img src="assets/images/avatars/thumb-1.jpg" alt="">
                                                            </div>
                                                            <div class="info">
                                                                <span class="title">Marshall Nichols</span>
                                                                <span class="sub-title">ID 870</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td><span class="badge badge-pill badge-gradient-success">Actived</span></td>
                                                <td>#33667</td>
                                                <td>08 May 2018</td>
                                                <td> $168.00</td>
                                                <td class="text-center font-size-18">
                                                    <a href="#" class="text-gray m-r-15"><i class="ti-pencil"></i></a>
                                                    <a href="#" class="text-gray"><i class="ti-trash"></i></a>
                                                </td>
                                            </tr>
                                           
                                        </tbody>
                                    </table>
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

    <?php include("footer.php");?>
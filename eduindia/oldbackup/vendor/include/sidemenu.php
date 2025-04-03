 <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel" style="background-color:#fff">
       	  
	     <img src="../images/logo/logo.png" style="    width: 100%;" class="img-circle" alt="User Image">
        
      </div>
       
      
      <ul class="sidebar-menu" data-widget="tree">
     
         <li>
          <a href="welcome.php">
            <i class="fa fa-dashboard"></i> <span>Dashboard</span> 
          </a> 
        </li>
		 
		 
        
		<li class="treeview">
          <a href="javascript:;">
            <i class="fa fa-tag"></i>
            <span>Students</span>
             <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
		    <li><a href="add-student.php"><i class="fa fa-plus-circle"></i> Add Student</a></li>
		    <li><a href="print_mark.php"><i class="fa fa-plus-circle"></i> Print</a></li>
            
          </ul>
        </li>
        <?php
            if($admin->training_partner == "Yes"){
        ?>
		<li class="treeview">
          <a href="javascript:;">
            <i class="fa fa-tag"></i>
            <span>Branch</span>
             <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
        <li><a href="add-branch.php"><i class="fa fa-plus-circle"></i> Add Branch</a></li>
        
            
          </ul>
        </li>
      <?php } ?>
      
     
      
	 
        </li>
		   <li>
          <a href="change_password.php">
            <i class="fa fa-key"></i> <span> Change Password</span> 
          </a> 
        </li>
         </li>
         
		   <li>
          <a href="download-pdf-list.php">
            <i class="fa fa-file-pdf-o"></i> <span> Download</span> 
          </a> 
        </li>
		 
		  <li>
          <a href="authorization-letter.php" target="_blank">
            <i class="fa fa-picture-o"></i> <span>Authorization Letter</span> 
          </a> 
        </li>
		 
		 
	 
        
		
        	 
	 
	 
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>
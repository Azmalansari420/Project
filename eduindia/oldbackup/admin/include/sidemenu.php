 <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel"> 
        <div >
          <img src="images/logo.png" style="width: 100%;"  class="img-circle" alt="User Image">
        </div>
          
      </div>
       
      
      <ul class="sidebar-menu" data-widget="tree">
     
         <li>
          <a href="welcome.php">
            <i class="fa fa-dashboard"></i> <span>Dashboard</span> 
          </a> 
        </li>
		 
		 
         <?php 
         $url1 = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
         $url2 = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]";
            // echo $url2.'/admin/welcome.php';
            
        $file = $_SERVER["SCRIPT_NAME"];
$break = explode('/', $file);
$pfile = $break[count($break) - 1]; 
            
            
         
                //   echo $user_type;
                  include_once('topmenu.php');

                  foreach($menu_bar_list as $mblk=>$mblv){
                      if($mblv['menu_type']==1){
                        $cc_class = 'class="treeview"';                        
                      }else{
                        $cc_class = '';
                      }

                      //Check user Role
                      if($user_type=='V'){

                          $side_sel_menu_array = array();
                          $step_a = explode('|', $admin->role_list);
                          foreach($step_a as $step_a_k){
                                 $step_b = explode('@', $step_a_k); 
                                  
                                 $get_menu_id = $step_b[0]; 
                                 $step_c = @explode(',',$step_b[1]); 

                                 $side_sel_menu_list_array = array();
                                 foreach($step_c as $step_c_k){
                                    $side_sel_menu_list_array[] = $step_c_k;
                                          
                                 }

                                 $side_sel_menu_array[$step_b[0]] = $side_sel_menu_list_array;
                                     
                           } 

                        //role assign and menu assign
                         if( array_key_exists($mblk,$side_sel_menu_array) ){
                   ?>


                        <li <?php echo $cc_class; ?>>
                           <a href="<?php echo $mblv['menu_link']; ?>">
                           <i class="<?php echo $mblv['menu_icon']; ?>"></i><span><?php echo $mblv['menu_name']; ?></span>

                           <?php if($mblv['menu_type']==1){?>
                              <span class="pull-right-container">
                                 <i class="fa fa-angle-left pull-right"></i>
                              </span>
                           <?php } ?>
                           
                           </a>

                           <?php 
                           //fetch submenu list
                           if($mblv['menu_type']==1){?>
                               <ul class="treeview-menu">
                                 <?php 
                                 foreach($mblv['menu_list'] as $k=>$v){
                                      $list =  explode('|', $v);
                                      if(@in_array($k,$side_sel_menu_array[$mblk])){
                                    ?>
                                    <li><a href="<?php echo $list[1]; ?>"><?php echo $list[0]; ?></a></li>
                                      <?php   
                                          }
                                    ?>
                                    
                                    
                                    
                                    <?php
                                    // echo $url3 = $list[1];
                                    // echo $pfile;
                                    if($pfile==$list[1] || $url1==$url2.'/admin/welcome.php' || $user_type=="A")
                                    {
                                        // echo"ok";
                                        
                                    }
                                    else
                                    {?>
                                        <!--<script>window.location.href='welcome.php';</script>-->
                                    <?php }
                                    
                                    
                                    
                                    ?>
                                    
                                    
                                    
                                    
                                 <?php } ?>
                               </ul>
                           <?php }?>
                          
                        </li>


                  <?php 
                         }  
                     }else{ ?>


                      <!-- Admin Code -->
                         <li <?php echo $cc_class; ?>>
                           <a href="<?php echo $mblv['menu_link']; ?>">
                           <i class="<?php echo $mblv['menu_icon']; ?>"></i><span><?php echo $mblv['menu_name']; ?></span>

                           <?php if($mblv['menu_type']==1){?>
                              <span class="pull-right-container">
                                 <i class="fa fa-angle-left pull-right"></i>
                              </span>
                           <?php } ?>
                           
                           </a>

                           <?php 
                           //fetch submenu list
                           if($mblv['menu_type']==1){?>
                               <ul class="treeview-menu">
                                 <?php 
                                 foreach($mblv['menu_list'] as $k=>$v){
                                    $list =  explode('|', $v);?>
                                    <li><a href="<?php echo $list[1]; ?>"><?php echo $list[0]; ?></a></li>
                                 <?php } ?>
                               </ul>
                           <?php }?>
                          
                        </li>




                     <?php 
                           } 
                        }
                   ?>
                  
                  <?php 
                 if($user_type=='A'){ ?>
<!-- <li>
                     <a href="add-admin-role.php">
                     <i class="fa fa-user"></i> <span>Add Admin Role</span>
                     <span class="pull-right-container">
                     </span>
                     </a>
                  </li> -->
                <?php   }?> 
                 
                 
                  <li>
                     <a href="logout.php">
                     <i class="fa fa-sign-out"></i> <span>Logout</span>
                     <span class="pull-right-container">
                     </span>
                     </a>
                  </li>
                 
        
		
        	 
	 
	 
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>
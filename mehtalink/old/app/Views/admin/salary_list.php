<?php if(!isset($page_type)){$page_type=0;}
$uri = service('uri');
$currentpage=$uri->getSegment(3);
?>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-12">
            <h1><?=$title;?></h1>
            <hr />
            <div class="row">
				<div class="col-md-3"><a class="form-control btn btn-primary" href="<?=base_url('cpdadmin/salary_list/'.$currentpage.'');?>">List All</a></div>
				<div class="col-md-3"><a class="form-control btn btn-success" href="<?=base_url('cpdadmin/salary_add/'.$currentpage.'');?>">Add New</a></div>
            </div>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            
            <!-- /.card -->

            <div class="card">
             <?php
		      $pgtp=$uri->getSegment(4);
			  ?>
              <!-- /.card-header -->
			  <form action="<?php echo base_url('cpdadmin/multicheck');?>" method="post">
				
				
              <div class="card-body">
			  <input type="checkbox" id="check_all"/> &nbsp;Check All
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
				  
                   <th>#ID</th>
                    <th>Title</th>
                    
                    <th>Type</th>
					<?php if($mdtp!=5) { ?>
					<th>Options</th>
					<?php } ?>
                    <th>Status</th>
                    <th>Action</th>
                  </tr>
                  </thead>
                  <tbody>
                  <?php $i=1; if($user) { foreach($user as $values) { 
				  $parentpage=getdatasingle('tbl_pages',array('id'=>$values->parent_page));
				  ?>
				  <tr>
				  <td><input type="checkbox" name="check[]" class="check" value="<?php echo $values->id;?>"/> <?=$values->id;?> <?php if($mdtp!=5){ ?> <a href="<?=base_url('public/uploads/'.$values->file.'');?>" target="_blank"><img src="<?=base_url('public/uploads/'.$values->file.'');?>" style="max-height: 50px;float:right;"></a><?php } ?></td>
				    <?php if($mdtp!=5) { ?>
                    <td><?=$values->title;?></td>
					<?php } else {  ?>
					<td><a target="_blank" href="<?=base_url('public/uploads/'.$values->file.'');?>"><?=$values->title;?></a></td>
					<?php } ?>
					<?php if($mdtp!=5) { ?>
					<td>
					<?php if($values->page_type=='0'){ echo "Media";} 
					else if($values->page_type=='2'){ echo "Widgets";} 
					else if($values->page_type=='3'){ echo "Testimonial";} 
					else if($values->page_type=='4'){ echo "Tracking";}
					?>
					</td>
					<?php } if($mdtp==5) { ?>
					<td><?php $path_info = pathinfo(base_url('public/uploads/'.$values->file.''));
					echo $path_info['extension'];?></td>
					<?php } if($mdtp!=5) { ?>
					<td>
					<?php 
					if($mdtp=='0') {
					if($values->parent_page=='1'){ echo "Slider Banner";}
                    else if($values->parent_page=='2'){ echo "Home Gallery";} 
                     else if($values->parent_page=='3'){ echo "Clients List";} 
				  } else if($mdtp=='2'){
					if($values->parent_page=='1'){ echo "Sidebar Ads";}
                    else if($values->parent_page=='2'){ echo "Homepage Ads Top Banner";} 
                     else if($values->parent_page=='3'){ echo "Homepage Mid Banner";}  
				  } 
					?>
					</td>
					<?php } ?>
					<td>
					<?php if($values->status=='1'){ echo "Active";} else if($values->status=='0'){ echo "hidden";}?>					</td>
                   <td>

					<a href="<?=base_url('cpdadmin/salary_edit/'.$values->id);?>/<?=$currentpage;?>" title="Edit" class="btn btn-primary btn-xs">Edit</a>

					<a class="btn btn-warning btn-xs" href="#" data-toggle="modal" data-target="#myModal<?=$values->id;?>" title="View">View</a>
                    
					<a class="btn btn-danger btn-xs" href="<?=base_url('cpdadmin/deletewidthfile/'.$values->id);?>/tbl_student/<?=$page_name;?>/<?=$currentpage;?>" onclick="return confirm('Are you sure to delete this records')"  title="Delete">Delete</a>
					
                   
				</td>
                 
                  </tr>
                  <?php $i++; } } ?>
                 
                  </tbody>
                  
                </table>
				
				
			
            <input type="hidden" name="table" value="tbl_media">

			<input type="hidden" name="url" value="<?=$page_name;?>/<?=$currentpage;?>">

			<button type="submit" name="active" class="btn btn-success btn-xs">Active</button>

			<button type="submit" name="deactive" class="btn btn-danger btn-xs">Deactive</button>
            <?php if($page_type!=0) { ?>
			<button type="submit" name="delete" class="btn btn-danger btn-xs">Delete</button>
			<?php } ?>
              </div>
			  
			  

			</form>				
			  
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  
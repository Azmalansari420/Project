<?php if(!isset($page_type)){$page_type=0;} 
$uri = service('uri');
$currentpage=$uri->getSegment(3);
$array=combine_array();

?>
  <div class="content-wrapper">
   <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-12">
            <h1>List <?=ucwords($currentpage);?></h1>
            <hr />
            <div class="row">
				<div class="col-md-3"><a class="form-control btn btn-primary" href="<?=base_url('cpdadmin/page_list/'.$currentpage.'');?>">List All</a></div>
				<div class="col-md-3"><a class="form-control btn btn-success" href="<?=base_url('cpdadmin/page_add/'.$currentpage.'');?>">Add New</a></div>
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
              
              <!-- /.card-header -->
			  <form action="<?php echo base_url('cpdadmin/multicheck');?>" method="post">
				
				
              <div class="card-body">
			  <input type="checkbox" id="check_all"/> &nbsp;Check All
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
				  
                    <th>#ID</th>
                    <th>Title</th>
					<th>Category</th>
					<th>Catalog</th>
					<th>Status</th>
                    <th>Action</th>
                  </tr>
                  </thead>
                  <tbody>
                  <?php $i=1; if($user) { foreach($user as $values) { 
				  $parentpage=getdatasingle('tbl_pages',array('id'=>$values->parent_page));
				  ?>
				  <tr>
				  <td>
				  <?php if($values->id>=15) { ?>
				  <input type="checkbox" name="check[]" class="check" value="<?php echo $values->id;?>"/>
				  <?php } ?>
				  <?=$values->id;?>
				 </td>
                    <td><?=$values->title;?></td>
					
					<td>
					<?php if($values->parent_page=='0'){ echo "None";} 
					else { echo $parentpage->title;} 
					?>
					</td>
					
                    <td>
					<?php $blank=0;
                   $arrf=explode(",",$values->page_filter);
					foreach($array['CatalogStyle'] as $valuesf) {
                      if(in_array($valuesf['id'],$arrf)){
						  if($blank==0){$blank=1;}
						  echo $valuesf['name'];} 
						}
						if($blank==0){echo "None";}
						$blank=0;
						?>
					</td>
					<td>
					<?php if($values->status=='1'){ echo "Active";} else if($values->status=='0'){ echo "hidden";}?>
					</td>
                   <td>

					<a href="<?=base_url('cpdadmin/page_edit/'.$values->id);?>/<?=$currentpage;?>" title="Edit" class="btn btn-primary btn-xs">Edit</a>
                    <?php if($currentpage=='category') { ?>
					<a target="_blank" class="btn btn-warning btn-xs" href="<?=base_url('category/'.$values->slug)?>" title="View">View</a>
                    <?php } else { ?>
					<a target="_blank" class="btn btn-warning btn-xs" href="<?=base_url('page/'.$values->slug)?>" title="View">View</a>
					<?php } ?>
					<?php if($values->id>=15) { ?>
					<a class="btn btn-danger btn-xs" href="<?=base_url('cpdadmin/deletewidthfile/'.$values->id);?>/<?=$table_name;?>/<?=$page_name;?>/<?=$currentpage;?>" onclick="return confirm('Are you sure to delete this records')"  title="Delete">Delete</a>
                    <?php } ?>
				</td>
                 
                  </tr>
                  <?php $i++; } } ?>
                 
                  </tbody>
                  
                </table>
				
				
			
            <input type="hidden" name="table" value="tbl_pages">

			<input type="hidden" name="url" value="<?=$page_name;?>/<?=$currentpage;?>">

			<button type="submit" name="active" class="btn btn-success btn-xs">Active</button>

			<button type="submit" name="deactive" class="btn btn-danger btn-xs">Deactive</button>
            
			<button type="submit" name="delete" class="btn btn-danger btn-xs">Delete</button>
			
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
  
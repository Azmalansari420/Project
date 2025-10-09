<?php $this->load->view('admin/header');?>
<div class="clearfix"></div>
  <div class="content-wrapper">
    <div class="container-fluid">
     <div class="row pt-2 pb-2">
        <div class="col-sm-9">
        <h4 class="page-title">All User List</h4>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="javaScript:void();">Dashboard</a></li>
            <li class="breadcrumb-item active" aria-current="page">All User List</li>
         </ol>
         <button type="button" class="btn btn-danger delete_multiple">Delete Selected</button>
     </div>
     </div>
      <div class="row">
        <div class="col-lg-12">
          <div class="card">
            <div class="card-body">
			<?php echo $this->session->flashdata('msg'); ?>
			<table id="example" class="table table-bordered table-striped table-responsive">
                <thead>
					<tr>
					  <th><input type="checkbox" id="select_all"></th>      
					  <th></th>      
        			   <th>Admission </th>    
        			   <th>Reg-Id</th>   
        			   <th>Student-Id</th>   
        			   <th>Course</th>
        			   <th>Specialization</th>
        			   <th>Student </th>     
        			   <th>Image</th>    
        			   <th>Action</th>
					</tr>
                </thead>
				<?php if(count($RESULT)>0){ ?>
                <tbody>
				<?php $no=0; foreach($RESULT as $record){ $no++; ?>
					<tr>
						<td></td>
						<td width="2%">
							<?php echo $no; ?><br>
							<input style="width: 15px;" type="checkbox" name="multiple_delete[]" value="<?php echo $record->id; ?>" class="multiple_delete">
					</td>
						<td><?php echo date('d/M/Y', strtotime($record->join_date)); ?>
						        <bR>
							<?php if($record->approval_status=='1'){ ?>
							<span style="color:green ">Approved</span>
							<?php }else{ ?>
							<span style="color:red ">Not Approved</span>
							<?php }?>
						
						</td>
						<td><?php echo wordwrap($record->reg_id, 5, "<br />\n");  ?></td>
						<td><?php echo $record->student_id_number ?></td>
						<td style="width:5%"><?php echo wordwrap($record->course, 15, "<br />\n");  ?></td>

						<td>
						    <?php 
                        	$string_to_array = explode('#',$record->specialization);
                        	foreach($string_to_array as $key=>$row_id){
                        	    if($row_id){
                        	        
                        	    
                        	    $specialization = $this->specialization_model->get_specialization_by_id($row_id) ; 
                        	    echo wordwrap($specialization[0]->name, 15, "<br />\n") .'<br>'; }
                        	}
                        	
                        	
                            
				            ?>
						</td>
    					<td width="5%">
    				    	<b>Name :</b> <?= ucwords($record->name);?><br/>
    			            <b>Father Name :</b> <?=$record->father_name;?><br/>
    			            <b>Mobile :</b> <?=$record->mobile;?><br/>
    			            <b>Email :</b> <?=$record->email;?><br/>
    			            <b>Password :</b> <?=$record->password;?><br/>
    			            <b>Date Of Birth :</b>  <?php echo date('d-m-Y', strtotime($record->dob)); ?>
    			            <br>
    			            	<?php if($record->status==1){ ?>
							<span style="color:green ">Active</span>
							<?php }else{ ?>
							<span style="color:red ">Inactive</span>
							<?php }?>
    			       </td> 
				        <td><img src="<?php echo base_url('uploads/user/').$record->photo ?>" style="width:50px;height:50px"> </td>
			
						<td >
							<a href="<?php echo base_url('user/profile/'.$record->id); ?>"  title="View Profile"> Profile</a><br>
							<a href="<?php echo base_url('user/result/'.$record->id); ?>"  title="View Result" style="color:#ef25c7" target="_blank"> Result</a><br> 
							<a href="<?php echo base_url('user/marksheet/'.$record->id); ?>"  title="View Marksheet" style="color:green" target="_blank"> Marksheet</a><br> 
							<a href="<?php echo base_url('user/certificate/'.$record->id); ?>"  title="View Ceritificate" style="color:red" target="_blank"> Certificate</a>	<br>
							<a href="<?php echo base_url('user/userExamList/'.$record->id); ?>"  style="color:blue "   title="Exam List">Exams </a>	<br>
							<a href="<?php echo base_url('user/userdelete/'.$record->id); ?>"  style="color:red " onclick="return confirm('Are you sure you want to delete this item?');"  title="User Delete">Delete</a>
						</td>	
					</tr>
				<?php } ?>	
                </tbody> 
				<?php } ?>	
            </table>
            </div>
		</div>
    </section>
</div>

<?php $this->load->view('admin/footer'); ?>



<script>
	
        $(document).ready(function(){
			    $(".delete_multiple").click(function(event)
			    {
			        var ids = [];
			        $('.multiple_delete:checked').each(function () {
			            ids.push(this.value);
			        });

			        if(ids.length == 0)
			        {
			            alert("Please select at least one user.");
			            return false;
			        }

			        // Confirmation box
			        if (confirm("Are you sure you want to delete selected users?")) 
			        {
			            $.ajax({
			                url:'<?=base_url('user/delete_multiple_users') ?>',
			                method:'post',
			                data:{id:ids},
			                success:function(data)
			                {   
			                    location.reload();
			                    // Optional: show alert
			                    // alert('Selected users deleted successfully!');
			                }
			            });                    
			        }
			    });
			});


        document.getElementById('select_all').addEventListener('change', function() {
        // Get all checkboxes with class multiple_delete
        let checkboxes = document.querySelectorAll('.multiple_delete');
        checkboxes.forEach(function(checkbox) {
            checkbox.checked = document.getElementById('select_all').checked;
        });
    });


$('#example').DataTable({
    pageLength: 50  // Show 50 rows by default
});
</script>











<?php 
function get_string_between($string, $start, $end){
    $string = ' ' . $string;
    $ini = strpos($string, $start);
    if ($ini == 0) return '';
    $ini += strlen($start);
    $len = strpos($string, $end, $ini) - $ini;
    return substr($string, $ini, $len);
}

?>



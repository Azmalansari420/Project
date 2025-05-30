<style>
.select2-container--bootstrap4 .select2-selection--single .select2-selection__rendered{
	border: 0px !Important;
    padding: 2px !important;
    background-color: #f2f2f2 !Important;
    font-size: 14px !Important;
    color: #673ab7 !Important;
}
</style>
<div class="page-wrapper">
			<!--page-content-wrapper-->
			<div class="page-content-wrapper">
				<div class="page-content">
					
					<div class="card">
						<div class="card-body">
							<div class="card-title">
								<h4 class="mb-0"><?php echo $page;?>
										
									<a href="<?=base_url('admin/admin_add') ?>" class="btn btn-primary" style="float: right;">Add New Client</a>


								</h4>
							</div>
							<hr/>
							<div class="table-responsive">
								<table id="example2" class="table table-striped table-bordered" style="width:100%">
									<thead>
										<tr>
											<th>Name</th>
											<th>Username</th>
											<th>Password</th>
											<th>Status</th>
											<th>Options</th>
										</tr>
									</thead>
									<tbody>
										<?php foreach($admins as $pro){?>
										<tr>
											<td> <a href="<?php echo base_url();?>admin/show_report/<?php echo $this->admin_model->url_encode($pro->pid);?>" >
											<?php echo $pro->username;?></a></td>
											
									
                                       
											<td><?php echo $pro->email;?></td>
											<td><?php echo $pro->password;?></td>
                                              
											<td>
											<select class="single-select sel" data="<?php echo $pro->id;?>">
									<option value="Active" <?php if($pro->status=='Active'){ echo 'selected';}?>>Active</option>
									
									</select>
											</td>

											<td>
												
												<a class="partner" href="<?=base_url('admin/admin_edit/'.$pro->admin_id) ?>">Edit
												<i class="lni lni-edit text-primary option-icon" data-toggle="tooltip" data-placement="top" title="" data-original-title="Assign a partner with this project"></i></a>

									 
									 <a href="<?php echo base_url();?>admin/delete_project/<?php echo $this->admin_model->url_encode($pro->id);?>" onclick="return confirm('Are you sure want to delete this project. all the data will remove permanently?')">
												<i class="lni lni-trash text-danger option-icon" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete Project"></i></a>


											</td>
										</tr>
										<?php }?>
									</tfoot>
								</table>

							</div>
						</div>
					</div>
				</div>
			</div>
</div>
<div class="modal fade" id="teammember" tabindex="-1" role="dialog" aria-hidden="true">
								<div class="modal-dialog modal-dialog-centered">
									<div class="modal-content">
										<div class="modal-header">
											<h5 class="modal-title">Assign project to team</h5>
											<button type="button" class="close" data-dismiss="modal" aria-label="Close">	<span aria-hidden="true">&times;</span>
											</button>
										</div>
										<div class="modal-body">
											<?php echo form_open(base_url( 'admin/project_add_member' ), array( 'id' => 'password', 'class' => 'password', 'method' => 'post', 'autocomplete'=>'off'));?>
                                   
										<input type="hidden" name="id" value="" id="tt"/>
										<div class="form-group">
								<label>Choose team member</label>
								<select id="new" name="team[]" required class="multiple-select" data-placeholder="Choose anything" multiple="multiple">
									
									</select>
									</div>
										</div>
										<div class="modal-footer">
											<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
											<button type="submit" class="btn btn-primary">Save changes</button>
										</div>
										</form>
									</div>
								</div>
							</div>
							
							<div class="modal fade" id="urls" tabindex="-1" role="dialog" aria-hidden="true">
								<div class="modal-dialog modal-dialog-centered">
									<div class="modal-content">
										<div class="modal-header">
											<h5 class="modal-title">Redirect URLs</h5>
											<button type="button" class="close" data-dismiss="modal" aria-label="Close">	<span aria-hidden="true">&times;</span>
											</button>
										</div>
										<div class="modal-body">
										
										<div class="form-group col-md-12">
												<label>Completed</label>
												<div class="input-group">
													
													<input type="text" id="com" class="form-control" placeholder="Last Name" value="" readonly>
												<div class="input-group-prepend">	<span class="input-group-text bg-transparent com" onclick="copyToClipboard('#com')">copy</span>
													</div>
												</div>
										</div>
										
										<div class="form-group col-md-12">
												<label>Terminated</label>
												<div class="input-group">
													
													<input type="text" id="term" class="form-control " placeholder="Last Name" readonly>
												<div class="input-group-prepend">	<span class="input-group-text bg-transparent term" onclick="copyToClipboard('#term')">copy</span>
													</div>
												</div>
										</div>
										
										<div class="form-group col-md-12">
												<label>Quotafull</label>
												<div class="input-group">
													
													<input type="text" id="quota" class="form-control " placeholder="Last Name" readonly>
												<div class="input-group-prepend">	<span class="input-group-text bg-transparent quota" onclick="copyToClipboard('#quota')">copy</span>
													</div>
												</div>
										</div>
										<div class="linksss">
										    
										</div>
										
															
									
										</div>
										
										</form>
									</div>
								</div>
							</div>
							
							
							<div class="modal fade" id="partner" tabindex="-1" role="dialog" aria-hidden="true">
								<div class="modal-dialog modal-dialog-centered">
									<div class="modal-content">
										<div class="modal-header">
											<h5 class="modal-title">Assign project to partner</h5>
											<button type="button" class="close" data-dismiss="modal" aria-label="Close">	<span aria-hidden="true">&times;</span>
											</button>
										</div>
										<div class="modal-body">
											<?php echo form_open(base_url( 'admin/assign_partner' ), array( 'id' => 'password', 'class' => 'password', 'method' => 'post', 'autocomplete'=>'off'));?>
                                   
										<input type="hidden" name="id" value="" id="tt1"/>
										<div class="addons">
										
									</div>
									<div class="form-group">
									    <input type="button" class="btn btn-success" id="addmore" value="Assign partner" />
									</div>
										</div>
										<div class="modal-footer">
											<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
											<button type="submit" class="btn btn-primary">Save changes</button>
										</div>
										</form>
									</div>
								</div>
							</div>
<script type="text/javascript">
$(document).ready(function() {
		
        $('.sel').on('change', function() {
			
            var id = $(this).attr('data');
			var status=$(this).val();
            if(status) {
                $.ajax({
                url:"<?php echo base_url() ?>admin/project_status/"+ id +"/"+status,
                    type: "GET",
                    success:function(data) {
                        
                    }
                });
            }else{
                $('.sel').empty();
            }
        });
    });
</script>
<script type="text/javascript">
$(document).ready(function() {
		
        $('.team').on('click', function() {
			
            var id = $(this).attr('data');
            
                $.ajax({
                url:"<?php echo base_url() ?>admin/get_team/"+ id,
                    type: "GET",
                    success:function(data) {
						$("#tt").val(id);
                       $('#new'). empty(). append(data);
                    }
                });
            });
        
    });
</script>
<script type="text/javascript">
$(document).ready(function() {
		
        $('.partner').on('click', function() {
			
            var id = $(this).attr('data');
           
                $.ajax({
                url:"<?php echo base_url() ?>admin/get_partner/"+ id,
                    type: "GET",
                    success:function(data) {
						
						$("#tt1").val(id);
                       $('.addons'). empty(). append(data);
                    }
                });
            });
        
    });
</script>
<script type="text/javascript">
$(document).ready(function() {
		
        $('.urls').on('click', function() {
			
            
            var pid = $(this).attr('data2');
            var idk = $(this).attr('data3');
            $.ajax({
                url:"<?php echo base_url() ?>admin/get_linkss/"+idk,
                    type: "GET",
                    success:function(data) {
						$('.linksss').empty().append(data);
                    }
                });
                
                var url1="<?php echo base_url();?>redirect/complete?pid="+pid+"&uid=XXX";
				var url2="<?php echo base_url();?>redirect/terminate?pid="+pid+"&uid=XXX";
				var url3="<?php echo base_url();?>redirect/quotafull?pid="+pid+"&uid=XXX";
				$('#com').val(url1);
				$('#term').val(url2);
				$('#quota').val(url3);
				
            });
        
    });
	function copyToClipboard(element) {
    $(element).select();
    document.execCommand("copy");
}
</script>
<script>
$(document).on('change', '.new1', function() {
    var opt = $(this).val();
    var parent=$(this).parent().parent().children('.same');
  if(opt!='')
  {
	   $.ajax({
                url:"<?php echo base_url() ?>admin/get_partner_links/"+ opt,
                    type: "GET",
                    success:function(data) {
						var json = $.parseJSON(data);
						console.log(parent.find('input').attr('name'))
						parent.find('.com1').val(json.complete);
					//	$(this).parent().parent().find(".com1").val(json.complete);
						parent.find('.term1').val(json.terminate);
				//$('#term1').val(json.terminate);
				parent.find('.quota1').val(json.quotafull);
			
                    }
                });
  }
  else
  {
	  alert('Please select an option to proceed next step');
  }
});
</script>
<script type="text/javascript">
    // add row
    $("#addmore").click(function () {
      
      $(".addons").append($(".talk:first").clone());
      
   
    });

    
</script>

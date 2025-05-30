
<div class="page-wrapper">
			<!--page-content-wrapper-->
			<div class="page-content-wrapper">
				<div class="page-content">
					
					<div class="card">
						<div class="card-body">
							<div class="card-title">
								<h4 class="mb-0"><?php echo $page;?></h4>
							</div>
							<hr/>
							<div class="table-responsive">
								<table id="example2" class="table table-striped table-bordered" style="width:100%">
									<thead>
										<tr>
											<th>Name</th>
											<th>Email</th>
											<th>Mobile</th>
											<th>Password</th>
											<th>Status</th>
											<th>Options</th>
										</tr>
									</thead>
									<tbody>
										<?php foreach($partners as $part){?>
										<tr>
											<td><a href="<?php echo base_url();?>admin/view_profile/<?php echo  $this->admin_model->url_encode($part->id);?>"><?php echo $part->name;?></a></td>
											<td><?php echo $part->email;?></td>
											<td><?php echo $part->mobile;?></td>
											<td><?php echo $part->password;?></td>
										
											<td><a href="<?php echo base_url();?>admin/status_change/<?php echo  $this->admin_model->url_encode($part->id);?>"><?php if($part->verified==0){ echo '<span class="badge badge-warning" data-toggle="tooltip" data-placement="top" title="" data-original-title="Click to change status">Unverified</span>';} else { echo '<span class="badge badge-success" data-toggle="tooltip" data-placement="top" title="" data-original-title="Click to change status">Verified</span>';}?></a></td>
											
											<td>
												<a href="<?php echo base_url();?>admin/edit_employee/<?php echo $this->admin_model->url_encode($part->id);?>">
												<i class="lni lni-pencil text-primary option-icon" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit Employee Details"></i></a>

												
												<a href="<?php echo base_url();?>admin/delete_employee/<?php echo $this->admin_model->url_encode($part->id);?>" onclick="return confirm('Are you sure want to delete this partner. all the data will remove permanently?')">
												<i class="lni lni-trash text-danger option-icon" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete Employee"></i></a>

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



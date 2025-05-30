
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
											<th>Created at</th>
											<th>Status</th>
											<th>Options</th>
										</tr>
									</thead>
									<tbody>
										<?php foreach($partners as $part){?>
										<tr>
											<td><?php echo $part->name;?></td>
											<td><?php echo $part->email;?></td>
											<td><?php echo $part->mobile;?></td>
											<td><?php echo date('d M Y', strtotime($part->join_date));?></td>
										
											<td>
											<span class="badge badge-success" data-toggle="tooltip" data-placement="top" title="" data-original-title="<?php echo $part->complete;?>">Complete </span>
											<span class="badge badge-danger" data-toggle="tooltip" data-placement="top" title="" data-original-title="<?php echo $part->terminate;?>">Terminate </span>
											<span class="badge badge-warning" data-toggle="tooltip" data-placement="top" title="" data-original-title="<?php echo $part->quotafull;?>">Quotafull </span>
											</td>
											
											<td>
												<a href="<?php echo base_url();?>admin/edit_partner/<?php echo $this->admin_model->url_encode($part->id);?>">
												<i class="lni lni-pencil text-primary option-icon" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit Partner Details"></i></a>

												
												
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



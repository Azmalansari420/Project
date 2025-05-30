<!--Data Tables -->
	
<div class="page-wrapper">
			<!--page-content-wrapper-->
			<div class="page-content-wrapper">
				<div class="page-content">
					
					<div class="card">
						<div class="card-body">
							<div class="card-title">
								<h4 class="mb-0">All Partners</h4>
							</div>
							<hr/>
							
							<div class="table-responsive">
								<table id="example2" class="table table-striped table-bordered" style="width:100%">
									<thead>
										<tr>
											<th>Name</th>
											<th>Email</th>
											<th>Mobile</th>
											
											<th>Wallet Amount</th>
											
											<th>Options</th>
										</tr>
									</thead>
									<tbody>
										<?php $count=0;foreach($partner as $part){
											$count=$count+$part->wallet_amount;

											?>

										<tr>
											<td><a href="<?php echo base_url();?>admin/view_profile/<?php echo  $this->admin_model->url_encode($part->id);?>"><?php echo $part->name;?></a></td>
											<td><?php echo $part->email;?></td>
											<td><?php echo $part->mobile;?></td>
											
										<td> $ <?php echo $part->wallet_amount; ?></td>
											
											
											<td>
												

												
												<a href="<?php echo base_url();?>admin/wallet_action/add/<?php echo $this->admin_model->url_encode($part->id);?>" >
												<i class="lni lni-plus text-success option-icon" data-toggle="tooltip" data-placement="top" title="" data-original-title="Add or remove wallet amount"></i></a>

												<a href="<?php echo base_url();?>admin/wallet_action/minus/<?php echo $this->admin_model->url_encode($part->id);?>" >
												<i class="lni lni-minus text-success option-icon" data-toggle="tooltip" data-placement="top" title="" data-original-title="Add or remove wallet amount"></i></a>

											</td>
										</tr>
										<?php }?>
									</tfoot>
								</table>

              

							</div>
							<h3 style="font-size: 19px;
    font-weight: 700;
    color: #32ab13;">Total Wallet Amount: <b><i class="lni lni-rupee"></i><?php echo $count;?></b></h3>

						</div>

					</div>
				</div>
			</div>
</div>



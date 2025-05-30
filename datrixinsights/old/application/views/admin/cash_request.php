
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
											<th>Mobile</th>
											<th>Wallet Amount</th>
											<th>Transaction</th>
											<th>Transaction Amount</th>
											<th>Type</th>
											<th>Date-Time</th>
											<th>Status</th>
											<th>Options</th>
										</tr>
									</thead>
									<tbody>
										<?php foreach($transaction as $trans){?>
										<tr>
											<td><a href="<?php echo base_url();?>admin/view_profile/<?php echo  $this->admin_model->url_encode($trans->partner_id);?>"><?php echo $this->db->where('id',$trans->partner_id)->get('partner')->row()->name;?></a></td>
											
											<td><?php echo $this->db->where('id',$trans->partner_id)->get('partner')->row()->mobile;?></td>
											<td> $ <?php echo $this->db->where('id',$trans->partner_id)->get('partner')->row()->wallet_amount;?>
										</td>

										
										<td><span class="badge <?php if($trans->action=='credit'){ echo 'badge-success';} else{ echo 'badge-danger';} ?>"><?php echo $trans->action;?></span></td>
											<td>$ <?php echo $trans->amount; ?></td>
											
											<td><span class="badge bdge-primary"><?php echo $trans->type?></span></td>
											<td><?php echo date('d M Y h:i:s', strtotime($trans->transaction_date));?></td>

											<td><a href="<?php echo base_url();?>admin/transaction_status/<?php echo  $this->admin_model->url_encode($trans->id);?>"><?php if($trans->status==0){ echo '<span class="badge badge-warning" data-toggle="tooltip" data-placement="top" title="" data-original-title="Click to change status">Pending</span>';} else { echo '<span class="badge badge-success" data-toggle="tooltip" data-placement="top" title="" data-original-title="Click to change status">Completed</span>';}?></a></td>

											<td>
												<a href="<?php echo base_url();?>admin/view_transaction/<?php echo $this->admin_model->url_encode($trans->id);?>">
												<i class="lni lni-eye text-primary option-icon" data-toggle="tooltip" data-placement="top" title="" data-original-title="View Transaction Details"></i></a>

												

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



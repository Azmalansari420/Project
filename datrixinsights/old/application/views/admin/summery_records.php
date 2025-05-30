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
											<th>Project</th>
											<th>PID</th>
											<th>UID</th>
											<th>Partner</th>
											<th>Client</th>
											<th>Status</th>
											<th>Total Submission</th>
											<th>Terminated</th>
											<th>Completed</th>
											<th>Quotafull</th>
											
										</tr>
									</thead>
									<tbody>
										<?php foreach($project as $pro){
											
											
											?>
										<tr>
										<td><?php echo $pro->name;?></td>
											<td><?php echo $pro->pid;?></td>
											<td><?php echo $pro->uid;?>
										</td>
										<td><?php if($pro->partner_id!=0){ echo $this->db->where('id',$pro->partner_id)->get('partner')->row()->name;}?></td>
                                           
										<td><?php echo $pro->client;?></td>
                                         <td><?php echo $pro->status;?></td>
										
										<td><?php echo $this->admin_model->get_total_survery($pro->pid);?></td>
                                         <td><?php echo $this->admin_model->get_total_action($pro->pid,'complete');?></td>
<td><?php echo $this->admin_model->get_total_action($pro->pid,'terminate');?></td>
<td><?php echo $this->admin_model->get_total_action($pro->pid,'quotafull');?></td>										 
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
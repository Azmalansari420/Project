<div class="page-wrapper">
			<!--page-content-wrapper-->
			<div class="page-content-wrapper">
				<div class="page-content">
					
					<div class="card">
						<div class="card-body">
							<div class="card-title">
								<h4 class="mb-0"><?php echo $page;?></h4>
							</div>
							<?php echo form_open(base_url( 'admin/all_reports' ), array( 'id' => 'password', 'class' => 'password', 'method' => 'post', 'autocomplete'=>'off'));?>
                                   
							<div class="form-row">
								
											<div class="form-group col-md-3">
												<label>From Date</label>
												<input type="date" class="form-control  "name="date" value="<?php echo $date;?>" />
											</div>
											<div class="form-group col-md-3">
												<label>To Date</label>
												<input type="date" class="form-control  "name="date1" value="<?php echo $date1;?>" />
											</div>
											<div class="form-group col-md-3">
												<label>Project</label>
												<input type="text" name="project" class="form-control  " value="<?php echo $project;?>" />
											</div>
											<div class="form-group col-md-3">
												<label>PID</label>
												<input type="text" name="pid" class="form-control  " value="<?php echo $pid;?>" />
											</div>
											
										</div>
										<div class="form-row">
											<div class="form-group col-md-3">
												<label>Client</label>
												<input type="text" name="client" class="form-control  " value="<?php echo $client;?>" />
											</div>
											<div class="form-group col-md-3">
												<label>Status</label>
												<select name="status" class="form-control  ">
												 <option value=""<?php if($status==''){ echo 'selected';}?>>Select status</option>
												 <option value="complete" <?php if($status=='complete'){ echo 'selected';}?>>Completed</option>
												 <option value="terminate" <?php if($status=='terminate'){ echo 'selected';}?>>Terminated</option>
												 <option value="quotafull" <?php if($status=='quotafull'){ echo 'selected';}?>>quota Full</option>
												</select>
											</div>
											<div class="form-group col-md-3">
												<label>IP Address</label>
												<input type="text" name="ip"  class="form-control  " value="<?php echo $ip;?>" />
											</div>
											<div class="form-group col-md-3">
												<label>Partner</label>
												<select name="partner" class="form-control">
												<option value="">Select Partner</option>
												<?php $part=$this->admin_model->get_all_partner();
												foreach($part as $p)
												{
												?>
												<option value="<?php echo $p->id;?>" <?php if($p->id==$partner){ echo 'selected';}?> ><?php echo $p->name;?></option>
												<?php }?>
												</select>
												<input type="hidden" name="uid" class="form-control  " value="<?php echo $uid;?>" />
											</div>
											<div class="form-group col-md-3">
											<label>Click button to filter</label>
												<input type="submit" class="btn btn-success form-control" value="Filter" />
											</div>
										</div>
										</form>
							<hr/>
							<div class="table-responsive">
								<table id="example2" class="table table-striped table-bordered" style="width:100%">
									<thead>
										<tr>
										    <th>S.No</th>
											<th>Project</th>
											<th>PID</th>
											<th>UID</th>
											<th>Partner</th>
											<th>Client</th>
											<th>Status</th>
											<th>IP Address</th>
											<th>Date</th>
											
										</tr>
									</thead>
									<tbody>
										<?php foreach($list as $pro){
											$tt=array();
											if(in_array($pro->ip,$tt)){
											$text='danger';
											}
											else
											{
												$text='default';
												$tt=array_push($tt,$pro->ip);
											}
											
											?>
										<tr>
										    <td><?php echo $pro->id;?></td>
										<td><?php echo $this->db->where('pid',$pro->pid)->get('project')->row()->name;?></td>
											<td><?php echo $pro->pid;?></td>
											<td><?php echo $pro->uid;?>
										</td>
										<td><?php if($pro->partner_id!=0){ echo $this->db->where('id',$pro->partner_id)->get('partner')->row()->name;}?></td>
                                           
										<td><?php echo $this->db->where('pid',$pro->pid)->get('project')->row()->client;?></td>
                                             <td><?php echo $pro->status;?></td>
										
										<td><span class="badge badge-<?php echo $text;?>"> <?php echo $pro->ip;?></span></td>
											
											
											<td><?php echo date('d M Y H:i:s', strtotime($pro->datetime));?></td>
											
                                           
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
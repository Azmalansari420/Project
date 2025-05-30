<div class="page-wrapper">
			<!--page-content-wrapper-->
			<div class="page-content-wrapper">
				<div class="page-content">
					
					<div class="card">
						<div class="card-body">
							<div class="card-title">
								<h4 class="mb-0"><?php echo $page;?></h4>
							</div>
							<div class="row">
							  
							   <div class="col-md-6">
							   <p>PID : <span><?php echo $project->pid;?></span></p>
							   <p>Description : <span><?php echo $project->description;?></span></p>
							   <p>Partner : <span><?php echo $this->db->where('id',$project->partner)->get('partner')->row()->name;?></span></p>
							  
							  </div>
							   
							    <div class="col-md-6">
								<p>Status : <span class="badge badge-success"><?php echo $project->status;?></span></p>
							   <p>Team : <span><?php if($project->team!=''){ $ex=explode(',',$project->team); foreach($ex as $e){ echo $this->db->where('id',$e)->get('employee')->row()->name.',';}}?></span></p>
							   <p>Survey Link : <span><a href="<?php echo $project->link;?>" target="_blank"><?php echo $project->link;?></a></span></p>
							  
							  </div>
							</div>
							<div class="card radius-15">
						<div class="row no-gutters row-group">
							<div class="col-12 col-lg-3">
								<div class="card-body">
									<div class="media align-items-center">
										<div class="media-body">
											<h4 class="mb-0 font-weight-bold text-info"><?php echo $total;?></h4>
											<p class="mb-0">Total Survery</p>
										</div>
										<div class="font-40"><i class='bx bx-happy-heart-eyes text-info'></i>
										</div>
									</div>
								</div>
							</div>
							<div class="col-12 col-lg-3">
								<div class="card-body">
									<div class="media align-items-center">
										<div class="media-body">
											<h4 class="mb-0 font-weight-bold text-facebook"><?php echo $com;?></h4>
											<p class="mb-0">Completed Survery</p>
										</div>
										<div class="font-40"><i class='bx bx-user-check text-facebook'></i>
										</div>
									</div>
								</div>
							</div>
							<div class="col-12 col-lg-3">
								<div class="card-body">
									<div class="media align-items-center">
										<div class="media-body">
											<h4 class="mb-0 font-weight-bold text-youtube"><?php echo $term;?></h4>
											<p class="mb-0">Terminated Survery</p>
										</div>
										<div class="font-40"><i class='bx bx-user-minus text-youtube'></i>
										</div>
									</div>
								</div>
							</div>
							<div class="col-12 col-lg-3">
								<div class="card-body">
									<div class="media align-items-center">
										<div class="media-body">
											<h4 class="mb-0 font-weight-bold text-linkedin"><?php echo $quota;?></h4>
											<p class="mb-0">Quotafull Survery</p>
										</div>
										<div class="font-40"><i class='bx bx-user-circle text-linkedin'></i>
										</div>
									</div>
								</div>
							</div>
						</div>
							</div>
							<hr/>
							<div class="table-responsive">
								<table id="example2" class="table table-striped table-bordered" style="width:100%">
									<thead>
										<tr>
											
											<th>PID</th>
											<th>UID</th>
											<th>Partner</th>
											<th>Status</th>
											<th>IP Address</th>
											<th>DateTime</th>
											
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
											<td><?php echo $pro->pid;?></td>
											<td><?php echo $pro->uid;?>
										</td>
										<td><?php if($pro->partner_id!=0){ echo $this->db->where('id',$pro->partner_id)->get('partner')->row()->name;}?></td>
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
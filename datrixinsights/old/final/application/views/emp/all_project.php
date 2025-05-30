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
											<th>Client</th>
											<th>CPI</th>
											<th>Created at</th>
											
											<th>Status</th>
											<th>Options</th>
										</tr>
									</thead>
									<tbody>
										<?php foreach($project as $pro){?>
										<tr>
											<td> <a href="<?php echo base_url();?>employee/show_report/<?php echo $this->emp_model->url_encode($pro->pid);?>" >
											<?php echo $pro->name;?></a></td>
											
											<td><?php echo $pro->pid;?></td>
											<td><?php echo $pro->uid;?>
										</td>
                                             <td><?php echo $pro->client;?></td>
										
										<td><span class="badge badge-primary"> $ <?php echo $pro->cpi;?></span></td>
											
											
											<td><?php echo date('d M Y', strtotime($pro->created));?></td>
                                              
											<td>
											<?php echo $pro->status;?>
										
											</td>

											<td>
												<a data-toggle="modal" data-target="#urls" class="urls" data1="<?php echo $pro->uid;?>" data2="<?php echo $pro->pid;?>" data3="<?php echo $this->emp_model->url_encode($pro->pid);?>">
												<i class="lni lni-link text-primary option-icon" data-toggle="tooltip" data-placement="top" title="" data-original-title="Get Redirect URLs"></i></a>
									 
									 

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
										
										<div class="form-group col-md-12">
												<label>Redirect URL for Partner</label>
												<div class="input-group">
													
													<input type="text" id="urls" class="form-control " placeholder="Last Name" readonly>
												<div class="input-group-prepend">	<span class="input-group-text bg-transparent quota" onclick="copyToClipboard('#quota')">copy</span>
													</div>
												</div>
										</div>
															
									
										</div>
										
										</form>
									</div>
								</div>
							</div>
<script type="text/javascript">
$(document).ready(function() {
		
        $('.urls').on('click', function() {
			
            var uid = $(this).attr('data1');
            var pid = $(this).attr('data2');
			var urls = $(this).attr('data3');
                var url1="<?php echo base_url();?>redirect/complete&pid="+pid+"&uid=XXX";
				var url2="<?php echo base_url();?>redirect/terminate&pid="+pid+"&uid=XXX";
				var url3="<?php echo base_url();?>redirect/quotafull&pid="+pid+"&uid=XXX";
				var url4="<?php echo base_url();?>survey/start?pid="+urls+"&uid=";
				$('#com').val(url1);
				$('#term').val(url2);
				$('#quota').val(url3);
				$('#urls').val(url4);
            });
        
    });
	function copyToClipboard(element) {
    $(element).select();
    document.execCommand("copy");
}
</script>

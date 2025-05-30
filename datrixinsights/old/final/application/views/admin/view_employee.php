
<div class="page-wrapper">
			<!--page-content-wrapper-->
			<div class="page-content-wrapper">
				<div class="page-content">

<div class="user-profile-page">
						<div class="card radius-15">
							<div class="card-body">
								<div class="row">
									<div class="col-12 col-lg-7 border-right">
										<div class="d-md-flex align-items-center">
											<div class="mb-md-0 mb-3">
												
												<?php if($partner->pic!=null || $partner->pic!=''){?>
												<img src="<?php echo $partner->pic;?>" class="rounded-circle shadow" width="130" height="130" alt="">
											<?php } else {?>
<img src="<?php echo base_url();?>assets/img/pic.png" class="rounded-circle shadow" width="130" height="130" alt="">
											<?php }?>
											</div>
											<div class="ml-md-4 flex-grow-1">
												<div class="d-flex align-items-center mb-1">
													<h4 class="mb-0"><?php echo $partner->name;?></h4>
													
												</div>
												<p class="mb-0 text-muted">+91-<?php echo $partner->mobile;?></p>
												<p class="text-primary"> <?php echo $partner->email;?></p>
												<a href="<?php echo base_url();?>admin/status_change/<?php echo  $this->admin_model->url_encode($partner->id);?>" onclick="return confirm('Are you want to change status of partner?')"><button type="button" class="btn btn-primary">
													<?php if($partner->verified==0){ echo 'Unverified';} else { echo 'Verified';}?></button></a>
												
											</div>
										</div>
									</div>
									<div class="col-12 col-lg-5">
										<table class="table table-sm table-borderless mt-md-0 mt-3">
											<tbody>
												<tr>
													<th>Designation:</th>
													<td><span class="badge badge-success"><?php echo $partner->designation;?></span>
													</td>
												</tr>
												<tr>
													<th>Current Address:</th>
													<td><?php echo $partner->address;?></td>
												</tr>
												
												<tr>
													<th>Password:</th>
													<td><?php echo $partner->password;?></td>
												</tr>
												<tr>
													<th>Account created:</th>
													<td><?php echo date('d M Y',strtotime($partner->created));?></td>
												</tr>
											</tbody>
										</table>
										
									</div>
								</div>
								<!--end row-->
								<ul class="nav nav-pills">
									
									
									
								</ul>
								<div class="tab-content mt-3">
									<div class="tab-pane fade active show" id="Experience">
										<div class="card shadow-none border mb-0 radius-15">
											<div class="card-body">
												 <div class="row">
							<table class="table table-striped mb-0">
                                                        <tr >
                                                          <th colspan="2">Last Login partnerrmation</th>
                                                        </tr>
                                                        <tr>
                                                          <td>Last Login  </td><td><?php echo $partner->last_login;?></td>
                                                        </tr>
                                                        <?php foreach(json_decode($partner->login_info) as $key=>$partner1) {?>

                                                        <tr>
                                                          <td><?php echo $key;?></td><td><?php echo $partner1;?></td>
                                                        </tr>
                                                      <?php } ?>
                                                      </table>
												</div>
											</div>
										</div>
									</div>
									
								</div>
							</div>
						</div>
					</div>

					</div>
			</div>
</div>

<style>
	.docx{
		width: 100%;

	}
	.docc .col-lg-4{
		padding: 10px;
		margin-bottom: 10px;
	}
	.docc .col-lg-4 h4{
		width: 100%;
    text-align: center;
    font-size: 16px;
    font-weight: 500;
    background-color: #fdd3d5;
    padding: 5px;
	}
</style>
<div class="page-wrapper">
			<!--page-content-wrapper-->
			<div class="page-content-wrapper">
				<div class="page-content">
					<div class="row">
						<div class="col-12 col-lg-4">
							<div class="card radius-15 bg-voilet">
								<div class="card-body">
									<div class="d-flex align-items-center">
										<div>
											<h2 class="mb-0 text-white"><?php echo $this->admin_model->get_total_emp();?> <i class='bx bxs-up-arrow-alt font-14 text-white'></i> </h2>
										</div>
										<div class="ml-auto font-35 text-white"><i class="lni lni-users"></i>
										</div>
									</div>
									<div class="d-flex align-items-center">
										<div>
											<p class="mb-0 text-white">Total Employee</p>
										</div>
										
									</div>
								</div>
							</div>
						</div>
						<div class="col-12 col-lg-4">
							<div class="card radius-15 bg-primary-blue">
								<div class="card-body">
									<div class="d-flex align-items-center">
										<div>
											<h2 class="mb-0 text-white"><?php echo $this->admin_model->get_total_veremp();?><i class='bx bxs-down-arrow-alt font-14 text-white'></i> </h2>
										</div>
										<div class="ml-auto font-35 text-white"><i class="lni lni-user"></i>
										</div>
									</div>
									<div class="d-flex align-items-center">
										<div>
											<p class="mb-0 text-white">Approved Employee</p>
										</div>
										
									</div>
								</div>
							</div>
						</div>
						<div class="col-12 col-lg-4">
							<div class="card radius-15 bg-rose">
								<div class="card-body">
									<div class="d-flex align-items-center">
										<div>
											<h2 class="mb-0 text-white"><?php echo $this->admin_model->get_total_unveremp();?> <i class='bx bxs-up-arrow-alt font-14 text-white'></i> </h2>
										</div>
										<div class="ml-auto font-35 text-white"><i class="lni lni-user"></i>
										</div>
									</div>
									<div class="d-flex align-items-center">
										<div>
											<p class="mb-0 text-white">Unapproved Employee</p>
										</div>
										
									</div>
								</div>
							</div>
						</div>
						
					</div>
					<!--end row-->
					
					<div class="row">
						<div class="col-12 col-lg-12 col-xl-12">
							<div class="card-deck flex-column flex-lg-row">
								<div class="card radius-15 bg-wall">
									<div class="card-body text-center">
										<div class="widgets-icons mx-auto rounded-circle bg-white"><i class='lni lni-remove-file'></i>
										</div>
										<h4 class="mb-0 font-weight-bold mt-3 text-white"><?php echo $this->admin_model->get_total_project();?></h4>
										<p class="mb-0 text-white">Total Projects</p>
									</div>
								</div>
								<div class="card radius-15 bg-wall">
									<div class="card-body text-center">
										<div class="widgets-icons mx-auto bg-white rounded-circle"><i class='lni lni-files'></i>
										</div>
										<h4 class="mb-0 font-weight-bold mt-3 text-white"><?php echo $this->admin_model->get_total_comproject();?></h4>
										<p class="mb-0 text-white">Closed Projects</p>
									</div>
								</div>
								<div class="card radius-15 bg-rose">
									<div class="card-body text-center">
										<div class="widgets-icons mx-auto bg-white rounded-circle"><i class='lni lni-add-files'></i>
										</div>
										<h4 class="mb-0 font-weight-bold mt-3 text-white"><?php echo $this->admin_model->get_total_uncomproject();?></h4>
										<p class="mb-0 text-white">Pending Projects</p>
									</div>
								</div>
							</div>
							<div class="card radius-15">
						<div class="row no-gutters row-group">
							<div class="col-12 col-lg-3">
								<div class="card-body">
									<div class="media align-items-center">
										<div class="media-body">
											<h4 class="mb-0 font-weight-bold text-info"><?php echo $this->admin_model->get_total_sur();?></h4>
											<p class="mb-0">Today's Survey</p>
										</div>
										<div class="font-40"><i class='lni lni-postcard text-info'></i>
										</div>
									</div>
								</div>
							</div>
							<div class="col-12 col-lg-3">
								<div class="card-body">
									<div class="media align-items-center">
										<div class="media-body">
											<h4 class="mb-0 font-weight-bold text-facebook"><?php echo $this->admin_model->get_total_comsur();?></h4>
											<p class="mb-0">Today's Completed Survey</p>
										</div>
										<div class="font-40"><i class='lni lni-postcard text-facebook'></i>
										</div>
									</div>
								</div>
							</div>
							<div class="col-12 col-lg-3">
								<div class="card-body">
									<div class="media align-items-center">
										<div class="media-body">
											<h4 class="mb-0 font-weight-bold text-youtube"><?php echo $this->admin_model->get_total_termsur();?></h4>
											<p class="mb-0">Today's Terminated Survey</p>
										</div>
										<div class="font-40"><i class='lni lni-postcard text-youtube'></i>
										</div>
									</div>
								</div>
							</div>
							<div class="col-12 col-lg-3">
								<div class="card-body">
									<div class="media align-items-center">
										<div class="media-body">
											<h4 class="mb-0 font-weight-bold text-linkedin"><?php echo $this->admin_model->get_total_quotasur();?></h4>
											<p class="mb-0">Today's Quotafull Survey</p>
										</div>
										<div class="font-40"><i class='lni lni-postcard text-linkedin'></i>
										</div>
									</div>
								</div>
							</div>
						</div>
						<!--end row-->
					</div>
							
						</div>
						
					</div>
					<!--end row-->
		        </div>
		    </div>
</div>

	<!--start header -->
		<header>
			<div class="topbar d-flex align-items-center">
				<nav class="navbar navbar-expand">
					<div class="mobile-toggle-menu"><i class='bx bx-menu'></i></div>
					<div class="search-bar flex-grow-1"></div>

					<div class="top-menu ms-auto">
						<ul class="navbar-nav align-items-center">
							<li class="nav-item mobile-search-icon"></li>
							<li class="nav-item dropdown dropdown-large"></li>
							<li class="nav-item dropdown dropdown-large">								
								<div class="dropdown-menu dropdown-menu-end">									
									<div class="header-notifications-list">										
										<a class="dropdown-item" href="javascript:;"></a>
									</div>
									<a href="javascript:;"></a>
								</div>
							</li>
							<li class="nav-item dropdown dropdown-large">
								<a class="nav-link dropdown-toggle dropdown-toggle-nocaret position-relative" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"> </a>
								<div class="dropdown-menu dropdown-menu-end">
									<a href="javascript:;">
										<div class="msg-header"></div>
									</a>
									<div class="header-message-list"></div>									
								</div>
							</li>
						</ul>
					</div>

					<div class="user-box dropdown">
						<a class="d-flex align-items-center nav-link dropdown-toggle dropdown-toggle-nocaret" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
							<?php 
							$user = $this->crud->selectDataByMultipleWhere('tbl_admin',array('id'=>$this->session->userdata("id"),));
							foreach($user as $data)
								{ ?>
							<img src="<?php echo base_url(); ?>media/uploads/<?php echo $data->image; ?>" class="user-img" alt="user avatar">			<?php } ?>			
						</a>
						<ul class="dropdown-menu dropdown-menu-end">
							
							<li><div class="dropdown-divider mb-0"></div></li>

							<li><a class="dropdown-item" href="<?php echo base_url('admin_con/edit_profile/edit'); ?>"><i class='bx bx-dollar-circle'></i><span>Edit Profile</span></a></li>
							
							<li><div class="dropdown-divider mb-0"></div></li>

							<li><a class="dropdown-item" href="<?php echo base_url('admin/logout'); ?>"><i class='bx bx-log-out-circle'></i><span>Logout</span></a>
							</li>
						</ul>
					</div>
				</nav>
			</div>
		</header>
		<!--end header -->
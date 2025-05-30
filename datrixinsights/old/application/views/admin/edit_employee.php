<div class="page-wrapper">
			<!--page-content-wrapper-->
			<div class="page-content-wrapper">
				<div class="page-content">
					<div class="row">
						  <h4><?php echo $page;?></h4>
						 <div class="col-12 col-lg-12">
							<div class="card radius-15 bg-white">
								<div class="card-body">
									 <?php echo form_open(base_url( 'admin/update_employee' ), array( 'id' => 'password', 'class' => 'password', 'method' => 'post', 'autocomplete'=>'off'));?>
                                            <input type="hidden" name="id" value="<?php echo $partner->id;?>" />
									<div class="form-group">
										<label>Employee Name *</label>
								<input class="form-control" type="text" name="name" placeholder="Enter name" value="<?php echo $partner->name;?>" required>
							        </div>
							        <div class="form-group">
							        	<label>Employee Email</label>
								<input class="form-control" type="email" name="email" placeholder="Enter Email" value="<?php echo $partner->email;?>" >
							        </div>
							        <div class="form-group">
							        	<label>Employee Mobile *</label>
								<input class="form-control" type="number" name="mobile" placeholder="Enter Mobile" onKeyPress="if(this.value.length==10) return false;" value="<?php echo $partner->mobile;?>" required>
							        </div>
							        <div class="form-group">
							        	<label>Create Password</label>
								<input class="form-control" type="text" name="password" placeholder="Create Password" value="<?php echo $partner->password;?>" required>
							        </div>
							       
							        
							          <div class="form-group">
								<input class="form-control btn btn-primary" type="submit" value="Update Employee Details">
							        </div>
							    </form>
								</div>
							</div>
						</div> 
					</div>
				</div>
			</div>
</div>
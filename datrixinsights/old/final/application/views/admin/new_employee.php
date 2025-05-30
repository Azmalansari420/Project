<div class="page-wrapper">
			<!--page-content-wrapper-->
			<div class="page-content-wrapper">
				<div class="page-content">
					<div class="row">
						  <h4><?php echo $page;?></h4>
						 <div class="col-12 col-lg-12">
							<div class="card radius-15 bg-white">
								<div class="card-body">
									 <?php echo form_open(base_url( 'admin/add_new_employee' ), array( 'id' => 'password', 'class' => 'password', 'method' => 'post', 'autocomplete'=>'off'));?>
                                            
									<div class="form-group">
								<input class="form-control" type="text" name="name" placeholder="Enter name" required>
							        </div>
							        <div class="form-group">
								<input class="form-control" type="email" name="email" placeholder="Enter Email" >
							        </div>
							        <div class="form-group">
								<input class="form-control" type="number" name="mobile" placeholder="Enter Mobile" onKeyPress="if(this.value.length==10) return false;" required>
							        </div>
							        <div class="form-group">
								<input class="form-control" type="password" name="password" placeholder="Create Password" required>
							        </div>
							        <div class="form-group">
								<input class="form-control btn btn-primary" type="submit" value="Create Employee">
							        </div>
							    </form>
								</div>
							</div>
						</div> 
					</div>
				</div>
			</div>
</div>
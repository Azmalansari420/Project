<div class="page-wrapper">
			<!--page-content-wrapper-->
			<div class="page-content-wrapper">
				<div class="page-content">
					<div class="row">
						  
						  
						 <div class="col-12 col-lg-8">
							<div class="card radius-15 bg-white">
							<h4 style="text-align:center;"><br /><?php echo $page;?></h4>
								<div class="card-body">
									 <?php echo form_open(base_url( 'admin/add_new_partner' ), array( 'id' => 'password', 'class' => 'password', 'method' => 'post', 'autocomplete'=>'off'));?>
                                            
									<div class="form-group">
								<input class="form-control" type="text" name="name" placeholder="Enter name" required>
							        </div>
							        <div class="form-group">
								<input class="form-control" type="email" name="email" placeholder="Enter Email" >
							        </div>
									
							        <div class="form-group">
								<input class="form-control" type="number" name="mobile" placeholder="Enter Mobile" onKeyPress="if(this.value.length==10) return false;" >
							        </div>
							        <div class="form-group">
								<input class="form-control" type="text" name="complete" placeholder="Enter complete url">
							        </div>
									<div class="form-group">
								<input class="form-control" type="text" name="terminate" placeholder="Enter terminate url">
							        </div>
									<div class="form-group">
								<input class="form-control" type="text" name="quotafull" placeholder="Enter quotafull url">
							        </div>
							        <div class="form-group">
								<input class="form-control btn btn-primary" type="submit" value="Add Partner">
							        </div>
							    </form>
								</div>
							</div>
						</div> 
					</div>
				</div>
			</div>
</div>
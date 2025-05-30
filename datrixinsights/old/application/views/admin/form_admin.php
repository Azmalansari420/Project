

<div class="page-wrapper">
			<!--page-content-wrapper-->
			<div class="page-content-wrapper">
				<div class="page-content">
					<div class="row">
						  
						 <div class="col-12 col-lg-6 offset-md-3">
							<div class="card border-lg-top-danger">
								<div class="card-body">
									<div class="card-title d-flex align-items-center">
										<div><i class="bx bxs-user mr-1 font-24 text-danger"></i>
										</div>
										<h5 class="mb-0 text-danger"><?php echo $page;?></h5>
									</div>
									<hr>
<?php
if(!empty($row))
{
	$row = $row[0];
	$id = '/'.$row->admin_id;
}
else
{
	$id = "";
}
?>
									<div class="form-body">
										<form method="post" enctype="multipart/form-data" action="<?=base_url('admin/admin_add_edit'.$id) ?>">
                                    <div class="form-group">
											<label>Name</label>
											<div class="input-group">
												<input type="text" name="name" class="form-control" placeholder="Enter Name" value="<?php if(!empty($row))echo $row->username ?>" >
											</div>
										</div>
									<div class="form-group">
										<label>Email</label>
										<div class="input-group">
											<input type="text" name="email" class="form-control" placeholder="Enter Email" value="<?php if(!empty($row))echo $row->email ?>" >
										</div>
									</div>
									<div class="form-group">
										<label>Password</label>
										<div class="input-group">
											<input type="text" name="password" class="form-control" placeholder="Enter Password" value="<?php if(!empty($row))echo $row->password ?>" >
										</div>
									</div>
									<!-- <div class="form-group">
										<label>Projects select</label>
										<div class="input-group">
												
											<select class="form-control" name="projects[]" multiple="">
												<option>Select Project</option>
												<?php
												foreach ($project as $value) {

													$selected = "";
													if(!empty($row))
													{
														$pro111 = explode(",", $row->projects);
														if(in_array($value->id, $pro111))
															$selected = "selected";
														else
															$selected = "";

													}


												?>
												<option <?=$selected ?> value="<?=$value->id ?>"><?=$value->name ?></option>
											<?php } ?>
											</select>


										</div>
									</div> -->

									<div class="form-group col-md-6">
										<label class="form-label">Upload Image (png,jpg,jpeg)</label>
										<div class="input-group">
											<div class="custom-file">
												<input type="file" class="custom-file-input" id="image" name="image" <?php  echo ""; ?> >
												<label class="custom-file-label" for="image">Choose Image </label>
											</div>
										</div>
										<ul class="add-produc-imgs" id="uploaded-file1">			
											<?php
												$temp_image_number = "";
											if(!empty($row))
							                {
							                    $image = explode("||", $row->image);
							                    $i=0; 
							                    while (count($image) > $i)
							                    {
							                    	$ext = pathinfo($image[$i], PATHINFO_EXTENSION);
							                        
							                        if ($ext=="png" || $ext=="PNG" || $ext=="jpg" || $ext=="JPG" || $ext=="jpeg" || $ext=="JPEG" || $ext=="gif" || $ext=="GIF" || $ext=="webp" || $ext=="WEBP" || $ext=="HTML" || $ext=="html")
							                        {
							                           echo '<li>
																<div class="add-cate-img-1" style="position:relative;">
																<span class="cut-img" id="'.$i.'">x</span>
																	<img src="content/'.$image[$i].'" alt="img">
																</div>
															</li>';
							                        }
							                        
												if ($i==0)
							                        $temp_image_number .= $i;
							                    else
							                        $temp_image_number .= ",".$i;
							                        $i++;
							                    }
							                }
											?>
										</ul>
									</div>

									<input type="hidden" name="call_back" value="<?=base_url('admin/all_admins') ?>">
										
										<button type="submit" class="btn btn-danger px-5" style="width:100%;">Proceed</button>
									</div>
								</form>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>


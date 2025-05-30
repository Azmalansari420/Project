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
                     <div class="form-body">
                        <?php echo form_open(base_url( 'admin/project_add_action' ), array( 'id' => 'password', 'class' => 'password', 'method' => 'post', 'autocomplete'=>'off'));?>
                        <div class="form-group">
                           <label>Client select</label>
                           <div class="input-group">
                              <input list="browsers"  name="cid" id="browser">
                              <datalist id="browsers">
								   <?php
								      $clients = $this->db->get("admin")->result_object();
								      foreach ($clients as $value) {
								   ?>
								   <option value="<?=$value->admin_id ?>"><?=$value->username ?></option>
								   <?php } ?>
								</datalist>
                           </div>
                        </div>
                        <div class="form-group">
                           <label>PID (PID should be unique it could not be reused)</label>
                           <div class="input-group">
                              <?php $pid=$this->admin_model->get_pid();?>
                              <input type="text" name="pid" class="form-control  " placeholder="Enter PID" value="<?php echo $pid;?>" >
                           </div>
                        </div>
                        <div class="form-group">
                           <label>UID</label>
                           <?php $uid=$this->admin_model->get_uid();?>
                           <div class="input-group">
                              <input type="text" name="uid" class="form-control  " placeholder="Enter UID" value="<?php echo $uid;?>" >
                           </div>
                        </div>
                        <div class="form-group">
                           <label>Project Name</label>
                           <div class="input-group">
                              <input type="text" name="project" class="form-control  " placeholder="Enter Project Name" required>
                           </div>
                        </div>
                        <div class="form-group">
                           <label>Client Name</label>
                           <div class="input-group">
                              <input type="text" name="client" class="form-control  " placeholder="Enter Client Name" required>
                           </div>
                        </div>
                        <div class="form-group">
                           <label>CPI</label>
                           <div class="input-group">
                              <input type="number" name="cpi" class="form-control  " step=".01" placeholder="Enter CPI" required>
                           </div>
                        </div>
                        <div class="form-group">
                           <label>Survey Link</label>
                           <div class="input-group">
                              <input type="text" name="link" class="form-control  " placeholder="Enter Survey link" required>
                           </div>
                        </div>
                        <div class="form-group">
                           <label>Project Description</label>
                           <textarea class="form-control" placeholder="Describe about project" rows="3" cols="3" name="msg"></textarea>
                        </div>
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
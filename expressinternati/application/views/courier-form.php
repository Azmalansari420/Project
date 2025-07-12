<form method="post" action="<?=base_url('welcome/courier_enquiry') ?>">
            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                  <label for="exampleFormControlInput1" class="form-label">Sending from India to</label>
                  <select class="form-select" aria-label="Default select example" name="country" required>
                    <option value="" selected>Select Country</option> 
                     <optgroup label="Top Country">
                      <?php
                        $country = $this->crud->selectDataByMultipleWhere('country',array('status'=>1,'type'=>1));
                        foreach($country as $data)
                          { ?>
                        <option value="<?=$data->id ?>"><?=$data->name ?> </option>
                      <?php } ?>
                      </optgroup>
                      <optgroup label="All Country">
                      <?php
                        $country = $this->crud->selectDataByMultipleWhere('country',array('status'=>1,));
                        foreach($country as $data)
                          { ?>
                        <option value="<?=$data->id ?>"><?=$data->name ?> </option>
                      <?php } ?>
                      </optgroup>

                  

                  </select>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label for="exampleFormControlInput1" class="form-label">Package Type</label>
                  <select class="form-select" aria-label="Default select example" id="colorselector" name="p_type" required>
                    <option value="" selected>Select type</option>
                    <option value="Documents">Documents</option>
                    <option value="Non Documents">Non Documents</option>
                  </select>
                </div>
              </div>
            </div>
            <br>
            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                  <label for="exampleFormControlInput1" class="form-label">Weight</label>
                  <select class="form-select" aria-label="Default select example" name="weight" required>
                    <option selected>How Much Weight</option>
                    <?php
                    $weight = $this->crud->selectDataByMultipleWhere('weight',array('status'=>1,));
                    foreach($weight as $data)
                      { ?>
                    <option value="<?=$data->name ?>"><?=$data->name ?></option>
                  <?php } ?>
                  </select>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label for="exampleFormControlInput1" class="form-label">Mobile No</label>
                  <input type="number" class="form-control" placeholder="10 Digit Mobile no " name="mobile" required>
                </div>
              </div>
            </div>
            <br>
            <div class="text-center">
              <button type="submit" name="submit" class="default-btn-one">Find Rates</button>
            </div>
          </form>
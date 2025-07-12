<li class="row" style="margin-top: 25px;">	

    <div class="col-lg">
        <div class="mb-lg-0">
           <label class="form-label">Weight</label>
           <select name="non_weight[]" class="form-control">
            <?php
            $test = $this->crud->selectDataByMultipleWhere('weight',array('status'=>1,));
            foreach($test as $data)
                { ?>
               <option <?php if(!empty($document->non_weight)) if($document->non_weight==$data->name) echo 'selected'; ?> value="<?=$data->name ?>"><?=$data->name ?></option>
           <?php } ?>
           </select>
           
           <!-- <input type="text" class="form-control" name="non_weight[]" value="<?php if(!empty($nondocument->non_weight)) echo $nondocument->non_weight; ?>"> -->
        </div>
     </div>
    <div class="col-lg">
        <div class="mb-lg-0">
           <label class="form-label">DHL</label>
           <input type="text" class="form-control" name="non_dhl[]" value="<?php if(!empty($nondocument->non_dhl)) echo $nondocument->non_dhl; ?>">
        </div>
     </div>
    <div class="col-lg">
        <div class="mb-lg-0">
           <label class="form-label">FedEx</label>
           <input type="text" class="form-control" name="non_fedex[]" value="<?php if(!empty($nondocument->non_fedex)) echo $nondocument->non_fedex; ?>">
        </div>
     </div>
    <div class="col-lg">
        <div class="mb-lg-0">
           <label class="form-label">Aramex</label>
           <input type="text" class="form-control" name="non_aramex[]" value="<?php if(!empty($nondocument->non_aramex)) echo $nondocument->non_aramex; ?>">
        </div>
     </div>
    <div class="col-lg">
        <div class="mb-lg-0">
           <label class="form-label">Ups</label>
           <input type="text" class="form-control" name="non_ups[]" value="<?php if(!empty($nondocument->non_ups)) echo $nondocument->non_ups; ?>">
        </div>
     </div>

    <div class="col-lg " style="padding-top: 10px;">
        <button type="button" class="btn btn-sm mb-2 btn-danger remove-btn mt-3">Remove</button>
    </div>




</li>
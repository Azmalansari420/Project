<li class="row" style="margin-top: 25px;">	

    <div class="col-lg ">
        <div class="mb-lg-0 ">
           <label class="form-label">Weight</label>
           <select name="doc_weight[]" class="form-control">
            <?php
            $test = $this->crud->selectDataByMultipleWhere('weight',array('status'=>1,));
            foreach($test as $data)
                { ?>
               <option <?php if(!empty($document->doc_weight)) if($document->doc_weight==$data->name) echo 'selected'; ?> value="<?=$data->name ?>"><?=$data->name ?></option>
           <?php } ?>
           </select>
           <!-- <input type="text" class="form-control" name="doc_weight[]" value="<?php if(!empty($document->doc_weight)) echo $document->doc_weight; ?>" required> -->
        </div>
     </div>
    <div class="col-lg ">
        <div class="mb-lg-0 ">
           <label class="form-label">DHL</label>
           <input type="text" class="form-control" name="doc_dhl[]" value="<?php if(!empty($document->doc_dhl)) echo $document->doc_dhl; ?>">
        </div>
     </div>
    <div class="col-lg ">
        <div class="mb-lg-0 ">
           <label class="form-label">FedEx</label>
           <input type="text" class="form-control" name="doc_fedex[]" value="<?php if(!empty($document->doc_fedex)) echo $document->doc_fedex; ?>">
        </div>
     </div>
    <div class="col-lg ">
        <div class="mb-lg-0 ">
           <label class="form-label">Aramex</label>
           <input type="text" class="form-control" name="doc_aramex[]" value="<?php if(!empty($document->doc_aramex)) echo $document->doc_aramex; ?>">
        </div>
     </div>
    <div class="col-lg ">
        <div class="mb-lg-0 ">
           <label class="form-label">Ups</label>
           <input type="text" class="form-control" name="doc_ups[]" value="<?php if(!empty($document->doc_ups)) echo $document->doc_ups; ?>">
        </div>
     </div>

    <div class="col-lg " style="">
        <button type="button" class="btn btn-sm mb-2 btn-danger remove-btn mt-3">Remove</button>
    </div>




</li>
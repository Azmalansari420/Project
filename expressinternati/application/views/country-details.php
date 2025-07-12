<?php include("header.php"); ?>
<div class="page-banner bg-1">
  <div class="d-table">
    <div class="d-table-cell">
      <div class="container">
        <div class="page-content">
          <h2><?=$EDITDATA[0]->name ?> </h2>
          <ul>
            <li><a href="">Home</a></li>
            <li><?=$EDITDATA[0]->name ?> </li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="faq-area ptb-80">
  <div class="container">
    <div class="section-title">
      <!-- <span>FAQ</span>
      <h2>Frequently Asked Questions</h2> -->
    </div>
    <div class="faq-contant">
      <div class="row align-items-center">
        <div class="col-lg-7">
          <div class="gurugram">
            <h2><?=$EDITDATA[0]->title ?></h2>
            <br>
            <?=$EDITDATA[0]->content ?>
        </div>
      </div>
      <div class="col-lg-5">
       
        <h4 class="send-courier">Shipping Cost Calculator</h4>
        <div class="col-lg-12 Worldwide">
          <div class="order-form">
            <h2>International</h2>
            <hr>
            <p><span>Send Courier from India to Worldwide</span><br>
          Select Country and Weight from the below list to compare charges.</p><br>
          <?php include('courier-form.php'); ?>
        </div>
      </div>
      <br>
    </div>
    <div class="col-lg-12">
      <br>
      <!-- <p class="courier-charge">Courier Charges from Gurgaon, India to Canada by express International courier as on Apr 2024</p> -->
      <div class="rate-list">
        <div class="row">
          <div class="col-md-12">
            <div class="Documents-btnn">
              <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                <li class="nav-item" role="presentation">
                  <button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home" aria-selected="true">Documents</button>
                </li>
                <li class="nav-item" role="presentation">
                  <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile" aria-selected="false">Non Documents</button>
                </li>
               
              </ul>
            </div>
          </div>
        </div>
        <div class="tab-content" id="pills-tabContent">
          <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
            <table class="table caption-top table-hover">
              <caption></caption>
              <thead>
                <tr>
                  <th scope="col">Weight</th>
                  <th scope="col"><img class="list-logo" src="<?=base_url() ?>assets/img/express-img/dhl.jpg" alt=""></th>
                  <th scope="col"><img class="list-logo" src="<?=base_url() ?>assets/img/express-img/fedex.jpg" alt=""></th>
                  <th scope="col"><img class="list-logo" src="<?=base_url() ?>assets/img/express-img/amrex.jpg" alt=""></th>
                  <th scope="col"><img class="list-logo" src="<?=base_url() ?>assets/img/express-img/ups.jpg" alt=""></th>
                </tr>
              </thead>
              <tbody>

                <?php
                $document = json_decode($EDITDATA[0]->document);
                // print_r($document);
                if(!empty($document))
                {
                  foreach($document as $value)
                    { ?>                
                <tr>
                  <th scope="row"><?=$value->doc_weight ?> </th>
                  <td><?=$value->doc_dhl ?></td>
                  <td><?=$value->doc_fedex ?></td>
                  <td><?=$value->doc_aramex ?></td>
                  <td><?=$value->doc_ups ?></td>
                </tr>
              <?php } } ?>
                
              </tbody>
            </table>
          </div>
          <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
            <table class="table caption-top table-hover">
              <caption></caption>
              <thead>
                <tr>
                  <th scope="col">Weight</th>
                  <th scope="col"><img class="list-logo" src="<?=base_url() ?>assets/img/express-img/dhl.jpg" alt=""></th>
                  <th scope="col"><img class="list-logo" src="<?=base_url() ?>assets/img/express-img/fedex.jpg" alt=""></th>
                  <th scope="col"><img class="list-logo" src="<?=base_url() ?>assets/img/express-img/amrex.jpg" alt=""></th>
                  <th scope="col"><img class="list-logo" src="<?=base_url() ?>assets/img/express-img/ups.jpg" alt=""></th>
                </tr>
              </thead>
              <tbody>
                <?php
                $nondocument = json_decode($EDITDATA[0]->nondocument);
                // print_r($nondocument);
                if(!empty($nondocument))
                {
                  foreach($nondocument as $value1)
                    { ?>                
                <tr>
                  <th scope="row"><?=$value1->non_weight ?> </th>
                  <td><?=$value1->non_dhl ?></td>
                  <td><?=$value1->non_fedex ?></td>
                  <td><?=$value1->non_aramex ?></td>
                  <td><?=$value1->non_ups ?></td>
                </tr>
              <?php } } ?>
              </tbody>
            </table>
          </div>
          <!-- <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">Contact</div> -->
        </div>
      </div>
      <br>
    </div>
 
  </div>
</div>
</div>
</div>
<br>

<?php include("footer.php"); ?>

<script>
//   $(document).ready(function(){
//     $('#colorselector').on('change', function() {
//       if ( this.value == 'Documents')
//       {
//         console.log("docyume");
//         $("#document-div").show();
//       }
//       else
//       {
//         console.log("nondocyume");
//         $("#non-document-div").hide();
//       }
//     });
// });
</script>
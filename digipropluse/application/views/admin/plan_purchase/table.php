<table class="table table-striped table-td-valign-middle table-bordered bg-white">
  <thead>
    <tr>
      <th width="1%">#</th>
      <th>Request ID</th>
      <th>Vendor</th>
      <th>Dealer</th>
      <th>User</th>
      <th>Bill Info</th>
      <th>Plan Name</th>
      <th>Payable Amount</th>
      <th>Status</th>
      <th>Action</th>
    </tr>
  </thead>
  <tbody>
    <?php 
    $i = 1;
    foreach ($ALLDATA as $key => $data) { 
    ?>
    <tr>
      <td><?=$i++; ?>
         <input type="checkbox" name="multiple_delete[]" value="<?php echo $data->id; ?>" class="multiple_delete">
      </td>
      <td><?=$data->requestid ?></td>
      <td><?=getname($data->vendor_id) ?></td>
      <td><?=getname($data->dealer_id) ?></td>
      <td><?=getname($data->user_id) ?></td>
      <td>
        Name:- <?=$data->username ?><br>
        Mobile:- <?=$data->mobile ?><br>
        Email:- <?=$data->email ?><br>
        Pincode:- <?=$data->pincode ?>
      </td>
      <td><?=$data->plan_name ?></td>
      <td><?=$data->final_amt ?></td>
      <td><?=paymentstatus($data->status) ?></td>
     
      <td class="btn-col text-nowrap" width="1%">
        <a href="<?=base_url('admin_con/plan_purchase/purchase_kyc_details?requestid='.$data->requestid) ?>" class="btn btn-success btn-xs m-r-2">KYC Info</a>
        <a href="<?php echo $view_url.$data->id; ?>" class="btn btn-info btn-xs m-r-2">View</a>
        <a href="#" class="btn btn-danger btn-xs text-white delete-btn-ajax" data-id="<?=$data->id ?>">Delete</a>
      </td>
    </tr>
    <?php } ?>
  </tbody>
  <tfoot>
    <tr>
      <td colspan="5">
      Total Data: <?= $total_rows ?> | Total Pages: <?= $total_pages ?>
    </td>
    </tr>
  </tfoot>
</table>

<script>
    $('.delete-btn-ajax').on('click', function() {
      event.preventDefault();
      var id = $(this).data('id');
      Swal.fire({
         title: "Are you sure?",
         showDenyButton: true,
         showCancelButton: true,
         confirmButtonText: "Yes",
      }).then((result) => {
         if (result.isConfirmed) 
         {
            $.ajax({
               type: 'POST',
               url: '<?=($delete_url)?>',
               data: {id: id},
               success: function(response) {
               // console.log(response);
               location.reload();
             }
           });
         }
      });
   });
</script>
<table class="table table-striped table-td-valign-middle table-bordered bg-white">
  <thead>
    <tr>
      <th width="1%">#</th>
      <th>Product Name</th>
      <th>Quantity</th>
      <th>Mobile</th>
      <th>Kilogram</th>
      <th>Name</th>
      <th>Email</th>
      <th>Mobile</th>
      <th>Purpose</th>
      <th>Details</th>
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
      <td><?=$data->p_name ?></td>
      <td><?=$data->quantity ?></td>
      <td><?=$data->mobile ?></td>
      <td><?=$data->mesurmentunit ?></td>
      <td><?=$data->name ?></td>
      <td><?=$data->email ?></td>
      <td><?=$data->mobile ?></td>
      <td><?=$data->purpose ?></td>
      <td><?=$data->details ?></td>
      
      <td class="btn-col text-nowrap" width="1%">
        <!-- <a href="<?php echo $view_url.$data->id; ?>" class="btn btn-info btn-xs m-r-2">View</a> -->
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
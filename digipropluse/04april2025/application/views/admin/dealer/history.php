<!DOCTYPE html>
<html lang="en">
   <title><?=$page_title ?></title>
   <?php $this->load->view('admin/include/allcss') ?>
   <body>
      <div id="app" class="app app-header-fixed app-sidebar-fixed">
         <?php $this->load->view('admin/include/topbar') ?>
         <?php $this->load->view('admin/include/sidebar') ?>
         <div id="content" class="app-content">
            <div class="card ">
               <div class="card-header card-header-inverse">
                  <h4 class="card-header-title"><?=$page_title ?> </h4>
                  <div class="card-header-btn">
                     <button  class="btn btn-danger delete_multiple" >Delete Multiple</button>
                     <input type="search" name="" id="search">
                  </div>
               </div>
               <div class="card-body" id="table-data">
                <table class="table table-striped table-td-valign-middle table-bordered bg-white">
                  <thead>
                    <tr>
                      <th width="1%">#</th>
                      <th>Type</th>
                      <th>User ID</th>
                      <th>Amount</th>
                      <th>Balance</th>
                      <th>Message</th>
                      <th>Date/Time</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php 
                    $i = 1;
                    $ALLDATA = $this->db->get_where('user_history',array('user_id'=>$this->input->get('user_id')))->result_object();
                    foreach ($ALLDATA as $key => $data) { 
                    ?>
                    <tr>
                      <td><?=$i++; ?>
                         <input type="checkbox" name="multiple_delete[]" value="<?php echo $data->id; ?>" class="multiple_delete">
                      </td>
                      <td><?=$data->type ?></td>
                      <td><?=getname($data->user_id) ?></td>
                      <td><?=$data->amount ?></td>
                      <td><?=$data->balance ?></td>
                      <td><?=$data->message ?></td>
                      <td><?=$data->date_time ?></td>
                      
                      
                    </tr>
                    <?php } ?>
                  </tbody>
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
               </div>
               
            </div>
         </div>
         <a href="#" data-click="scroll-top" class="btn-scroll-top fade"><i class="fa fa-arrow-up"></i></a>
      </div>
      <?php $this->load->view('admin/include/theams') ?>
      <?php $this->load->view('admin/include/allscript') ?>
      
   </body>
</html>
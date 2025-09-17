<!-- Favicon -->
      <?php 
      $user = $this->crud->selectDataByMultipleWhere('tbl_admin',array('id'=>$this->session->userdata("id"),));
      foreach($user as $data)
            { ?>
      <link rel="icon" href="<?php echo base_url(); ?>media/uploads/<?php echo $data->image; ?>" type="image/png" />
<?php } ?>  
      
      <link rel="stylesheet" href="<?php echo base_url(); ?>media/admin/css/backend-plugin.min.css">
      <link rel="stylesheet" href="<?php echo base_url(); ?>media/admin/css/backende209.css?v=1.0.0"> 
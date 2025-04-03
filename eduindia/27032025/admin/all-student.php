<?php  
$spinner = '<i class="fa fa-spinner fa-spin" style="font-size: 25px;margin: 0 auto;display: block;width: fit-content;"></i>';
$table_id = 1; 
?>
<?php 
   include_once('include/topmenu.php');
   $page_name= "add-student.php";
   $view_page_name= "full-student.php";
   
	ini_set('display_errors', 1);
	ini_set('display_startup_errors', 1);
	error_reporting(E_ALL);

$p_s = '';
if(isset($_GET['p_s'])) $p_s = $_GET['p_s'];
?>
  
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header"> 
      <h1>All Students List <small><b> Manage View</b></small>
      </h1>
     
    </section>
<section class="content" id="ppg">
      <div class="row">
        <div class="col-xs-12">

          <div class="box box-info">
            <div class="box-header">
          <h3 class="box-title"><i class="fa fa-shopping-cart"></i> All Students</h3>
			<div class="box-tools pull-right">
				  <a href="student_export_to_excel.php" class="btn btn-info btn-sm">
              <i class="fa fa-save"></i>Export To Excel</a>
              <a href="add-student.php" class="btn btn-info btn-sm">
              <i class="fa fa-save"></i> Add New</a>
			 
			  <a href="welcome.php" data-toggle="tooltip" title="Cancel" class="btn btn-info btn-sm" >
              <i class="fa fa-reply"></i> Cancel </a>
            
          </div>
        </div>
            <!-- /.box-header -->
            <div class="box-body">
            	
              <div class="row">
                
                <div class="col-md-7">
                  
                </div>
                <div class="col-md-4">
                  <input type="text" class="form-control list-search" placeholder="Enter keyword" data-url="" data-keys="user_register.first_name,user_register.mobile,user_register.join_date,user_register.reg_id,user_register.email,branch.b_name,course.name" data-target="1" data-table_id="<?=$table_id ?>" id="list-searchid-1" style="margin-bottom: 20px;">                  
                </div>
                <div class="col-md-1">
                  <button class="btn btn-primary" id="s-btn" data-table_id="<?=$table_id ?>">Search</button>
                </div>
              </div>




							<div class="table-responsive" id="table1">
								<?=$spinner ?>
	            </div>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
   <?php include_once('include/footer.php');?>




<script>

	var page = 1;
  var type = 1;
  var data = [];
  var keys_url = {};
  data['url'] = "ajax-all-student.php";
  data['table_id'] = 1;
  load_table(data);


	// $(document).on("keyup", ".list-search",(function(e) {
  //     data['table_id'] = $(this).data("table_id");
  //     $("#table"+data['table_id']).html('<?=$spinner; ?>');
  //     load_table(data);
  // }));
  $(document).on("click", "#s-btn",(function(e) {
      data['table_id'] = $(this).data("table_id");
      $("#table"+data['table_id']).html('<?=$spinner; ?>');
      load_table(data);
  }));
	$(document).on("click", ".page-number-custom",(function(e) {      
      event.preventDefault();
      page = $(this).data("page");
      data['table_id'] = $(this).data("table_id");
      $("#table"+data['table_id']).html('<?=$spinner; ?>');
      load_table(data);
   }));

   function load_table(data)
   {
      keys_url['status'] = $("#statuschange"+data['table_id']).val();
      keys_url['order_by'] = $("#order_bychange"+data['table_id']).val();
      keys_url['limit'] = $("#limitchange"+data['table_id']).val();
      keys_url['page'] = page;
      keys_url['type'] = type;
      keys_url['p_s'] = "<?=$p_s ?>";
      keys_url['table_id'] = data['table_id'];
      keys_url['filter_search_value'] = $("#list-searchid-"+data['table_id']).val();
      keys_url['keys'] = $("#list-searchid-"+data['table_id']).data("keys");
      var url = data['url'];
      var post_data = keys_url;
      var post_data = JSON.stringify(post_data);
      $.ajax({
         url:url,
         type:"post",
         data:{post_data:post_data},
         success:function(d)
         {
           // console.log(d);
           $("#table"+data['table_id']).html(d);
             $(".loading").removeClass("active");
         },
         error: function(e) 
         {
            $(".loading").removeClass("active");
         }
      });
   }
</script>
  

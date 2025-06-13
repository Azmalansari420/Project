<?php include("header.php");

$project_id = $_GET['project_id'] ?? '';
$status = $_GET['status'] ?? '';
$ip_address = $_GET['ip_address'] ?? '';


if (!empty($project_id) && !empty($status) && !empty($ip_address)) {
    $fetch_data = $con->fetch_product("user", array(
        'project_id' => $project_id,
        'status' => $status,
        'ip_address' => $ip_address
    ));
} elseif (!empty($project_id) && !empty($status)) {
    $fetch_data = $con->fetch_product("user", array(
        'project_id' => $project_id,
        'status' => $status
    ));
} elseif (!empty($project_id) && !empty($ip_address)) {
    $fetch_data = $con->fetch_product("user", array(
        'project_id' => $project_id,
        'ip_address' => $ip_address
    ));
} elseif (!empty($status) && !empty($ip_address)) {
    $fetch_data = $con->fetch_product("user", array(
        'status' => $status,
        'ip_address' => $ip_address
    ));
} elseif (!empty($project_id)) {
    $fetch_data = $con->fetch_product("user", array('project_id' => $project_id));
} elseif (!empty($status)) {
    $fetch_data = $con->fetch_product("user", array('status' => $status));
} elseif (!empty($ip_address)) {
    $fetch_data = $con->fetch_product("user", array('ip_address' => $ip_address));
} else {
    $fetch_data = $con->get("user");
}
$fetch_total_count = count($con->get("user"));  // ✅ Add this line
$check_count = count($fetch_data);

   
   ?>
<link href="select2/select2.min.css" rel="stylesheet" />
<link rel="stylesheet" type="text/css" href="assets/dataTables.css">
<link rel="stylesheet" type="text/css" href="assets/buttons.css">
<style>
   select.form-control:not([size]):not([multiple]) {
   height: 100%!important;
   }
   .my-ip-box {
    background-color: #f5f5f5;
    border: 2px solid #007bff;
    padding: 15px;
    border-radius: 10px;
    margin-bottom: 20px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
}

.my-ip-box h2 {
    font-size: 24px;
    color: #007bff;
    margin: 0;
}


/* Page header */
.page-header {
    background-color: #e9f0fb;
    padding: 20px;
    border-radius: 10px;
    margin-bottom: 20px;
    border-left: 6px solid #007bff;
}

/* Headings */
.header-title {
    font-size: 28px;
    font-weight: 600;
    color: #333;
}

/* Strong labels and counts */
.page-header strong {
    color: #007bff;
    font-weight: 500;
}

/* Card */
.card {
    box-shadow: 0 6px 12px rgba(0, 0, 0, 0.08);
    border-radius: 12px;
    border: none;
}

/* Form inputs and selects */
.form-group label {
    font-weight: 600;
    color: #444;
}
.select2-container--default .select2-selection--single {
    height: 38px;
    padding: 6px 12px;
    border-radius: 6px;
    border-color: #ccc;
}
input[type="submit"].btn-info {
    background-color: #007bff;
    border: none;
    font-weight: 600;
    padding: 10px 20px;
    transition: background 0.3s;
}
input[type="submit"].btn-info:hover {
    background-color: #0056b3;
}

/* Data table */
#example {
    background-color: #fff;
    border-radius: 8px;
    overflow: hidden;
}
#example thead {
    background-color: #007bff;
    color: white;
    font-size: 16px;
}
#example tbody tr:nth-child(even) {
    background-color: #f9f9f9;
}
#example td, #example th {
    vertical-align: middle !important;
    text-align: center;
}

/* Table border color and padding */
.table th, .table td {
    border: 1px solid #dee2e6;
    padding: 10px;
}

/* Highlighted status background fix */
.table td[style*="background"] {
    color: #000;
    font-weight: 500;
}

/* Count and record summary */
p strong span {
    font-size: 18px;
}

/* IP box already included but slightly refined here */
.my-ip-box {
    background-color: #f0f9ff;
    border: 2px dashed #007bff;
    padding: 15px;
    border-radius: 10px;
    margin-bottom: 25px;
    box-shadow: 0 2px 8px rgba(0, 0, 0, 0.05);
}
.my-ip-box h2 {
    font-size: 22px;
    color: #0056b3;
}

/* Responsive tweaks */
@media (max-width: 768px) {
    .form-row > div {
        margin-bottom: 15px;
    }
}

</style>
<!-- Page Container START -->
<div class="page-container">
<!-- Content Wrapper START -->
<div class="main-content">
   <div class="container">
      <div class="page-header">
         <h2 class="header-title">Manage Data</h2>
         <!--<p><strong>Select Details <?php echo $_SERVER['REMOTE_ADDR']; ?> (Fresh IP)</strong></p>-->
         <p><strong>Complete Count :- <?php echo $fetch_total_count; ?></strong></p>
         
      <div class="card">
         <div class="card-body">
            <form class="m-t-15" action="" method="GET" >
               <div class="form-row">

                  <div class="col-md-12 text-center my-ip-box">
                      <h2>My IP :- <?php echo $_SERVER['REMOTE_ADDR']; ?></h2>
                  </div>



                  <div class="col-md-3">
                     <div class="form-group">
                        <label class="control-label">Search By :</label>
                        <select name="project_id"   class="select2 form-control search_option">
                           <option value="">Select Project ID</option>
                           <?php
                              $fetch_data_by_group=$con->fetch_data_by_group("project_id","user");
                              if(is_array($fetch_data_by_group) || is_object($fetch_data_by_group) && !empty($fetch_data_by_group)){
                                 $i=0;
                                 foreach ($fetch_data_by_group as  $value) {
                                     $i++;
                                     $selected = '';
                                     if($project_id==$value['project_id'])
                                     $selected = 'selected';
                              ?>
                           <option <?=$selected ?> value="<?php echo $value['project_id']; ?>"><?php echo $value['project_id']; ?></option>
                           <?php } } ?>
                        </select>
                     </div>
                  </div>
                  <div class="col-md-3">
                     <div class="form-group">
                        <label class="control-label">Status :</label>
                        <select name="status"  class="select2 form-control search_option">
                           <option value="" selected>All</option>
                           <?php
                              $fetch_data_by_group=$con->fetch_data_by_group("status","user");
                              if(is_array($fetch_data_by_group) || is_object($fetch_data_by_group) && !empty($fetch_data_by_group)){
                                 $i=0;
                                 foreach ($fetch_data_by_group as  $value) {
                                       $i++;
                                       $selected = '';
                                       if($status==$value['status'])
                                       $selected = 'selected';
                              
                              ?>
                           <option <?=$selected ?> value="<?php echo $value['status']; ?>"><?php echo $value['status']; ?></option>
                           <?php } } ?>
                        </select>
                     </div>
                  </div>
                   <div class="col-md-3" style="display:none">
                     <div class="form-group">
                         <label class="control-label">Search By Ip Address:</label>
                        <select name="ip_address"  class="select2 form-control search_option">
                          <option value="">Select Ip Address</option>
                          <?php
                        $fetch_data_by_group=$con->fetch_data_by_group("ip_address","user");
                        if(is_array($fetch_data_by_group) || is_object($fetch_data_by_group) && !empty($fetch_data_by_group)){
                           $i=0;
                           foreach ($fetch_data_by_group as  $value) {
                                 $i++;
                        
                        ?>
                          <option value="<?php echo $value['ip_address']; ?>" <?= ($_GET['ip_address'] ?? '') == $value['ip_address'] ? 'selected' : '' ?>>
                               <?php echo $value['ip_address']; ?>
                           </option>
                        <?php } } ?>
                        </select>
                     
                        
                        
                     </div>
                     </div>

                  <div class="col-md-2">
                     <div class="form-group" style="margin-top:20px;">
                        <!--<label class="control-label">Search By :</label>-->
                        <input style="color: #000;background: aliceblue;" type="submit" name="search" value="Search" class="btn btn-info">
                     </div>
                  </div>
               </div>
            </form>
            <?php
               ?>
            <p style="color:#2d496b"><strong>Total No. Of Records is <span style="color:red"><?php echo($fetch_total_count); ?></span> And Showing <span style="color:red"><?php echo($check_count); ?></span> </strong></p>
            <div class="table-overflow">
               <table id="example" class="table table-hover table-xl">
                  <thead>
                     <tr>
                        <th>S.No</th>
                        <th>Member Id</th>
                        <!-- <th>Respondent ID</th> -->
                        <th>Project ID</th>
                        <th>Status</th>
                        <th>I.P Address</th>
                        <th>Start Time</th>
                        <th>End Time</th>
                        <th>Date</th>
                     </tr>
                  </thead>
                  <tbody>
                     <?php
                        
                        
                        $i = 0;
                        if (!empty($fetch_data) && (is_array($fetch_data) || is_object($fetch_data))) {
                            foreach ($fetch_data as $value) {
                                $i++;
                                if ($value['status'] == "Complete") {
                                    $bg_color = "#3fbf55";
                                } elseif ($value['status'] == "Terminated") {
                                    $bg_color = "#f00";
                                } elseif ($value['status'] == "Quotafull") {
                                    $bg_color = "#f5ee14";
                                } else {
                                    $bg_color = "#ffffff";
                                }
                        ?>
                                <tr>
                                    <td><?= $i ?></td>
                                    <td><?= $value['member_id'] ?></td>
                                    <td><?= $value['project_id'] ?></td>
                                    <td style="background:<?= $bg_color ?>"><?= $value['status'] ?></td>
                                    <td><?= $value['ip_address'] ?></td>
                                    <td><?= substr($value['register_date'], 10, 10) ?></td>
                                    <td><?= substr($value['end_time'], 10, 10) ?></td>
                                    <td><?= substr($value['register_date'], 0, 10) ?></td>
                                </tr>
                        <?php
                            }
                        }
                        
                            
                             ?>
                  </tbody>
               </table>
            </div>
         </div>
      </div>
   </div>
</div>
<!-- Content Wrapper END -->
<!-- Page Container END -->
<?php include("footer.php");?>
<script type="text/javascript" src="assets/jquary.js"></script>
<script type="text/javascript" src="assets/datatable.js"></script>
<script type="text/javascript" src="assets/buttons.js"></script>
<script type="text/javascript" src="assets/jszip.js"></script>
<script type="text/javascript" src="assets/pdfmake.js"></script>
<script type="text/javascript" src="assets/fonts.js"></script>
<script type="text/javascript" src="assets/html5_min.js"></script>
<script type="text/javascript" src="assets/print.js"></script>
<script type="text/javascript">
   $(document).ready(function() {
   $('#example').DataTable( {
       dom: 'Bfrtip',
       buttons: [
           'copy', 'csv', 'excel', 'pdf', 'print'
       ]
   } );
   } );
</script>
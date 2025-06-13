<?php
include("../../include/config.php");

if(isset($_POST['del_imgs']) && !empty($_POST['del_imgs']) && is_numeric($_POST['del_imgs'])){
 $del_img_id =  $_POST['del_imgs'];
  $row = $con->delete('all_media',$del_img_id);
  echo $row;
}

if(isset($_POST['search']) && !empty($_POST['search'])){
$fetch_by_year_id=$con->data_fetch_by_condition("user",array('project_id' => $_POST['search'] )," or ");
if(is_array($fetch_by_year_id) || is_object($fetch_by_year_id) && !empty($fetch_by_year_id)){
$i=0;
foreach ($fetch_by_year_id as  $value) {
	$i++;
?>
<tr>
 <td><?php echo $i; ?></td>
                                               
                                                
                                                 <td><?php echo $value['member_id']; ?></td>
                                                 <td><?php echo $value['project_id']; ?></td>
                                                  <td><?php echo $value['status']; ?></td>
                                                  <td><?php echo $value['ip_address']; ?></td>
                                                  <td><?php echo substr($value['register_date'],10,10); ?></td>
                                                    <td><?php echo substr($value['register_date'],0,10); ?></td>
                                                     </tr>
	             
<?php } } }?>
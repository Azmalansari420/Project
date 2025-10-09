<?php

    $url_id        = @$_GET['remove_id'];
    $table_name = @$_GET['table_name'];
    $column_name = @$_GET['column_name'];
    $image_name = @$_GET['image_name'];
  //DB config.php
  include_once('../lib/all_files.php');
  $col_val = array(
                "$column_name"=>"",
                );
                // print_r($col_val);
  $update = $con->update($table_name,$col_val,array('id' =>$url_id ));
   
  @unlink(AUP.$image_name);
  
	if($update==1){
	   alert('Successful Upload','admit-setting.php?id='.$url_id);   
    }
  
//   print_r($fs);
?>
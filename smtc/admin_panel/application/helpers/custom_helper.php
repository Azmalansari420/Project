<?php

function get_product_slug($slug_name,$product_id='',$i='') 
{

    $ci = &get_instance();
    $slug_name_with_num = $slug_name;
    $slug_name_with_num .= ($i!='') ? '-'.$i : ""; 
    $where = !empty($product_id) ? " AND id != '".$product_id."'" : ""; 
    $sql = "SELECT slug FROM products WHERE slug='$slug_name_with_num'" . $where;

    $query = $ci-> db-> query($sql);

    if($query->num_rows()) 
    {
        $i = (int)$i + 1;
        return get_product_slug($slug_name,$product_id,$i);
    } 
    else 
    {
        return $slug_name_with_num;
    }

}

function get_blog_post_slug($slug_name,$post_id='',$i='') 
{

    $ci = &get_instance();
    $slug_name_with_num = $slug_name;
    $slug_name_with_num .= ($i!='') ? '-'.$i : ""; 
    $where = !empty($product_id) ? " AND id != '".$product_id."'" : ""; 
    $sql = "SELECT slug FROM blog WHERE slug='$slug_name_with_num'" . $where;

    $query = $ci-> db-> query($sql);

    if($query->num_rows()) 
    {
        $i = (int)$i + 1;
        return get_product_slug($slug_name,$post_id,$i);
    } 
    else 
    {
        return $slug_name_with_num;
    }

}

function get_location_slug($slug_name,$city_id='',$i='') 
{

    $ci = &get_instance();
    $slug_name_with_num = $slug_name;
    $slug_name_with_num .= ($i!='') ? '-'.$i : ""; 
    $where = !empty($city_id) ? " AND id != '".$city_id."'" : ""; 
    $sql = "SELECT slug FROM locations WHERE slug='$slug_name_with_num'" . $where;

    $query = $ci-> db-> query($sql);

    if($query->num_rows()) 
    {
        $i = (int)$i + 1;
        return get_location_slug($slug_name,$product_id,$i);
    } 
    else 
    {
        return $slug_name_with_num;
    }

}

function get_cat_slug($slug_name,$cat_id='',$i='') 
{

    $ci = &get_instance();
    $slug_name_with_num = $slug_name;
    $slug_name_with_num .= ($i!='') ? '-'.$i : ""; 
    $where = !empty($cat_id) ? " AND id != '".$cat_id."'" : ""; 
    $sql = "SELECT slug FROM category WHERE slug='$slug_name_with_num'" . $where;

    $query = $ci-> db-> query($sql);

    if($query->num_rows()) 
    {
        $i = (int)$i + 1;
        return get_cat_slug($slug_name,$cat_id,$i);
    } 
    else 
    {
        return $slug_name_with_num;
    }

}

function get_skus_slug($slug_name,$sku_id='',$i='') 
{

    $ci = &get_instance();
    $slug_name_with_num = $slug_name;
    $slug_name_with_num .= ($i!='') ? '-'.$i : ""; 
    $where = !empty($sku_id) ? " AND id != '".$sku_id."'" : ""; 
    $sql = "SELECT slug FROM skus WHERE slug='$slug_name_with_num'".$where;

    $query = $ci-> db-> query($sql);

    if($query->num_rows()) 
    {
        $i = (int)$i + 1;
        return get_skus_slug($slug_name,$sku_id,$i);
    } 
    else 
    {
        return $slug_name_with_num;
    }

}

function get_user_info() 
{

	$ci = &get_instance();
 
	return $ci->session->userdata('userinfo');

}

function is_user_admin() 
{
  
	$user_info = get_user_info();
	return ($user_info->is_admin==1);

}

function check_for_access() 
{
	
	if(!is_user_admin()) {
		show_404();
	}

}

function get_web_url() {
    $ci = &get_instance();
    return $ci->config->item('web_url');
}

//-----export to csv function------------
 function export_to_csv($header , $data ,$filename)
{
    header("Content-disposition: attachment; filename=$filename");
    header("Content-Type: text/csv");

    print_r(implode(',', $header));
    print_r("\n");
    foreach ($data as $key => $value) {
        print_r(implode(',', $value));
            print_r("\n");
    }
}


function upload_image($fileData,&$postData,$uploadPath,$redirectPath,$prev_data,$id='')  {
    
    $ci = &get_instance();

    if(!isset($fileData['image']) && @$prev_data['image']!='') {
        unlink($uploadPath . $prev_data['image']);
        $postData['image']='';
        return;        
    }

    if ($fileData['image']['name'] != '') {

                $config['upload_path'] = $uploadPath;
                $config['allowed_types'] = 'gif|jpg|png|jpeg';
                $config['encrypt_name'] = true;
                $fileData['image']['name'] ;
     
                $ci->load->library('upload', $config);
                
                if ($ci->upload->do_upload('image')) {
                    $uploadedData = $ci->upload->data();
                    $postData['image'] = $uploadedData['file_name'];
                    if ($id != '' && @$prev_data['image']!='') {
                        unlink($uploadPath . $prev_data['image']);
                    }
                } else {

                    $ci->session->set_flashdata('error', $ci->upload->display_errors());
                    redirect($redirectPath);
                }

            }
    }
?>
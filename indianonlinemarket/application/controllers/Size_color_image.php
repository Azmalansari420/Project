<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Size_color_image extends CI_Controller {

	
	
	function image_by_colorsize()
    {
        $result = array();        

        $p_id = $this->input->post("p_id");
        $size_id = $this->input->post("size_id");
        $color_id = $this->input->post("color_id");

        $rowd = array();
        if(!empty($p_id) && !empty($size_id) && !empty($color_id))
        {
            $where = array(
                    "p_id"=>$p_id,
                    "size_id"=>$size_id,
                    "color_id"=>$color_id,
                );
            $this->db->group_by('size_id');
            $rowd = $this->db->get_where("all_images",$where)->result_object();
        }

        $image1 = '';
        $image2 = '';
        $card = '';
        $card .= $this->load->view("product-image",array('rowd'=>$rowd),true); 

		foreach($rowd as $key => $row)
        {
            $allimage = json_decode($row->image);
            foreach ($allimage as $key => $value) 
            {
                $imageget = base_url()."media/uploads/product/$value";
                $image1 .= ' <div class="product_img_two_slider">
                            <img src="'.$imageget.'" alt="img" />
                        </div>'; 
                $image2 .= '<div class="nav_img">
                            <img src="'.$imageget.'" alt="img" />
                        </div>'; 
            }
        }

        $price = 0;
        $cut_price = 0;
        $stock = 0;
            if(!empty($rowd))
                   $price = $rowd[0]->price;
            if(!empty($rowd))
                   $cut_price = $rowd[0]->cut_price;
        $html = array(
            "price"=>number_format($price,2),
            "cut_price"=>number_format($cut_price,2),
        );
        // $stock = 0;
        $stock = $rowd[0]->stock;
        // $html .= $this->load->view("product-image",array('rowd'=>$rowd),true);      

		
        if(!empty($image1))
        {
            $result['message'] = "Data Fetch Successfully";
            $result['status']  = "200";
            $result['data1']    = $image1;
            $result['data2']    = $image2;
            $result['html']    = $html;
            $result['stock']    = $stock;
            $result['card']    = $card;
        }
        else
        {
            $result['message'] = "No Product Found";
            $result['status']  = "400";
            $result['data1']    = $image1;
            $result['data2']    = $image2;
            $result['html']    = $html;
            $result['stock']    = $stock;
            $result['card']    = $card;
        }

        echo json_encode($result);
    }






}

<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Wishlist extends CI_Controller {


	public function add_to_wishlist()
	{
		$result = array();

		$p_id = $this->input->post('p_id');
		$temp_user_id = temp_session_id();
		$color_val = $this->input->post('color_val');
		$size_val = $this->input->post('size_val');
		$quantity = 1;
		$vendor_id = 0;
		$vendor_get = $this->crud->selectDataByMultipleWhere('product',array('id'=>$p_id,));
		if(!empty($vendor_get))
			$vendor_id = $vendor_get[0]->vendor_id;

		$data = array(
			"p_id"=>$p_id,
			"quantity"=>$quantity,
			"color_id"=>$color_val,
			"size_id"=>$size_val,
			"temp_user_id"=>$temp_user_id,
			"vendor_id"=>$vendor_id,
		);

		$get_cart = $this->crud->selectDataByMultipleWhere('add_to_wishlist',array("p_id"=>$p_id,"temp_user_id"=>$temp_user_id,'color_id'=>$color_val,'size_id'=>$size_val,));

		if(empty($get_cart))
		{
		 $this->crud->insert('add_to_wishlist',$data);
		 $result['status'] = '200';
		 $result['message'] = 'Add to Wishlist Successfully';
		 $result['data'] = $data;
		}
		else
		{
			$this->db->update('add_to_wishlist',$data,array("temp_user_id"=>$temp_user_id,"p_id"=>$p_id,'color_id'=>$color_val,'size_id'=>$size_val,));
			$result['status'] = '400';
			$result['message'] = 'Wishlist Update Successfully';
			$result['data'] = $data;
		}
		echo json_encode($result);
	}



	/*------add in cart from wishlist------*/

	public function add_to_cart_from_wishlist()
	{
		$result = array();

		$id = $this->input->post('id');

		$check_wishlist = $this->crud->selectDataByMultipleWhere('add_to_wishlist',array('id'=>$id,));
		if(!empty($check_wishlist))
		{
			$p_id = $check_wishlist[0]->p_id;
			$quantity = $check_wishlist[0]->quantity;
			$temp_user_id = $check_wishlist[0]->temp_user_id;
			$vendor_id = $check_wishlist[0]->vendor_id;
			$color_id = $check_wishlist[0]->color_id;
			$size_id = $check_wishlist[0]->size_id;
		}

		$cart_data = array(
			"p_id"=>$p_id,
			"quantity"=>$quantity,
			"temp_user_id"=>$temp_user_id,
			"vendor_id"=>$vendor_id,
			"color_id"=>$color_id,
			"size_id"=>$size_id,
		);

		$getolddata = $this->crud->selectDataByMultipleWhere('add_to_temp_cart',array('p_id'=>$p_id,'color_id'=>$color_id,'size_id'=>$size_id,'temp_user_id'=>$temp_user_id));

		if(empty($getolddata))
		{
			$this->crud->insert('add_to_temp_cart',$cart_data);
			$this->db->delete("add_to_wishlist",array("id"=>$id,));

			$result['status'] = '200';
			$result['message'] = 'Add to Cart Successfully';
			$result['data'] = $cart_data;
		}
		else
		{
			$this->db->delete("add_to_wishlist",array("id"=>$id,));
			$result['status'] = '400';
			$result['message'] = 'Already Added';
			$result['data'] = [];
		}
		echo json_encode($result);
	}


	/*--------delete wishlist iteam---*/

	public function delete_wishlist()
	{
		$result = array();

		$id = $this->input->post('id');

		$check_wishlist = $this->crud->selectDataByMultipleWhere('add_to_wishlist',array('id'=>$id,));

		if(!empty($check_wishlist))
		{
			$this->crud->delete('add_to_wishlist',$id);
			$result['status'] = '200';
			$result['message'] = 'Iteam Remove Successfully';
			$result['status'] = $id;
		}
		else
		{
			$result['status'] = '400';
			$result['message'] = 'Not Found';
			$result['status'] = [];
		}
		echo json_encode($result);
	}



	/*add to wishlist from product detaisl*/

	public function product_details_wishlist()
	{
		$result = array();

		$p_id = $this->input->post('p_id');
		$temp_user_id = temp_session_id();
		$color_val = $this->input->post('color_val');
		$size_val = $this->input->post('size_val');
		$quantity = 1;
		$vendor_id = 0;
		$vendor_get = $this->crud->selectDataByMultipleWhere('product',array('id'=>$p_id,));
		if(!empty($vendor_get))
			$vendor_id = $vendor_get[0]->vendor_id;

		$data = array(
			"p_id"=>$p_id,
			"quantity"=>$quantity,
			"color_id"=>$color_val,
			"size_id"=>$size_val,
			"temp_user_id"=>$temp_user_id,
			"vendor_id"=>$vendor_id,
		);

		$get_cart = $this->crud->selectDataByMultipleWhere('add_to_wishlist',array("p_id"=>$p_id,"temp_user_id"=>$temp_user_id,'color_id'=>$color_val,'size_id'=>$size_val,));

		if(empty($get_cart))
		{
		 $this->crud->insert('add_to_wishlist',$data);
		 $result['status'] = '200';
		 $result['message'] = 'Add to Wishlist Successfully';
		 $result['data'] = $data;
		}
		else
		{
			$this->db->update('add_to_wishlist',$data,array("temp_user_id"=>$temp_user_id,"p_id"=>$p_id,'color_id'=>$color_val,'size_id'=>$size_val,));
			$result['status'] = '400';
			$result['message'] = 'Wishlist Update Successfully';
			$result['data'] = $data;
		}
		echo json_encode($result);
	}












}
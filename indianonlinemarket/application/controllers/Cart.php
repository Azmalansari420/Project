<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cart extends CI_Controller {



	public function add_to_cart()
	{
		$result = array();

		$p_id = $this->input->post('p_id');
		$temp_user_id = temp_session_id();
		$quantity = $this->input->post('quantity');
		$color_val = $this->input->post('color_val');
		$size_val = $this->input->post('size_val');

		$vendor_get = $this->crud->selectDataByMultipleWhere('product',array('id'=>$p_id,));

		$data = array(
			"p_id"=>$p_id,
			"quantity"=>$quantity,
			"color_id"=>$color_val,
			"size_id"=>$size_val,
			"temp_user_id"=>$temp_user_id,
			"vendor_id"=>$vendor_get[0]->vendor_id,
		);

		$get_cart = $this->crud->selectDataByMultipleWhere('add_to_temp_cart',array("p_id"=>$p_id,"temp_user_id"=>$temp_user_id,'color_id'=>$color_val,'size_id'=>$size_val,));

		if(empty($get_cart))
		{
		 $this->crud->insert('add_to_temp_cart',$data);
		 $result['status'] = '200';
		 $result['message'] = 'Add to Cart Successfully';
		 $result['data'] = $data;
		}
		else
		{
			$this->db->update('add_to_temp_cart',$data,array("temp_user_id"=>$temp_user_id,"p_id"=>$p_id,'color_id'=>$color_val,'size_id'=>$size_val,));
			$result['status'] = '400';
			$result['message'] = 'Cart Update Successfully';
			$result['data'] = $data;
		}
		echo json_encode($result);
	}

	/*delete cart*/

	public function remove_cart()
	{
		$result = array();

		$id = $this->input->post('id');
		
		$data = array(
			"id"=>$id,
		);

		if(!empty($data))
		{
		 $this->crud->delete('add_to_temp_cart',$id);
		 $result['status'] = '200';
		 $result['message'] = 'Item Removed Successfully';
		 $result['data'] = $data;
		}
		else
		{
			$result['status'] = '400';
			$result['message'] = 'Already Removed';
			$result['data'] = $data;
		}
		echo json_encode($result);
	}

	/*-----update cart----*/
	
	public function update_cart()
	{
		$result = array();

		$id = $this->input->post('id');
		$quantity = $this->input->post('quantity');
		
		$data = array(
			"id"=>$id,
			"quantity"=>$quantity,
		);

		if(!empty($data))
		{
			 $this->db->update('add_to_temp_cart',array('quantity'=>$quantity),array('id'=>$id,));
			 $result['status'] = '200';
			 $result['message'] = 'Quantity Update Successfully';
			 $result['data'] = $data;
		}
		else
		{
			$result['status'] = '400';
			$result['message'] = 'Somthing Wrong';
			$result['data'] = [];
		}
		echo json_encode($result);
	}


// ---- product details add cart

	public function product_details_cart()
	{
		$result = array();

		$p_id = $this->input->post('p_id');
		$temp_user_id = temp_session_id();
		$quantity = $this->input->post('quantity');
		$color_val = $this->input->post('color_val');
		$size_val = $this->input->post('size_val');

		$vendor_get = $this->crud->selectDataByMultipleWhere('product',array('id'=>$p_id,));

		$data = array(
			"p_id"=>$p_id,
			"quantity"=>$quantity,
			"color_id"=>$color_val,
			"size_id"=>$size_val,
			"temp_user_id"=>$temp_user_id,
			"vendor_id"=>$vendor_get[0]->vendor_id,
		);

		$get_cart = $this->crud->selectDataByMultipleWhere('add_to_temp_cart',array("p_id"=>$p_id,"temp_user_id"=>$temp_user_id,'color_id'=>$color_val,'size_id'=>$size_val,));

		if(empty($get_cart))
		{
		 $this->crud->insert('add_to_temp_cart',$data);
		 $result['status'] = '200';
		 $result['message'] = 'Add to Cart Successfully';
		 $result['data'] = $data;
		}
		else
		{
			$this->db->update('add_to_temp_cart',$data,array("temp_user_id"=>$temp_user_id,"p_id"=>$p_id,'color_id'=>$color_val,'size_id'=>$size_val,));
			$result['status'] = '400';
			$result['message'] = 'Cart Update Successfully';
			$result['data'] = $data;
		}
		echo json_encode($result);
	}







}
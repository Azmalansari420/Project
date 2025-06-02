<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Checkout extends CI_Controller {

	

	//////---------------------final order

	public function final_cart()
	{
		$result = array();

		date_default_timezone_set('Asia/Kolkata');
			
		$order_id = time();
		$user_id = temp_session_id();
		$firstname = $this->input->post('firstname');
		$lastname = $this->input->post('lastname');
		$companyname = $this->input->post('companyname');
		$email = $this->input->post('email');
		$mobile = $this->input->post('mobile');
		$country = $this->input->post('country');
		$state = $this->input->post('state');
		$town_city = $this->input->post('town_city');
		$zip = $this->input->post('zip');
		$street_address = $this->input->post('street_address');
		$order_notes = $this->input->post('order_notes');
		$payment_method = $this->input->post('payment_method');
		// $payment_method = 2;
		$order_amount = applied_coupon('','');		
		$shipping_charge = $order_amount['shipping_charge'];
		$sub_total = $order_amount['sub_total'];
		$finalprice = $order_amount['finalprice'];
		$after_discount_final_price = $order_amount['after_discount_final_price'];
	    $addeddate = date('Y-m-d');

	    $insert_data = array(
	    	"order_id"=>$order_id,
	    	"user_id"=>$user_id,
	    	"firstname"=>$firstname,
	    	"lastname"=>$lastname,
	    	"companyname"=>$companyname,
	    	"email"=>$email,
	    	"mobile"=>$mobile,
	    	"country"=>$country,
	    	"state"=>$state,
	    	"town_city"=>$town_city,
	    	"zip"=>$zip,
	    	"street_address"=>$street_address,
	    	"order_notes"=>$order_notes,
	    	"payment_method"=>$payment_method,
	    	"shipping_charge"=>$shipping_charge,
	    	"sub_total"=>$sub_total,
	    	"finalprice"=>$finalprice,
	    	"after_discount_final_price"=>$after_discount_final_price,
	    	"addeddate"=>$addeddate,
	    );
					
		$temp = $this->crud->selectDataByMultipleWhere('add_to_temp_cart',array('temp_user_id'=>temp_session_id()));

        foreach($temp as $value)
        {
        	$product = $this->crud->selectDataByMultipleWhere('product',array('id'=>$value->p_id,));
            $order_data = array(
            	"user_id"=>$user_id,
            	"order_id"=>$order_id,
            	"vendor_id"=>$value->vendor_id,
            	"p_id"=>$value->p_id,
            	"size_id"=>$value->size_id,
            	"color_id"=>$value->color_id,
            	"quantity"=>$value->quantity,
            );  
            $this->crud->insert('orders',$order_data);

            $allimage = $this->crud->selectDataByMultipleWhere('all_images',array('p_id'=>$value->p_id,'size_id'=>$value->size_id,'color_id'=>$value->color_id,));
        	if(!empty($allimage))
        		$stock = $allimage[0]->stock;

        	$quantity = $stock-$value->quantity;
        	$this->db->update('all_images',array('stock'=>$quantity),array('p_id'=>$value->p_id,'size_id'=>$value->size_id,'color_id'=>$value->color_id,));

        	if($payment_method==1)
        	{
        		$update_data = array('status'=>1,);
		 		$this->db->update("orders",$update_data,array("status"=>0,"order_id"=>$order_id,'user_id'=>$user_id));
		 		$this->db->update("finalorder",$update_data,array("status"=>0,"order_id"=>$order_id,'user_id'=>$user_id));
				$this->db->delete("add_to_temp_cart",array("temp_user_id"=>$user_id,));
		    	$this->db->update("order_coupon",array("order_id"=>$order_id,'status'=>1,),array('user_id'=>$user_id,'status'=>0,));

		    	$url = base_url('success?order_id='.$order_id);
        	}
        	else if($payment_method==2)
        	{
        		$url = base_url('Phonepay/pay?order_id='.$order_id);
        	}

        	// $this->Shiprocket_token->set_order_data($order_id);
        	         
        }


		if($this->crud->insert('finalorder',$insert_data))
		{
			$result['status'] = '200';
			$result['message'] = 'Order Placed successfully Done';
			$result['data'] = $insert_data;
			$result['url'] = $url;
		}
		else
		{
			$result['status'] = '400';
			$result['message'] = 'Somthing Wrong';
			$result['data'] = [];
		}
		echo json_encode($result);		
	}


	

	public function couponcode()
	{
		$number = $this->input->post('coupon');
		$user_id = temp_session_id();
        $coupon_data = $this->crud->selectDataByMultipleWhere('coupen_code',array('name'=>$number));

        if(!empty($coupon_data))
        {
        	$coupon_data = $coupon_data[0];
        	$query = $this->crud->selectDataByMultipleWhere('order_coupon',array('coupon'=>$number,"user_id"=>$user_id,"status"=>0,));
        	
        	if(empty($query))
        		$this->db->insert("order_coupon",array("coupon"=>$coupon_data->name,"discount"=>$coupon_data->amount,"type"=>$coupon_data->type,'user_id'=>$user_id,));
        	    $this->session->set_flashdata('coupon_mesg','<div class="alert alert-success">Coupon Applied successfully.....</div>');
        }
        else
        {
        	$this->session->set_flashdata('coupon_mesg','<div class="alert alert-danger">Wrong Coupon Code.....</div>');

        }
        redirect($_SERVER['HTTP_REFERER']);
	}


	function delete_coupon()
	{
		$user_id = temp_session_id();
		$this->db->delete('order_coupon',array('user_id'=>$user_id,'status'=>0,));
		$this->session->set_flashdata('coupon_mesg','<div class="alert alert-success">Coupon has been successfully deleted.</div>');
        redirect($_SERVER['HTTP_REFERER']);
	}



































}

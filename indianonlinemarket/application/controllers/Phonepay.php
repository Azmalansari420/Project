<?php 

defined('BASEPATH') OR exit('No direct script access allowed');

class Phonepay extends CI_Controller{

//Phonepay payment gatway 
	public function pay()
	{

		$order_id = $this->input->get('order_id');
		$user_session_id = temp_session_id();

		// print_r($order_id);
		// die;
		
		if(isset($user_session_id))
		{
			$phone_pay_merchant_id = phone_pay_merchant_id;
			$phone_pay_secret_key = phone_pay_secret_key;
			$keyIndex = keyIndex;
			$base_url = base_url();
			$success_url = $base_url.'Phonepay/success?order_id='.$order_id;
			$error_url = $base_url.'Phonepay/failed?order_id='.$order_id;


			$where = array('user_id'=>$user_session_id,'status'=>0,"order_id"=>$order_id,);
			$fwd = $this->db->get_where('finalorder',$where)->result_object();
			$order_table_id = $this->db->insert_id();

			if(!empty($fwd))
			{
				$fwd = $fwd[0];
				$amt = $fwd->after_discount_final_price;
				// $amt = '1';

				$transaction_id = 'MT'.rand ( 10000 , 99999 ).rand ( 10000 , 99999 ).rand ( 1000 , 9999 ).rand ( 10 , 99 );
				$currency = 'INR';
				$data = array (
	              'merchantId' => $phone_pay_merchant_id,
	              'merchantTransactionId' => $transaction_id,
	              'order_id' => $order_id,
	              'merchantUserId' => "MUID123",
	              'amount' => $amt*100,
	              'redirectUrl' => $success_url,
	              'redirectMode' => 'POST',
	              'callbackUrl' => $error_url,
	              'mobileNumber' => '',
	              'paymentInstrument' => 
	              array (
	                'type' => 'PAY_PAGE',
	              ),
	            );

	            $encode = base64_encode(json_encode($data));
	            $saltKey = $phone_pay_secret_key;
	            $saltIndex = $keyIndex;
	            $string = $encode.'/pg/v1/pay'.$saltKey;
	            $sha256 = hash('sha256',$string);
	            $finalXHeader = $sha256.'###'.$saltIndex;
			    $curl = curl_init();
			    curl_setopt_array($curl, array(
			      CURLOPT_URL => 'https://api.phonepe.com/apis/hermes/pg/v1/pay',
			      CURLOPT_RETURNTRANSFER => true,
			      CURLOPT_ENCODING => '',
			      CURLOPT_MAXREDIRS => 10,
			      CURLOPT_TIMEOUT => 0,
			      CURLOPT_FOLLOWLOCATION => true,
			      CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
			      CURLOPT_CUSTOMREQUEST => 'POST',
			      CURLOPT_POSTFIELDS =>json_encode(['request' => $encode]),
			      CURLOPT_HTTPHEADER => array(
			        'Content-Type: application/json',
			        'X-VERIFY: '.$finalXHeader
			      ),
			    ));
			    $response = curl_exec($curl);
			    curl_close($curl);
				
			    $response = json_decode($response);
			    if($response->success==true)
			    {
			        $url = $response->data->instrumentResponse->redirectInfo->url;
			        redirect($url);
			    }
			    else
			    {
			        echo json_encode(array("url"=>"",));
			    }

	   		}
	   		else
	   		{
	   			redirect('checkout');	
	   		}
		}
		else
		{
			redirect('login');
		}

	}



	public function success()
	{
		$order_id = $this->input->get('order_id');
		$data['order_id'] = $order_id;
		$where = array('status'=>0,"order_id"=>$order_id,);
		$fwd = $this->db->get_where('finalorder',$where)->result_object();


		if(isset($_POST))
		{
			if(!empty($fwd))
			{
				if($_POST['code']=='PAYMENT_SUCCESS')
				{
					$fwd = $fwd[0];
					$user_session_id = $fwd->user_id;

					$update_data = array('status'=>1,);

			 		$this->db->update("orders",$update_data,array("status"=>0,"order_id"=>$order_id,'user_id'=>$user_session_id));
			 		$this->db->update("finalorder",$update_data,array("status"=>0,"order_id"=>$order_id,'user_id'=>$user_session_id));
					$this->db->delete("add_to_temp_cart",array("temp_user_id"=>$user_session_id,));
			    	$this->db->update("order_coupon",array("order_id"=>$order_id,'status'=>1,),array('user_id'=>$user_session_id,'status'=>0,));

			    	$shipmentdata = $this->Shiprocket_token->set_order_data($order_id);
		        	$create_order = $this->Shiprocket_token->create_order($shipmentdata);
		        	$shipping_code = [];
		        	if($create_order->status_code==1)
		        	{
		        		$shipping_code['channel_order_id'] = $create_order->channel_order_id;
						$shipping_code['shipment_id'] = $create_order->shipment_id;
		        	}
		        	if(!empty($shipping_code))
		        	{
		        		$this->db->update('finalorder',$shipping_code,array('order_id'=>$order_id,));
		        	}
		        }
			}
		}
		$this->load->view('success',$data);
	}

	public function failed()
	{
		$order_id = $this->input->get('order_id');
		$data['order_id'] = $order_id;
		die;
		$this->load->view('failed',$data);
	}













}	
?>
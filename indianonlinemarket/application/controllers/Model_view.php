<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_view extends CI_Controller {




	public function click_model_view()
	{
		$result = array();

		$id = $this->input->post('id');
		
		$product = $this->crud->selectDataByMultipleWhere('product',array('id'=>$id,));
		$model = '';
		if(!empty($product))
		{
			$product = $product[0];
			$model .= $this->load->view('pro-model',array('data'=>$product),true);
			
			$result['status'] = '200';
			$result['message'] = 'Data Fetch Successfully..';
			$result['data'] = $model;
		}
		else
		{
			$result['status'] = '400';
			$result['message'] = 'Not Found..';
			$result['data'] = [];
		}
		echo json_encode($result);
	}





}
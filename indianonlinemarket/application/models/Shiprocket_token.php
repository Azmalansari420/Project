<?php
class Shiprocket_token extends CI_Model
{

  public function genrate_token()
  {

    $curl = curl_init();

    curl_setopt_array($curl, array(
      CURLOPT_URL => 'https://apiv2.shiprocket.in/v1/external/auth/login',
      CURLOPT_RETURNTRANSFER => true,
      CURLOPT_ENCODING => '',
      CURLOPT_MAXREDIRS => 10,
      CURLOPT_TIMEOUT => 0,
      CURLOPT_FOLLOWLOCATION => true,
      CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
      CURLOPT_CUSTOMREQUEST => 'POST',
      CURLOPT_POSTFIELDS =>'{
        "email": "info@indianonlinemarket.com",
        "password": "Admin@123[];"
    }',
      CURLOPT_HTTPHEADER => array(
        'Content-Type: application/json'
      ),
    ));

    $response = curl_exec($curl);

    curl_close($curl);
    return json_decode($response);
  }




  public function create_order($shipmentdata)
  {
      $toekn = $this->genrate_token()->token;
      $curl = curl_init();

      curl_setopt_array($curl, array(
        CURLOPT_URL => 'https://apiv2.shiprocket.in/v1/external/orders/create/adhoc',
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => '',
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 0,
        CURLOPT_FOLLOWLOCATION => true,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => 'POST',
        CURLOPT_POSTFIELDS =>$shipmentdata,
        CURLOPT_HTTPHEADER => array(
          'Content-Type: application/json',
          'Authorization: Bearer '.$toekn
        ),
      ));

      $response = curl_exec($curl);

      curl_close($curl);
      return json_decode($response);
  }


  /*----------set_order_data---in API-*/


  public function set_order_data($order_id)
  {
    $shipmentdata = [];
    $order = $this->db->get_where('orders',array('order_id'=>$order_id))->result_object();
    foreach($order as $key => $value)
    {
      $product = $this->crud->selectDataByMultipleWhere('product',array('id'=>$value->p_id,));
      $all_price = $this->crud->selectDataByMultipleWhere('all_images',array('p_id'=>$value->p_id,'color_id'=>$value->color_id,'size_id'=>$value->size_id,));

       $order_items[] = array(
          "name"=>$product[0]->name,
          "sku"=>$product[0]->sku,
          "units"=>$value->quantity,
          "selling_price"=>$all_price[0]->price,
          "discount"=>"0",
          "tax"=>"",
          "hsn"=>"",
        );
    }

    $finalorder = $this->db->get_where('finalorder',array('order_id'=>$order_id))->result_object();
    if(!empty($finalorder))
    {
      $finalorder = $finalorder[0];

      $shipmentdata = array(
          "order_id"=>$finalorder->order_id,
          "order_date"=>$finalorder->addeddate,
          "pickup_location"=>"Primary",
          "channel_id"=>"",
          "comment"=>$finalorder->order_notes,
          "reseller_name"=>"",
          "company_name"=>"",
          "billing_customer_name"=>$finalorder->firstname,
          "billing_last_name"=>$finalorder->lastname,
          "billing_address"=>$finalorder->street_address,
          "billing_address_2"=>"",
          "billing_isd_code"=>"",
          "billing_city"=>$finalorder->town_city,
          "billing_pincode"=>$finalorder->zip,
          "billing_state"=>$finalorder->state,
          "billing_country"=>"India",
          "billing_email"=>$finalorder->email,
          "billing_phone"=>$finalorder->mobile,
          "billing_alternate_phone"=>"",
          "shipping_is_billing"=>true,
          "shipping_customer_name"=>$finalorder->firstname,
          "shipping_last_name"=>$finalorder->lastname,
          "shipping_address"=>$finalorder->street_address,
          "shipping_address_2"=>"",
          "shipping_city"=>$finalorder->town_city,
          "shipping_pincode"=>$finalorder->zip,
          "shipping_country"=>"India",
          "shipping_state"=>$finalorder->state,
          "shipping_email"=>$finalorder->email,
          "shipping_phone"=>$finalorder->mobile,
          "order_items"=>$order_items,
          "payment_method"=>"Prepaid",
          "shipping_charges"=>$finalorder->shipping_charge,
          "giftwrap_charges"=>"",
          "transaction_charges"=>"",
          "total_discount"=>"",
          "sub_total"=>$finalorder->after_discount_final_price,
          "length"=>10,
          "breadth"=>15,
          "height"=>10,
          "weight"=>10,
          "ewaybill_no"=>"",
          "customer_gstin"=>"",
          "invoice_number"=>"",
          "order_type"=>"",
        );
    }

      return json_encode($shipmentdata);

  }





















}






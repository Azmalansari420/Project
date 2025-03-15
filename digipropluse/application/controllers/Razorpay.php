<?php
defined('BASEPATH') OR exit('No direct script access allowed');
require_once(APPPATH."libraries/razorpay-php/Razorpay.php");
use Razorpay\Api\Api;
use Razorpay\Api\Errors\SignatureVerificationError;

class Razorpay extends CI_Controller 
{
     
    public function pay()
      {
        $requestid = $this->input->get('requestid');
        $searchplan = $this->db->get_where('plan_purchase',array('requestid'=>$requestid))->result_object();
        if(!empty($searchplan))
        {
            $final_amount = (int) $searchplan[0]->final_amt;

            $api = new Api(RAZOR_KEY, RAZOR_SECRET_KEY);
            // $_SESSION['payable_amount'] = 10;
            $razorpayOrder = $api->order->create(array(
              'receipt'         => rand(),
              'amount'          => $final_amount * 100, // 2000 rupees in paise
              'currency'        => 'INR',
              'payment_capture' => 1 // auto capture
            ));
            $amount = $razorpayOrder['amount'];
            $razorpayOrderId = $razorpayOrder['id'];
            $_SESSION['razorpay_order_id'] = $razorpayOrderId;
            $data = $this->prepareData($amount,$razorpayOrderId);

            $data['response_url'] = base_url().'razorpay/verify?requestid='.$requestid;
            $data['requestid'] = $requestid;
            $this->db->update('plan_purchase',array('razorpay_orderid'=>$razorpayOrderId),array('requestid'=>$requestid,));

            $this->load->view('rezorpay',array('data' => $data));

        }
        else
        {
            $this->load->view('error');
        }

      }



    public function verify()
      {
        $success = true;
        $error = "payment_failed";
        $requestid = $this->input->get("requestid");
        $razorpay_payment_id = $this->input->post("razorpay_payment_id");
        if (empty($_POST['razorpay_payment_id']) === false) {
          $api = new Api(RAZOR_KEY, RAZOR_SECRET_KEY);
        try {
            $attributes = array(
              'razorpay_order_id' => $_SESSION['razorpay_order_id'],
              'razorpay_payment_id' => $_POST['razorpay_payment_id'],
              'razorpay_signature' => $_POST['razorpay_signature']
            );
            $api->utility->verifyPaymentSignature($attributes);
          } catch(SignatureVerificationError $e) {
            $success = false;
            $error = 'Razorpay_Error : ' . $e->getMessage();
          }
        }

        if ($success === true) 
        {            
            // print_r($requestid);
            // die;
             $this->db->where('requestid', $requestid);
                $this->db->update('plan_purchase', array(
                    'razorpay_orderid' => $_SESSION['razorpay_order_id'],
                    'status' => 2  // 2 = success
                ));

                $planpurchase = $this->db->get_where('plan_purchase',array('requestid'=>$requestid))->result_object();
                $vendor_id = $planpurchase[0]->vendor_id;
                $dealer_id = $planpurchase[0]->dealer_id;
                $final_amt = $planpurchase[0]->final_amt;

                $sitesetting = $this->db->get_where('site_setting',array('id'=>1))->result_object();

                $vendor_com = $sitesetting[0]->vendor_comis;
                $dealer_comis = $sitesetting[0]->dealer_comis;


                if(!empty($vendor_id))
                {
                    /*vendor Commision*/
                    $getamountper_ven = (int) $final_amt*$vendor_com/100;
                    $request_id = $requestid;
                    $type = "credit";
                    $add_type = 1;
                    $amount = (int) $getamountper_ven;
                    $message = 'Plan Purchase Commision';
                    $this->crud->wallet_credit_debit($request_id,$vendor_id, $type, $add_type,$amount, $message, );                
                }


                if(!empty($dealer_id))
                {
                    /*dealer Commision*/
                    $getamountper_deal = (int) $final_amt*$dealer_comis/100;
                    $request_id = $requestid;
                    $type = "credit";
                    $add_type = 1;
                    $amount = (int) $getamountper_deal;
                    $message = 'Plan Purchase Commision';
                    $this->crud->wallet_credit_debit($request_id,$dealer_id, $type, $add_type,$amount, $message, );
                }

                // echo "string";
                // die;

            redirect(base_url().'razorpay/success?requestid='.$requestid);
        }
        else 
        {
            $this->db->where('requestid', $requestid);
                $this->db->update('plan_purchase', array(
                    'razorpay_orderid' => $_SESSION['razorpay_order_id'] ?? '',
                    'status' => 3  // 3 = failed
                ));

          redirect(base_url().'razorpay/paymentFailed?requestid='.$requestid);
        }
      }
      


      public function prepareData($amount,$razorpayOrderId)
      {
        $data = array(
          "key" => RAZOR_KEY,
          "amount" => $amount,
          "name" => website_name,
          "description" => website_name,
          "image" => "https://digiipropluse.com/media/uploads/site_setting/1740998460.svg",
          "prefill" => array(
            "name"  => $this->input->post('name'),
            "email"  => $this->input->post('email'),
            "contact" => $this->input->post('contact'),
          ),
          "notes"  => array(
            "address"  => "Hello World",
            "merchant_order_id" => rand(),
          ),
          "theme"  => array(
            "color"  => "#F37254"
          ),
          "order_id" => $razorpayOrderId,
        );
        return $data;
      }
      

       public function success()
      {
        $data['sitesetting'] = $this->crud->fetchdatabyid('1','site_setting');
        $this->load->view('success',$data);
      }

      public function paymentFailed()
      {
        $data['sitesetting'] = $this->crud->fetchdatabyid('1','site_setting');
        $this->load->view('error',$data);
      }  


      public function setRegistrationData()
      {
        $name = $this->input->post('name');
        $email = $this->input->post('email');
        $contact = $this->input->post('contact');
        $amount = $_SESSION['payable_amount'];

        $registrationData = array(
          'order_id' => $_SESSION['razorpay_order_id'],
          'name' => $name,
          'email' => $email,
          'contact' => $contact,
          'amount' => $amount,
        );
        // save this to database
      }
      /**
       * This is a function called when payment successfull,
       * and shows the success message
       */
     















}
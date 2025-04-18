<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Checkout extends CI_Controller 
{
     
    public function __construct()
    {
        parent::__construct();
    }
    




    public function plan_purchase()
    {
        $result = array();
        $vendor_id = 0;
        $dealer_id = 0;
        $user_id = 0;
       
        $requestid = time();
        $username = $this->input->post("username");
        $mobile = $this->input->post("mobile");
        $pincode = $this->input->post("pincode");
        $plan_id = $this->input->post("plan_id");
        $plan_name = $this->input->post("plan_name");
        $plan_price = $this->input->post("plan_price");
        $final_amt = $this->input->post("final_amt");
        $gst = $this->input->post("gst");
        $purchase_date = date('Y-m-d');
        $expirey_date = date('Y-m-d H:i:s', strtotime('+1 year'));
        $status = 1; //1=process,2=pending,3=sucess,3=failed
        $addeddate = date('Y-m-d H:i:s ');

        $check_pincode = $this->db->get_where('registration',array('role'=>1,'status'=>1,'pincode'=>$pincode))->result_object();

        $email = $this->input->post("email");
        $check_email = $this->db->get_where('registration',array('status'=>1,'email'=>$email))->result_object();
        if(!empty($check_email))
        {
            $vendor_id = $check_email[0]->vendor_id;            
            $dealer_id = $check_email[0]->dealer_id;
            $user_id = $check_email[0]->id;

        }
        else 
        {
            $registerdata = array(
                "role"=>3,
                "status"=>1,
                "image"=>'1724412456.png',
                "wallet"=>0,
                "pincode"=>$pincode,
                "username"=>$username,
                "email"=>$email,
                "password"=>"123456",
                "addeddate"=>date("H:i:s"),
            );
            $this->db->insert('registration',$registerdata);
            $user_id = $this->db->insert_id();
            $vendor_id = $check_pincode[0]->vendor_id;
            $dealer_id = $check_pincode[0]->dealer_id;          
            
        }


        $insertdata = array(
            "requestid"=>$requestid,
            "email"=>$email,
            "vendor_id"=>$vendor_id,
            "dealer_id"=>$dealer_id,
            "user_id"=>$user_id,
            "username"=>$username,
            "mobile"=>$mobile,
            "pincode"=>$pincode,
            "plan_id"=>$plan_id,
            "gst"=>$gst,
            "plan_name"=>$plan_name,
            "plan_price"=>$plan_price,
            "final_amt"=>$final_amt,
            "purchase_date"=>$purchase_date,
            "expirey_date"=>$expirey_date,
            "status"=>$status,
            "addeddate"=>$addeddate,
        );

        if(!empty($insertdata))
        {
            $this->db->insert("plan_purchase",$insertdata);

            


            $url = base_url('razorpay/pay?requestid='.$requestid);
            // $url = base_url('thankyou?requestid='.$requestid);
            
            $result['status']  = "200";
            $result['message'] = "Submit Successfully.";
            $result['data']  = $insertdata;
            $result['url']  = $url;
        }
        else
        {
            $result['message'] = "User not found";
            $result['status']  = "400";
            $result['data']    = array();
        }
        echo json_encode($result);
    }


















}
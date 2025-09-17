<?php

 function slug($string) 
 { 
  $string = trim($string);$string=strtolower($string);
  $string =preg_replace("/[^a-z0-9_ोौेैा्ीिीूुंःअआइईउऊएऐओऔकखगघचछजझञटठडढतथदधनपफबभमयरलवसशषहश्रक्षटठडढङणनऋड़\s-]/u", "", $string);
  $string = preg_replace("/[\s-]+/", " ", $string);
  $string = preg_replace("/[\s]/", '-', $string);
  return $string ;
 }

 
function status($value)
{
  if($value==1)
  {
    $string = '<p class="mb-0 text-success font-weight-bold d-flex justify-content-start align-items-center">
                  <small>
                    <svg class="mr-2" xmlns="http://www.w3.org/2000/svg" width="18" viewBox="0 0 24 24" fill="none">        
                      <circle cx="12" cy="12" r="8" fill="#3cb72c"></circle>
                    </svg>
                  </small>Show
               </p>';
  }

  else if($value==0)
  {
    $string = '<p class="mb-0 text-danger font-weight-bold d-flex justify-content-start align-items-center">
                  <small>
                     <svg class="mr-2" xmlns="http://www.w3.org/2000/svg" width="18" viewBox="0 0 24 24" fill="none">
                        <circle cx="12" cy="12" r="8" fill="#F42B3D"></circle>
                     </svg>
                  </small>Hide
               </p>';
  }

  return $string;
}


function kycde($value)
{
  if($value==1)
  {
    $string = 'Verified';
  }

  else if($value==0)
  {
    $string = 'Pending';
  }

  return $string;
}


function temp_session_id()
  {
    $ci =& get_instance();
    if(empty($ci->session->userdata("id")))
    {
      if(empty($ci->session->userdata("temp_session_id")))
      {
        $temp_session_id = session_id();
      }
      else
      {
        $temp_session_id = $ci->session->userdata("temp_session_id");
      }
    }
    else
    {
      $user = $ci->db->get_where("registration",array("id"=>$ci->session->userdata("id"),))->result_object()[0];
      $temp_session_id = $user->id;
    }
    return $temp_session_id;
  }



   function chech_user_login()
  {
    $ci = & get_instance();
    $USERID      = $ci->session->userdata('USERID');  
    $EMAIL      = $ci->session->userdata('EMAIL');  
    $logged_in      = $ci->session->userdata('logged_in');  
    if($USERID=="" && $EMAIL=="")
    {
      redirect('login');
    }
  }



// ---------------------Is user_login-------

   function isuser_login()
  {
    $ci = & get_instance();
    $USERID      = $ci->session->userdata('USERID');  
    $EMAIL      = $ci->session->userdata('EMAIL');  
    $logged_in      = $ci->session->userdata('logged_in');  
    
    if(empty($USERID) || empty($EMAIL))
      redirect(base_url('login'));

  }


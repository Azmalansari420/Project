<?php
#[\AllowDynamicProperties]
class MySiteName {

    Public function Mysitetitle()
    {
      $this->CI =& get_instance();
      $mysitename = $this->CI->output->get_output();
      $mysitename = str_replace("ASR Bike Mechanic", "Global Fire & Safety", $mysitename);
      echo $mysitename;
      return;
 }
}
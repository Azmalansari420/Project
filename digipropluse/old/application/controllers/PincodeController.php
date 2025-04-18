<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class PincodeController extends CI_Controller {
    

    public function get_location() {
        $pincode = $this->input->post('pincode');
        $location = $this->db->get_where('pincode',array('Pincode'=>$pincode))->result_object();

        if ($location) {
            echo json_encode([
                'success' => true,
                'state' => $location[0]->State,
                'city' => $location[0]->City
            ]);
        } else {
            echo json_encode(['success' => false]);
        }
    }
}

<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class MY_Loader extends CI_Loader {

    public function load_view($template_name, $vars = array(), $return = FALSE) {

        if(!$return) {

            $this->view('admin/header', $vars, $return);
            $this->view($template_name, $vars, $return);
            $this->view('admin/footer', $vars, $return);

        } else {

            $content = $this->view('admin/header', $vars, $return);
            $content .= $this->view($template_name, $vars, $return);
            $content .= $this->view('admin/footer', $vars, $return);
            return $content;

        }
    }

   

}
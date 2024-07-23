<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MY_Loader extends CI_Loader {

   function __construct() {
      parent::__construct();

      $CI =& get_instance();
      $CI->load = $this;
   }

   public function template($template_name, $vars = array(), $return = TRUE){

      $content = $this->view('includes/head', $vars, $return);
      $content .= $this->view($template_name , $vars, $return);
      $content .= $this->view('includes/footer', $vars, $return);

      if(is_array($template_name)) { //return all values in contents
         foreach($template_name as $file_to_load) {
            $content .= $this->view($file_to_load, $vars, $return);
         }
      } else {
         $content .= $this->view($template_name, $vars, $return);
      }

      $content .= $this->view('footer', $vars, $return);
      echo $content;
   }
}
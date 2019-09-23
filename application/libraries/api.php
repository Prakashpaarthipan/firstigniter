<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class api {
private $CI;
		function __construct() {
            //$CI->load->database();
            //$this->load->library('database');
            $this->CI =& get_instance();
            $this->CI->load->database();
        }

        public function select_query_json1($query)
        {
        	//$this->load->database();     
        	$data = $this->CI->db->query($query);
        	return $data->result_array();
        }
}
<?php

   class oracle_function_connect extends CI_Model {

   	public  function __construct() {
        parent::__construct();
       	$this->load->database();
     
      }
   	public function select_query_json($query)
    {
    	
    	$data = $this->db->query($query);
    	return $data->result_array();
    	//return json_decode($data->result_array(),true);
    }
}

<?php

   class Register_model extends CI_Model {

        public $title;
        public $content;
        public $date;
        public  function __construct() {
        parent::__construct();
       	$this->load->database();
     
      }
      public function email_check($email)
	    {
	        $query = $this->db->get_where('user_basic', array('emailid' => $email));
	        if($query->num_rows() == 0 ){   
	         return true;
	        }
	        return false;
	    }
    public function register_user($data)
	    {
	 
	        $insert = $this->db->insert('user_basic', $data);
	        if ($insert) {
	           return $this->db->insert_id();
	        } else {
	            return false;
	        }
	    }
  }
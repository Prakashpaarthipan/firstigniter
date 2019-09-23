<?php

   class Login_model extends CI_Model {

        public $title;
        public $content;
        public $date;
        public  function __construct() {
        parent::__construct();
       	$this->load->database();
     
      }
 
        public function get_last_ten_entries()
        {

                $query = $this->db->get('task', 10);
                return $query->result();
        }

        public function insert_entry()
        {
                $this->title    = $_POST['title']; // please read the below note
                $this->content  = $_POST['content'];
                $this->date     = time();

                $this->db->insert('entries', $this);
        }

        public function update_entry()
        {
                $this->title    = $_POST['title'];
                $this->content  = $_POST['content'];
                $this->date     = time();

                $this->db->update('entries', $this, array('id' => $_POST['id']));
        }
        public function login_process($data)
        {
        	// echo $data[0]['inputEmail'];
        	// exit;
        		$query = $this->db->get_where('user_basic', array('emailid' => 'newuser1@gmail.com'));
		        if($query->num_rows() > 0 ){   
		         return true;
		        }
		        return false;
        }
       

}
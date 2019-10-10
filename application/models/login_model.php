<?php

   class Login_model extends CI_Model {

        public $title;
        public $content;
        public $date;
        public  function __construct() {
        parent::__construct();
       	$this->load->database();
        $this->load->model('mysql_function_connect');
        $this->load->model('oracle_function_connect');
        $this->load->library('session');
        //session_start();
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
            $post_data = $data['form_data'];
            if($post_data['switch'] == 'M'){
                $auth = $this->db->get_where('user_login',array('user_email' =>strtoupper($post_data['inputUsername']),'user_password'=>$post_data['inputPassword'] ));
                // $condition = "user_email =" . "'" . strtoupper($post_data['inputUsername']) . "' AND " . "user_password =" . "'" . $post_data['inputPassword'] . "'";
                // $this->db->select('*');
                // $this->db->from('user_login');
                // $this->db->where($condition);
                // $this->db->limit(1);               
                // $getresult = $this->db->get();
                // print_r( $getresult->result_array());
                // exit;
              
                $getresult = $auth->result_array();
                
                if($auth->num_rows() > 0 ){ 
                $newdata = array( 
                   'username'  => $getresult[0]['user_name'], 
                   'email'     => $getresult[0]['user_email'], 
                    'userid'     => $getresult[0]['id'], 
                   'logged_in' => TRUE
                );  

                $this->session->set_userdata($newdata);  
                 return true;
                }
                return false;
            }
            if($post_data['switch'] == 'O')
            {
               // $auth = $this->
            }

        		// $query = $this->db->get_where('user_basic', array('emailid' => 'newuser1@gmail.com'));
		        // if($query->num_rows() > 0 ){   
		        //  return true;
		        // }
		        // return false;
        }

      
       

}
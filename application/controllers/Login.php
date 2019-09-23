<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	 
	public  function __construct() {
        parent::__construct();
       	//$this->load->database();
		$this->load->helper('url');
		$this->load->model('login_model');
		$this->load->model('function_connect');
		$this->load->library('api');
     
    }
 
	public function index()
	{
		 $this->load->view('sign_in');
		$data= array();	
		$d2 = array();
		if($this->input->post('btn_signin')!=null){
			//$data = $this->login_model->get_last_ten_entries();
			//echo "<pre>";
			//$d1 = $this->function_connect->select_query_json('select * from task');
			//$d2 = $this->api->select_query_json('select * from task');
			
			$data['form_data'] = $this->input->post();
			//print_r($data);
			//print_r($d2);
          	$valid = $this->load->login_model->login_process($data);
          	if($valid){
          		//$this->load->view('sign_in');
          		echo "Welcome to dashboard";
          	}else{
          		echo "error";
          	}
			
		}	

		// $this->load->view('sign_in', $data);// To check form-data objects

		
		
	}

	public function checkdb_con()
	{

		if($this->input->post('btn_signin')!=null){
			$data = $this->login_model->get_last_ten_entries();
		var_dump($data);
		exit;

		}
	

		
		
	} 
	public function register()
	{
		$this->load->view('register');
	}
	
	public function index1()
        {
        	echo "<pre>";
        	$this->load->database();

		print_r($this->db);
        	$this->load->database();
        	
        	$connected = $this->db->db_debug;
        	if($connected){
        		echo "true";
        	}else{
        		echo "false";
        	}
        }
		
}

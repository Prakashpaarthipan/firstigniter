<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Register extends CI_Controller {

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
		$this->load->model('register_model');
		$this->load->model('login_model');
		$this->load->model('function_connect');
		$this->load->library('api');
     
    }
    public function index(){
    	$this->load->view('register');
    	$user=array();
    	if($this->input->post('btn_register')!=null){
    		$user['EMAILID'] = $this->input->post('inputEmail');
    		$user['PASSWOR'] = $this->input->post('inputPassword');
    		$user['PROFESS'] = $this->input->post('gridRadios');

    		$email_check=$this->register_model->email_check($user['EMAILID']);
 			//print_r($email_check);
			if($email_check){
			  $this->register_model->register_user($user);
			  //$this->session->set_flashdata('success_msg', 'Registered successfully.Now login to your account.');
			  $this->load->view('sign_in');
			 
			}
    	}
    }
    
    
}
<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$environment = 'development';
$system_path = '../system';
$application_folder = '../application';

if (realpath($system_path) !== false) {
    $system_path = realpath($system_path) . '/';
}

$system_path = rtrim($system_path, '/') . '/';

define('BASEPATH', str_replace("\\", "/", $system_path));
define('APPPATH', $application_folder . '/');
define('EXT', '.php');
define('ENVIRONMENT', $environment ? $environment : 'development');


 
require(BASEPATH .'core/Common.php');

if (file_exists(APPPATH.'config/'.ENVIRONMENT.'/constants.php')) {
    require(APPPATH.'config/'.ENVIRONMENT.'/constants.php');
} else {
    require(APPPATH.'config/constants.php');
}

$GLOBALS['CFG'] =& load_class('Config', 'core');
$GLOBALS['UNI'] =& load_class('Utf8', 'core');

if (file_exists($basepath.'core/Security.php')) {
  $GLOBALS['SEC'] =& load_class('Security', 'core');
}


load_class('Loader', 'core');
load_class('Router', 'core');
load_class('Input', 'core');
load_class('Lang', 'core');

require(BASEPATH . 'core/Controller.php');

function &get_instance() {

    return CI_Controller::get_instance();
}

$class = 'CI_Controller';
$CI = new $class();

class api {

		public  function __construct() 
		{
	       // parent::__construct();
	       	
   		}

        public function select_query_json($query)
        {
        	$this->load->database();     
        	$data = $this->db->query($query);
        	return $data->result_array();
        }
}
<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

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
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */

	public function __construct() {
		parent::__construct();
		$this->load->helper( array('form', 'url') );
//		$options = array('one' => 'one', 'two'=>'two','three'=>'three');
	}

	/**
	 *
	 * index - Display main view
	 *
	 **/
	public function index() {
		$this->load->view('register');
	}

	/**
	 *
	 * signup - Validates user registration
	 *
	 **/
	public function signup() {
		log_message('debug', "*** signup");
    	$this->load->library('form_validation');
		$this->form_validation->set_error_delimiters('<div class="error">', '</div>');
            
      	if ($this->form_validation->run() == FALSE) {
        	$this->load->view('register');
      	}
      	else {
        	$this->load->view('register_confirmation');
      	}
	}
}

/* End of file register.php */
/* Location: ./application/controllers/register.php */
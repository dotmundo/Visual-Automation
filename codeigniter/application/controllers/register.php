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
    	$this->load->library('form_validation');
	}

	/**
	 *
	 * index - Display main view
	 *
	 **/
	public function index() {
		$this->load->template('register');
	}

	/**
	 *
	 * signup - Validates user registration
	 *
	 **/
	public function signup() {
		log_message('debug', "*** signup");
		$this->form_validation->set_error_delimiters('<div class="error">', '</div>');
            
      	if ($this->form_validation->run() == FALSE) {
        	$this->load->template('register');
      	}
      	else {
      		$hidden = array();
			foreach($_POST as $field_name=> $value) {
  				$hidden[$field_name] = $value;
			}
			print_r($hidden);
        	$this->load->template('register_confirmation', array('hidden'=> $hidden));
      	}
	}

	/**
	 *
	 * do_over - What the name says
	 *
	 **/
	public function do_over() {
		log_message('debug', "*** do_over");
		$this->load->template('register');            
	}

	/**
	 *
	 * submit - Save the user's data
	 *
	 **/
	public function submit() {
		log_message('debug', "*** submit");

		// Create insertion array
		$data = array(
				'first_name'=> $this->input->post('first_name'),
				'last_name'=> $this->input->post('last_name'),
				'email'=> $this->input->post('email'),
				'company'=> $this->input->post('company'),
				'address_1'=> $this->input->post('address_1'),
				'address_2'=> $this->input->post('address_2'),
				'city'=> $this->input->post('city'),
				'state'=> $this->input->post('state'),
				'zip'=> $this->input->post('zip'),
				'website'=> $this->input->post('website'),
				'phone'=> $this->input->post('phone'),
				'referral'=> $this->input->post('referral'),
				'operating_system'=> $this->input->post('operating_system'),
			);

		$this->db->insert('registration', $data);

		// Go to success page!!!
		$this->load->template('register_success');            
	}
}

/* End of file register.php */
/* Location: ./application/controllers/register.php */
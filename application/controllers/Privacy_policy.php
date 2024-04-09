<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Privacy_policy extends CI_Controller {

	public function __construct(){
		parent::__construct();

		$this->load->model('Privacy_policy_model');		
	
    } 
	public function index(){

	   $data['privacy_policy'] =  $this->Privacy_policy_model->get_one_policy();
		$data["title"]='Privacy Policy';
        
		$this->load->view('header1', $data);
		$this->load->view('privacy_policy_view');
	    $this->load->view('footer');
	}
	
		
}?>
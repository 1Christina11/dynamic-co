<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Terms_conditions extends CI_Controller {
	
	public function __Construct(){
		parent::__Construct();
		$this->load->model('Terms_conditions_model');
	}
	
	public function index(){
		$data['title']='Terms Conditions';
		$data['terms_conditions']=$this->Terms_conditions_model->get_terms_conditions();
		$this->load->view('header1', $data);
		$this->load->view('terms_conditions_view');
		$this->load->view('footer');
	}
}?>
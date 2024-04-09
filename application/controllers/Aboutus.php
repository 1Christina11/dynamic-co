<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Aboutus extends CI_Controller {

	public function __construct(){
		parent::__construct();

		$this->load->model('Aboutus_model');		
	
    }
	public function index(){

	   $data['about_us'] =  $this->Aboutus_model->get_one_about_us();
		$data['clients'] =  $this->Aboutus_model->get_clients();
		$data["title"]='About Us';
        
		$this->load->view('header1', $data);
		$this->load->view('about_us_view');
	    $this->load->view('footer');
	}
	
		
}?>
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
	
	public function __Construct()
	{
		parent::__Construct();
		$this->load->model('Home_model');
	}

	public function index()
	{
		$data['title'] = 'Home';
		$data['portfolio']=$this->Home_model->get_portfolio();
		$data['blogs']=$this->Home_model->get_blog();
		$data['about_us']=$this->Home_model->get_about_us();
        $data["services"] = $this->Home_model->get_services();
		$data['categories']=$this->Home_model->get_categories();
		
		$this->load->view('header', $data);
		$this->load->view('home_page_view');
		$this->load->view('footer');
	}
   public function contact_us()
   {	 
	  $this->load->view('contact_us');

   }
}
?>
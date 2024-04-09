<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Portfolio extends CI_Controller {
	
	public function __Construct(){
		parent::__Construct();
		$this->load->model('Portfolio_model');
	}
	
	public function index(){
		$data['portfolio']=$this->Portfolio_model->get_portfolio();
		$data['categories']=$this->Portfolio_model->get_categories();
		$data['title']='Portfolio';
		
		$this->load->view('header1', $data);
		$this->load->view('portfolio/portfolio_view');
		$this->load->view('footer');
	}
	
	public function project($project_title, $portfolio_id){
		$data['portfolio']=$this->Portfolio_model->get_one_project($portfolio_id);
		$data['categories']=$this->Portfolio_model->get_categories();
		$data['tags']=$this->Portfolio_model->get_tags();
		$data['services']=$this->Portfolio_model->get_services();
		$data['portfolio2']=$this->Portfolio_model->get_portfolio();
		$data['title']='Portfolio Project';
		
		$this->load->view('header1', $data);
		$this->load->view('portfolio/one_project_view');
		$this->load->view('footer');
	}
	
}?>
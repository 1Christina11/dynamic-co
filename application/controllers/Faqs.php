<?php defined('BASEPATH') OR exit('No direct script access allowed');

		class Faqs extends CI_Controller{
			
			function __construct(){
			   parent::__construct();
			   $this->load->model('Faqs_model');
			}

			public function index(){
				$data['faqs_data']=$this->Faqs_model->categories_faqs();
				$data['faqs_categories']=$this->Faqs_model->get_faqs_categories();
				$data['title']='FAQs';
				
				$this->load->view('header1',$data);
				$this->load->view('faqs_view');
				$this->load->view('footer');
			}

		 }?>
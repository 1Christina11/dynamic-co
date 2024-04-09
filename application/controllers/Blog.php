<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Blog extends CI_Controller {
	
	public function __Construct(){
		parent::__Construct();
		$this->load->model('Blog_model');
	}
	
	public function index(){
		$data['blogs']=$this->Blog_model->get_blog();
		$data['tags']=$this->Blog_model->get_tags();
		$data['title']='Blogs';
		
		$this->load->view('header1' , $data);
		$this->load->view('blogs/blogs_view');
		$this->load->view('footer');
	}
	
		public function blog($title , $blogs_id){
		$data['blogs']=$this->Blog_model->get_one_blog($blogs_id);
		$data['title']='Blogs';
		$data['tags']=$this->Blog_model->get_tags();       
		$data['photo_data']=$this->Blog_model->get_blog_photos($blogs_id);       
			$data['blogs2']=$this->Blog_model->get_blog();


			
	    $this->load->view('header1' ,$data);
		$this->load->view('blogs/one_blog_view');
		$this->load->view('footer');
	}

	
}?>
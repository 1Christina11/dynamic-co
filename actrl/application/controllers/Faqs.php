<?php defined('BASEPATH') OR exit('No direct script access allowed');

		class Faqs extends CI_Controller{
			
			function __construct(){
			   parent::__construct();
			   $this->load->model('Faqs_model');
			}

			public function load_faqs(){
				$data['faqs_data']=$this->Faqs_model->get_all_faqs();
				$data['faqs_categories']=$this->Faqs_model->get_faqs_categories();
				
				$this->load->view('header');
				$this->load->view('faqs/faqs_view' , $data);
				$this->load->view('footer');
			}


			public function insert_faqs (){
				
				$data = array(
					'question'=>$this->input->post('question'), 
					'answer'=>$this->input->post('answer'),
					'tags_id'=>$this->input->post('faqs_categories_id'),
				);
				
				$this->db->insert('faqs',$data);
				redirect('Faqs/load_faqs');
			}

			public function edit_one_faq($faq_id){
				$data['faq_data']=$this->Faqs_model->get_one_faq($faq_id);
				$data['faqs_categories']=$this->Faqs_model->get_faqs_categories();
				
				$this->load->view('header');
				$this->load->view('faqs/faqs_edit_view',$data);
				$this->load->view('footer');
			 }
			
			 public function update_faq(){
				 $data = array(
					'question' => $this->input->post('question'), 
					'answer' => $this->input->post('answer'),
					'tags_id'=>$this->input->post('tags_id'),
				 );
				 
				 $this->db->where('faq_id',$this->input->post('faq_id'));
				 $this->db->update('faqs',$data);

				 redirect('Faqs/load_faqs');
			 }

			 public function delete_faq($faq_id){
				 $this->db->where('faq_id', $faq_id);
				 $this->db->delete('faqs');
				 
				 redirect('Faqs/load_faqs');
			 }
			
			 public function get_faqs_categories(){
				$data['faqs_categories']=$this->Faqs_model->get_faqs_categories();

				$this->load->view('header');
				$this->load->view('faqs/faqs_categories', $data);
				$this->load->view('footer');
			 }
			
			 public function get_tags(){
				$data['tags_data']=$this->Faqs_model->get_all_tags();

				$this->load->view('header');
				$this->load->view('faqs/tags', $data);
				$this->load->view('footer');
			 }

			 public function add_faqs_categories(){
				$data = array(
					'category_name' => $this->input->post('category_name'), 
					
				 );
				
				$this->db->insert('faqs_categories',$data);
				redirect('Faqs/get_faqs_categories');
			 }
			
			 public function delete_faq_category($faqs_categories_id){
				 $this->db->where('faqs_categories_id', $faqs_categories_id);
				 $this->db->delete('faqs_categories');
				 
				 redirect('Faqs/get_faqs_categories');
			 }
			
			 public function add_tags(){
				$data = array(
					'tag_name' => $this->input->post('tag_name'), 
					
				 );
				
				$this->db->insert('tags',$data);
				redirect('Faqs/get_tags');
			 }
			
			 public function delete_tag($tags_id){
				 $this->db->where('tags_id', $tags_id);
				 $this->db->delete('tags');
				 
				 redirect('Faqs/get_tags');
			 }
		 }?>
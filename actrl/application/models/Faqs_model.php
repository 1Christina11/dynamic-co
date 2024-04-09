<?php defined('BASEPATH') OR exit('NO direct script access allowed');

		class Faqs_model extends CI_Model{

			function __construct(){                             
				parent::__construct();
			}

			public function get_all_faqs(){
				$query=$this->db->get('faqs');
				
				return $query->result();
			}
			
			public function get_all_faqs_by_tag($tags_id){
				$this->db->where('tags_id', $tags_id);
				$query=$this->db->get('faqs');
				
				return $query->result();
			}
			
			public function get_by_faqs_categories($tags_id){
				$this->db->where('tags_id', $tags_id);
				$query=$this->db->get('faqs');
				
				return $query->result();
			}

			public function get_one_faq ($faq_id){
				$this->db->where('faq_id', $faq_id);
				$query=$this->db->get('faqs');
				
				return $query->row();
			}
			

			public function get_all_tags(){
				$query=$this->db->get('tags');
				
				return $query->result();
			}
			
			public function get_faqs_categories(){
				$query=$this->db->get('faqs_categories');
				
				return $query->result();
			}
			
			public function tags_faqs(){
				$query = $this->db->select('*')
						 ->from('faqs as t1')
						 ->join('tags as t2', 't1.tags_id = t2.tags_id', 'LEFT')
						 ->get();
				  return $query->result();
			}

		}?>
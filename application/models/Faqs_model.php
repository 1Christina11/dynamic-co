<?php defined('BASEPATH') OR exit('NO direct script access allowed');

		class Faqs_model extends CI_Model{

			function __construct(){                             
				parent::__construct();
			}

			public function get_all_faqs(){
				$query=$this->db->get('faqs');
				
				return $query->result();
			}
			
			public function categories_faqs(){
				$query = $this->db->select('*')
						 ->from('faqs as t1')
						 ->join('faqs_categories as t2', 't1.tags_id = t2.faqs_categories_id', 'LEFT')
						 ->get();
				  return $query->result();
			}

			public function get_faqs_categories(){
				$query=$this->db->get('faqs_categories');
				
				return $query->result();
			}
			
}?>
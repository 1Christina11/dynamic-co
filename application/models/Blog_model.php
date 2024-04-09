<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Blog_model extends CI_Model {
	
	public function get_blog(){
		$this->db->order_by('blog_date','asc');
		$query = $this->db->get('blogs');
		return $query->result();
	}
		public function get_blog_photos($blogs_id){
		$this->db->where('blogs_id', $blogs_id);
		$query = $this->db->get('blogs_photos');
		return $query->result();
	}
	
		public function get_tags(){
		$query = $this->db->get('tags');
		return $query->result();
	}

	public function get_one_blog($blogs_id){
		$this->db->where('blogs_id', $blogs_id);
		$query = $this->db->get('blogs');
		return $query->row();
	}
	
}?>
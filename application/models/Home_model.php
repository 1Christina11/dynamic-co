<?php defined('BASEPATH') OR exit('No direct script access allowed');

 class Home_model extends CI_Model{

    public function get_all_sliders(){
		$this->db->where('main_slider_id',1);
		$query=$this->db->get('main_slider');
		
		return $query->result();
    }
	 
	public function get_portfolio(){
		$this->db->limit(8);
		$this->db->order_by('completed_on', 'desc');
		$query = $this->db->get('portfolio');
		return $query->result();
	}
	public function get_blog(){
	    $this->db->limit(6);
		$this->db->order_by('blog_date', 'desc');
		$query = $this->db->get('blogs');
		return $query->result();
	}
	 public function get_about_us(){
		$this->db->where('about_us_id',1);
		$query=$this->db->get('about_us');
		
		return $query->row();
    }

	 public function get_services(){
		 $this->db->limit(8);
		 $this->db->order_by('services_id', 'desc');
		 $query = $this->db->get('services');
		 return $query->result();
	 }
	 
	 public function get_all_services($categories_id){
		$this->db->where('categories_id',$categories_id);
		$query=$this->db->get('services');
		return $query->result();
	}
	 
     public function get_categories(){
		$query = $this->db->get('categories');
		return $query->result();
	 }

 }?>
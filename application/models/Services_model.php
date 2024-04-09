<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Services_model extends CI_Model{
	
	
    function __construct()
  {
      parent::__construct(); // construct the Model class
  }
    public function get_services(){
		$query = $this->db->get('services');
		return $query->result();
	}
	public function get_portfolio(){
		$query = $this->db->get('portfolio');
		return $query->result();
	}
    public function get_all_services($sub_categories_id)
{
	$this->db->where('sub_categories_id',$sub_categories_id);
    $query=$this->db->get('services');
    return $query->result();
}
	public function get_one_service($services_id)
	{
	$this->db->where('services_id',$services_id);
    $query=$this->db->get('services');
    return $query->row();
}
	public function get_service_photos($services_id){
		$this->db->where('services_id', $services_id);
		$query = $this->db->get('services_photos');
		return $query->result();
	}
   public function get_categories(){
		$query = $this->db->get('categories');
		return $query->result();
	}
   public function get_portfolio_photos($portfolio_id){
		$this->db->where('portfolio_id', $portfolio_id);
		$query = $this->db->get('portfolio_photos');
		return $query->result();
	}
	public function seacrh_categories($categories_id){

		$query = $this->db->select('*')
				 ->from('services as t1')
				 ->join('categories as t2', "t1.categories_id = t2.categories_id", 'LEFT')
				 ->where('t2.categories_id', $categories_id)
				 ->get();
		return $query->result();
	}
	public function get_join_categories($categories_id){
			$query = $this->db->select('*')
					 ->from('services as t1')
					 ->join('categories as t2', "t1.categories_id = t2.categories_id", 'LEFT')
					 ->where('t2.categories_id', $categories_id)
					 ->get();
//		}
		return $query->result();
	}
	public function get_tags(){
		$query = $this->db->get('tags');
		return $query->result();
	}
	public function get_portfolio_by_tag($tags_id_im){
		$this->db->where('tags', $tags_id_im);
		$query = $this->db->get('portfolio');
		return $query->result();
	}
} ?>
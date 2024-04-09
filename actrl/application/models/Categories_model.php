<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Categories_model extends CI_Model{
	
	
    function __construct()
  {
      parent::__construct(); 
  }

	
    public function get_all_categories()
{
    $query=$this->db->get('categories');
    return $query->result();
}
	 public function get_all_services()
{
    $query=$this->db->get('services');
    return $query->result();
}
	
	public function get_one_category($categories_id)
	{
	$this->db->where('categories_id',$categories_id);
    $query=$this->db->get('categories');
    return $query->row();
}

} ?>
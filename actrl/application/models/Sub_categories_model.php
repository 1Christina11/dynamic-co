<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Sub_categories_model extends CI_Model{
	
    public function get_all_sub_categories($categories_id)
	{
		$this->db->where('categories_id',$categories_id);
		$query = $this->db->get('sub_categories');
		
		return $query->result();
	}
	
	public function get_one_sub_category($sub_categories_id)
	{
		$this->db->where('sub_categories_id',$sub_categories_id);
		$query = $this->db->get('sub_categories');
		
		return $query->row();
	}

}?>
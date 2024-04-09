
<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Sub_categories_model extends CI_Model{
	
    public function get_sub_categories($categories_id)
	{
		$this->db->where('categories_id', $categories_id);
		$query=$this->db->get('sub_categories');
		
		return $query->result();
	}
	
}?>
    
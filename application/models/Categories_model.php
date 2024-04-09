
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
	public function get_one_categories($categories_id)
	{
	$this->db->where('categories_id',$categories_id);
    $query=$this->db->get('categories');
    return $query->row();
}

} ?>
    
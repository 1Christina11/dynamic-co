<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Services_model extends CI_Model{
	
	
    function __construct()
  {
      parent::__construct(); // construct the Model class
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

//public function insert_service_data($data)
//{
//    $this->db->insert('services', $data);
//}
//public function service_edit_row($data)
//{
//    $this->db->insert('edit_row', $data);
//    
//}
	public function seacrh_categories($categories_id){
//		$query = $this->db->get('portfolio');
//		foreach($query as $row){
//			$x=0;
//			$category_id.$x=$row->categories_id;
//			$x++;
//		}
//		for($i=0; $i<=$x; $i++){
//			$data['categories_id'][$i] = explode(',', $category_id.$i);
//			$result = array_search($categories_id, $data['categories_id'][$i]);
//			if($result == true){
//				$categories_id = implode(',', $data['categories_id'][$i]);
//				$this->db->where('categories_id', $categories_id);
//				$query = $this->db->get('portfolio');
//			}
//		}
//		return $query->result();
		$query = $this->db->select('*')
				 ->from('services as t1')
				 ->join('categories as t2', "t1.categories_id = t2.categories_id", 'LEFT')
				 ->where('t2.categories_id', $categories_id)
				 ->get();
		return $query->result();
	}
	public function get_join_categories($categories_id){
//		$this->db->where('categories_id', $categories_id);
//		$query = $this->db->get('portfolio');
//		
//		foreach($query as $row){
//			$x=0;
//			$categories_id.$x = $row->categories_id;
//			$data['categories_id'][$x] = explode(",", $categories_id.$x);
//			$x++;
//		}
//		for($i=0; $i<=$x; $i++){
//			$result = array_search($categories_id, $data['categories_id'][$i]);
//			if($result == true){
//				$this->db->where('categories_id', $categories_id);
//				$query = $this->db->get('categories');
//			}
//		}
//		
//		return $query->result();
//		$data['categories_id'] = explode(",", $categories_id);
//		$y = count($data['categories_id']);
//		for($i=0; $i<$y; $i++){
//			$category_id=$data['categories_id'][$i];
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
} ?>
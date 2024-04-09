<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Portfolio_model extends CI_Model {
	
	public function get_portfolio(){
		$query = $this->db->get('portfolio');
		return $query->result();
	}
	
	public function seacrh_tags($tags_id){
//		$query = $this->db->get('portfolio');
//		foreach($query->result() as $row){
//			$categories_id_ex = explode(',' , $row->categories_id);
//			$result = array_search($categories_id, $categories_id_ex ) . 'yes';
//		}
//		if($result != 'yes'){
//			$categries_id_im = implode(',', $categories_id_ex);
//			$this->db->where('categories_id', $categries_id_im);
//			$query = $this->db->get('portfolio');
//			return $query->result;
//		}
		$query = $this->db->select('*')
				 ->from('portfolio as t1')
				 ->join('tags as t2', "t1.tags = t2.tags_id", 'LEFT')
				 ->where('t2.tags_id', $tags_id)
				 ->get();
		return $query->result();
	}
	
	public function get_categories(){
		$query = $this->db->get('categories');
		return $query->result();
	}
	
	public function get_tags(){
		$query = $this->db->get('tags');
		return $query->result();
	}
	
	public function get_portfolio_photos($portfolio_id){
		$this->db->where('portfolio_id', $portfolio_id);
		$query = $this->db->get('portfolio_photos');
		return $query->result();
	}
	
	public function get_one_project($portfolio_id){
		$this->db->where('portfolio_id', $portfolio_id);
		$query = $this->db->get('portfolio');
		return $query->row();
	}
	
	public function get_project_by_tag($tags){
		$this->db->where('tags', $tags);
		$query = $this->db->get('portfolio');
		return $query->result();
	}
	
	public function get_join_categories($categories_id){
		$data['categories_id'] = explode(",", $categories_id);
		$y = count($data['categories_id']);
		for($i=0; $i<$y; $i++){
			$category_id=$data['categories_id'][$i];
			$query = $this->db->select('*')
					 ->from('portfolio as t1')
					 ->join('categories as t2', "t1.categories_id = t2.categories_id", 'LEFT')
					 ->where('t2.categories_id', $category_id)
					 ->get();
		}
		return $query->result();
	}
	
}?>

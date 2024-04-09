<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Portfolio_model extends CI_Model {
	
	public function get_portfolio(){
		$query = $this->db->get('portfolio');
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
	
	public function get_services_photos($services_id){
		$this->db->where('services_id', $services_id);
		$query = $this->db->get('services_photos');
		return $query->result();
	}
	
	public function get_categories(){
		$query = $this->db->get('categories');
		return $query->result();
	}
	
	public function get_one_project($portfolio_id){
		$this->db->where('portfolio_id', $portfolio_id);
		$query = $this->db->get('portfolio');
		return $query->row();
	}
	
	public function get_services(){
		$query = $this->db->get('services');
		return $query->result();
	}
	
	public function get_services_by_tag($tags_id_im){
		$this->db->where('tags', $tags_id_im);
		$query = $this->db->get('services');
		return $query->result();
	}
}?>
<?php defined('BASEPATH') OR exit('No direct script access allowed');


class Aboutus_model extends CI_Model {


    public function get_one_about_us(){
		
        $this->db->where('about_us_id',1);
        $query = $this->db->get('about_us');
		return $query->row();
	}
	public function get_clients(){
		$this->db->limit(12);
        $query = $this->db->get('clients');
		return $query->result();
	}
}?>
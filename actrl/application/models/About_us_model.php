<?php defined('BASEPATH') OR exit('No direct script access allowed');


class About_us_model extends CI_Model {


    public function get_one_about_us(){
		
        $this->db->where('about_us_id',1);
        $query = $this->db->get('about_us');
		return $query->row();
	}
	public function get_all_clients()
    {
        $query = $this->db->get("clients");
        return $query->result();
    }
    public function get_one_client($clients_id)
    {
        $this->db->where("clients_id", $clients_id);
        $query = $this->db->get("clients");
        return $query->row();
    }
}?>
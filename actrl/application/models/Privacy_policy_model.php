<?php defined('BASEPATH') OR exit('No direct script access allowed');


class Privacy_policy_model extends CI_Model {


    public function get_one_privacy(){
		
        $this->db->where('privacy_policy_id',1);
        $query = $this->db->get('privacy_policy');
		return $query->row();
	
    }
}?>
<?php defined('BASEPATH') OR exit('No direct script access allowed');

		class Terms_conditions_model extends CI_Model {
			
			public function get_terms_conditions(){   
				$query = $this->db->get('terms_conditions');
				return $query->row();
			}

 		}?>

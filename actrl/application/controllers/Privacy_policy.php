<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Privacy_policy extends CI_Controller {

	public function __construct(){
		parent::__construct();

		$this->load->model('Privacy_policy_model');		
	
    } 

	
	public function edit_privacy(){
	   $data['privacy_policy'] =  $this->Privacy_policy_model->get_one_privacy();
		
		$this->load->view('header', $data);
		$this->load->view('privacy_policy_view');
	    $this->load->view('footer');
	
	}
	public function update_privacy(){
			$data = array(
				'text' =>$this->input->post('text'),
						 );
			$this->db->where('privacy_policy_id ',1);
			$this->db->update('privacy_policy', $data);

				
	      redirect('Privacy_policy/edit_privacy');
		}
}

?>
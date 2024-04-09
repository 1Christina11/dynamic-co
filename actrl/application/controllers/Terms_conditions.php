<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Terms_conditions extends CI_Controller {

	public function __construct()
	{
	   parent ::__construct();
	   $this->load->model('Terms_conditions_model');
	 }
	
    public function index()
    {
        $data['terms_conditions'] = $this->Terms_conditions_model->get_terms_conditions();
		
		$this->load->view('header');
        $this->load->view('terms_conditions_view', $data);
	    $this->load->view('footer');
    }
	
	public function update_terms_conditions(){
		$data = array(
			'text'=>$this->input->post('text'),
		);
//        $this->db->insert('privacy_policy',$data);
		$this->db->where('terms_conditions_id',1);
		$this->db->update('terms_conditions', $data);
		redirect('Terms_conditions');
	}
}?>
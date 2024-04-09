<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Contact_us extends CI_Controller {

	public function __construct()
	{
	   parent ::__construct();
	   $this->load->model('Contact_us_model');
	 }
	
	
    public function edit_contact()
    {
        $data['contact_us'] = $this->Contact_us_model->get_one_contact();
		$this->load->view('header');
        $this->load->view('contact_us/contact_view',$data);
	    $this->load->view('footer');
    }
	
	
	
    public function update_contact()
    {
      $data=array(
        'phone' => $this->input->post('phone'),
        'email'=> $this->input->post('email'),
	    'address'=> $this->input->post('address'),
        'facebook'=> $this->input->post('facebook'),
        'twitter'=> $this->input->post('twitter'),
	    'pinterest'=> $this->input->post('pinterest'),
        'instagram'=> $this->input->post('instagram'),
        'location'=> $this->input->post('location'),

      );
				$this->db->where('contact_id',1);
				$this->db->update('contact_us',$data);
	      redirect('Contact_us/edit_contact');

    }

}

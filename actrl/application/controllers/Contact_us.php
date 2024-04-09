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
        'location' => $this->input->post('location'),
        'mobile'=> $this->input->post('mobile'),
	    'facebook_link'=> $this->input->post('facebook_link'),
        'intagram_link'=> $this->input->post('intagram_link'),
        'twitter_link'=> $this->input->post('twitter_link'),
	    'pinterest_link'=> $this->input->post('pinterest_link'),

        'linkedin_link'=> $this->input->post('linkedin_link'),
        'youtube_link'=> $this->input->post('youtube_link'),

      );
				$this->db->where('contact_us_id',1);
				$this->db->update('contact_us',$data);
	      redirect('Contact_us/edit_contact');

    }

}

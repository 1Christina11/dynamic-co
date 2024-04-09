<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Contact_us extends CI_Controller {

	public function __construct()
	{
	   parent ::__construct();
	   $this->load->model('Contact_us_model');
	 }
	
	
    public function index($msg = NULL){
	    $data['contact'] = $this->Contact_us_model->get_contact();
	    $data["services"] = $this->Contact_us_model->get_services();
	    $data['title'] = 'contact';
		
		$this->load->view('header1' , $data);
		$this->load->view('contact_us_view');
		$this->load->view('footer');
    }
	
	public function success(){
        $data['msg'] = 'email sent successfuly!';
        $data['title'] = 'Success';
        $this->load->view('header1', $data);
        $this->load->view('success_view');
        $this->load->view('footer');
    }
			
   	public function error(){
        $data['msg'] = 'email sent error,Please try again later';
        $data['title'] = 'Error';
        $this->load->view('header1', $data);
        $this->load->view('error_view');
        $this->load->view('footer');
    }

	
		
    public function send_mail()
    {
        
		$this->load->library('email');
		$this->load->config('info_mail');
       	$name = $this->input->post('name');
		$e_mail = $this->input->post('e_mail');
		$phone  = $this->input->post('phone');
		$subject  = $this->input->post('subject');
		$services = $this->input->post('services');

		
		$message = 
            'customer Name : ' . $name . '<br>' . 
            "Email : <a href='mailto:$e_mail'>$e_mail</a><br>" .
            "Phone No. : <a href='tel:$phone'>$phone</a><br>" .
            'service requested : ' . $services . '<br>' . 
            'customer  Message : ' . $this->input->post('message') . '<br>';
//			contact@mortgageloanexp.com
		$this->email->to('info@dynamic-co.com');
		$this->email->from($this->config->item('smtp_user'));
		$this->email->subject($subject);
		$this->email->message($message);
		
	   if ($this->email->send()){
		   redirect('Contact_us/success');
		}else{
		   redirect('Contact_us/error');
		}
        
    }
    
    }
    

?>
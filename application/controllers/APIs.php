<?php defined('BASEPATH') OR exit('No direct script access allowed');

class APIs extends CI_Controller {

	public function __construct(){
		parent::__construct();

		$this->load->model('Aboutus_model');		
	
    }
	public function get_data(){

	   
        $this->load->library('curl');

        $data = array(
            'name' => 'John Doe',
            'age' => 30,
            'is_student' => true,
            'hobbies' => array('reading', 'swimming', 'traveling'),
            'address' => array(
                'street' => '123 Main St',
                'city' => 'Anytown',
                'state' => 'CA',
                'zip' => '12345'
            )
        );

        $json_data = json_encode($data);

        $this->curl->create('https://example.com/api');
        $this->curl->http_header('Content-Type', 'application/json');
        $this->curl->post($json_data);

        $result = $this->curl->execute();


    }
	
		
}?>
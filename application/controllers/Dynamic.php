<?php
defined("BASEPATH") or exit("No direct script access allowed");

class Dynamic extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("Services_model");
    }

    public function index($sub_catergory_title ,$sub_categories_id)
    {
        $data["services"] = $this->Services_model->get_all_services($sub_categories_id);
		$data['categories']=$this->Services_model->get_categories();
		$data['sub_categories_id']=$sub_categories_id;
		$data['tags']=$this->Services_model->get_tags(); 
			    $data['title']='services';

	    $this->load->view("header1", $data);
        $this->load->view("services/services_view");
        $this->load->view("footer");
	
    } 
	

   public function service($services_title ,$services_id){
	    $data["services"] = $this->Services_model->get_one_service($services_id);
		$data['photo_data']=$this->Services_model->get_service_photos($services_id);
		$data['categories']=$this->Services_model->get_categories();
		$data['tags']=$this->Services_model->get_tags();
	   	$data['services2']=$this->Services_model->get_services();
	    $data['title']='services';
	    $data['portfolio']=$this->Services_model->get_portfolio();

		$this->load->view("header1" , $data);
        $this->load->view("services/one_service_view", $data);
        $this->load->view("footer");
		
    }
	public function services(){
	    $data["services"] = $this->Services_model->get_services();
		$data['categories']=$this->Services_model->get_categories();
	    $data['title']='services';

		$this->load->view("header" , $data);
        $this->load->view("services/service_data_view", $data);
        $this->load->view("footer");
		
    } 
}
?>

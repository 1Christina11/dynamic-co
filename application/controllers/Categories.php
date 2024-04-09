<?php
defined("BASEPATH") or exit("No direct script access allowed");

class Categories extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("Categories_model");
    }

    public function index()
    {
        $data["categories"] = $this->Categories_model->get_all_categories();
        $data["title"]='Services-Categories';
		
        $this->load->view("header1",$data);
        $this->load->view("services/categories_view");
        $this->load->view("footer");
    }
}
?>

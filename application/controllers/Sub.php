<?php
defined("BASEPATH") or exit("No direct script access allowed");

class Sub extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("Sub_categories_model");
    }

    public function category($category_title, $categories_id)
    {
        $data["sub_categories"] = $this->Sub_categories_model->get_sub_categories($categories_id);
        $data["title"]='Sub-Categories';
		
        $this->load->view("header1",$data);
        $this->load->view("services/sub_categories_view");
        $this->load->view("footer");
    }
}
?>

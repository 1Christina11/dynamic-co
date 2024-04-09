<?php
defined("BASEPATH") or exit("No direct script access allowed");

class Sub_categories extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("Sub_categories_model");
	}
	
    public function get_sub_categories($categories_id)
    {
        $data['sub_categories'] = $this->Sub_categories_model->get_all_sub_categories($categories_id);
		$data['categories_id'] = $categories_id;
		
		$this->load->view("header");
        $this->load->view("services/sub_categories_view", $data);
        $this->load->view("footer");
    }
	
    private function set_upload_options($path_folder)
    {
        //upload an image options
        $config = [];
        $config["upload_path"] = "././assets/images/" . $path_folder . "/";
        $config["allowed_types"] = "gif|jpg|png|jpeg|bmp";
        $config["max_size"] = "0";
        $config["overwrite"] = false;

        return $config;
    }
	
    public function add_sub_category()
    {
        if ($_FILES["userfile"]["name"] != "") {
            $path_folder = "sub_categories_photos";
            $this->upload->initialize($this->set_upload_options($path_folder));

            if (!$this->upload->do_upload("userfile")) {
                $sub_photo = $this->upload->display_errors();
            } else {
                $data = ["upload_data" => $this->upload->data()];
                $sub_photo = $data["upload_data"]["file_name"];
            }
            $data = array(
			    "categories_id" => $this->input->post("categories_id"),
			    "sub_title" => $this->input->post("sub_title"),
                "sub_photo" => $sub_photo
			);
            $this->db->insert("sub_categories", $data);
        }else{
            $data = array(
			    "categories_id" => $this->input->post("categories_id"),
                "sub_title" => $this->input->post("sub_title"),
			);
            $this->db->insert("sub_categories", $data);
        }
		
        redirect("Sub_categories/get_sub_categories/".$this->input->post("categories_id"));
    }

    public function edit_sub_category($sub_categories_id)
    {
        $data['sub_category'] = $this->Sub_categories_model->get_one_sub_category($sub_categories_id);
		
        $this->load->view("header");
        $this->load->view("services/one_sub_category_view", $data);
        $this->load->view("footer");
    }

    public function update_sub_category()
    {
        if ($_FILES["userfile"]["name"] != "") {
            $path_folder = "sub_categories_photos";
            $this->upload->initialize($this->set_upload_options($path_folder));

            if (!$this->upload->do_upload("userfile")) {
                $sub_photo = $this->upload->display_errors();
            } else {
                $data = ["upload_data" => $this->upload->data()];
                $sub_photo = $data["upload_data"]["file_name"];
            }
            $data = array(
			    "sub_title" => $this->input->post("sub_title"),
                "sub_photo" => $sub_photo
			);
			
            $this->db->where("sub_categories_id", $this->input->post("sub_categories_id"));
            $this->db->update("sub_categories", $data);
        } else {
            $data = array(
			    "sub_title" => $this->input->post("sub_title"),
			);
			
            $this->db->where("sub_categories_id", $this->input->post("sub_categories_id"));
            $this->db->update("sub_categories", $data);
        }
		
        redirect("Sub_categories/get_sub_categories/".$this->input->post("categories_id"));
    }
	
	public function delete_sub_category($sub_categories_id, $categories_id)
    {
        $this->db->where("sub_categories_id", $sub_categories_id);
        $this->db->delete("sub_categories");

		redirect("Categories/get_categories_services/".$categories_id);
	}
	
}
?>

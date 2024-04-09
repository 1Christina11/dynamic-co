<?php
defined("BASEPATH") or exit("No direct script access allowed");

class Categories extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("Categories_model");

}
 
	
    public function get_categories_services()
    {
        $data["categories"] = $this->Categories_model->get_all_categories();       
        $data["services"] = $this->Categories_model->get_all_services();
		$this->load->view("header");
        $this->load->view("services/categories_view", $data);
        $this->load->view("footer");
    }
	
    public function add_categories_services()
    {
        if ($_FILES["userfile"]["name"] != "") {
            $path_folder = "category_photo";

            $this->upload->initialize($this->set_upload_options($path_folder));

            if (!$this->upload->do_upload("userfile")) {
                $photo = $this->upload->display_errors();
            } else {
                $data = ["upload_data" => $this->upload->data()];
                $photo = $data["upload_data"]["file_name"];
            }
            $data = [
/*
                "service_head" => $this->input->post("service_head"),
*/
			    "photo" => $photo,
                "catergory_title" => $this->input->post("catergory_title"),
            ];
            $this->db->insert("categories", $data);
        } else {
            $data = [
        
                "catergory_title" => $this->input->post("catergory_title"),
            ];
            $this->db->insert("categories", $data);
        }
		
		
		
	
		
		
        redirect("Categories/get_categories_services");
    }

    public function edit_categories_services($categories_id)
    {
        $data["categories"] = $this->Categories_model->get_one_category($categories_id);
        $this->load->view("header");
        $this->load->view("services/one_category_view", $data);
        $this->load->view("footer");
    }

    public function update_categories_services()
    {
        if ($_FILES["userfile"]["name"] != "") {
            $path_folder = "category_photo";

            $this->upload->initialize($this->set_upload_options($path_folder));

            if (!$this->upload->do_upload("userfile")) {
                $photo = $this->upload->display_errors();
            } else {
                $data = ["upload_data" => $this->upload->data()];
                $photo = $data["upload_data"]["file_name"];
            }
            $data = [
                "photo" => $photo,
                "catergory_title" => $this->input->post("catergory_title"),

            ];
			
            $this->db->where("categories_id", $this->input->post("categories_id"));
            $this->db->update("categories", $data);
        } else {
            $data = [
				 "photo" => $this->input->post("photo"),

                "catergory_title" => $this->input->post("catergory_title"),
            ];
            $this->db->where("categories_id", $this->input->post("categories_id"));
            $this->db->update("categories", $data);
        }
		
		
	
		
		        redirect("Categories/get_categories_services");

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
	
public function delete_categories_services($categories_id)
    {
        $this->db->where("categories_id", $categories_id);
        $this->db->delete("categories");

		redirect("Categories/get_categories_services");

	
}
	
}
?>

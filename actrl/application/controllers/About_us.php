<?php defined('BASEPATH') OR exit('No direct script access allowed');

class About_us extends CI_Controller {

	public function __construct(){
		parent::__construct();

		$this->load->model('About_us_model');		
	
    } 

	
	public function clients(){

		$data["clients"] = $this->About_us_model->get_all_clients();
		
		$this->load->view('header', $data);
		$this->load->view('about_us/clients_view');
	    $this->load->view('footer');
	}
	public function edit_about_us(){

	   $data['about_us'] =  $this->About_us_model->get_one_about_us();
		
		$this->load->view('header', $data);
		$this->load->view('about_us/about_us_edit_view');
	    $this->load->view('footer');
	}
	
		public function update_about_us(){
			$data = array(
				'title' =>$this->input->post('title'),
				'paragraph' =>$this->input->post('paragraph'),
				'vision' =>$this->input->post('vision'),
				'mission' =>$this->input->post('mission'),
				'value' =>$this->input->post('value'),
				'counter_1' =>$this->input->post('counter_1'),
				'counter_1_title' =>$this->input->post('counter_1_title'),
				'counter_2' =>$this->input->post('counter_2'),
				'counter_2_title' =>$this->input->post('counter_2_title'),
				'counter_3' =>$this->input->post('counter_3'),
				'counter_3_title' =>$this->input->post('counter_3_title'),
				'counter_4' =>$this->input->post('counter_4'),
				'counter_4_title' =>$this->input->post('counter_4_title'),
				'counter_1_icon' =>$this->input->post('counter_1_icon'),
				'counter_2_icon' =>$this->input->post('counter_2_icon'),
				'counter_3_icon' =>$this->input->post('counter_3_icon'),
				'counter_4_icon' =>$this->input->post('counter_4_icon'),
			 );
			$this->db->where('about_us_id',1);
			$this->db->update('about_us', $data);

				
	      redirect('About_us/edit_about_us');
		}

	public function insert_client()
    {
        if ($_FILES["userfile"]["name"] != "") {
            $path_folder = "our_clients";

            $this->upload->initialize($this->set_upload_options($path_folder));

            if (!$this->upload->do_upload("userfile")) {
                $client_logo = $this->upload->display_errors();
            } else {
                $data = ["upload_data" => $this->upload->data()];
                $client_logo = $data["upload_data"]["file_name"];
            }
            $data = [
                "client_name" => $this->input->post("client_name"),
                "client_logo" => $client_logo,
            ];
            $this->db->insert("clients", $data);
        } else {
            $data = [
                "client_name" => $this->input->post("client_name"),
            ];
            $this->db->insert("clients", $data);
        }
        redirect("About_us/clients");
    }

    public function edit_client($clients_id)
    {
        $data["clients"] = $this->About_us_model->get_one_client($clients_id);
        $this->load->view("header" , $data);
        $this->load->view('about_us/clients_edit_view');
	    $this->load->view('footer');
    }

    public function update_client($clients_id)
    {
        if ($_FILES["userfile"]["name"] != "") {
            $path_folder = "our_clients";

            $this->upload->initialize($this->set_upload_options($path_folder));

            if (!$this->upload->do_upload("userfile")) {
                $client_logo = $this->upload->display_errors();
            } else {
                $data = ["upload_data" => $this->upload->data()];
                $client_logo = $data["upload_data"]["file_name"];
            }
            $data = [
                "client_name" => $this->input->post("client_name"),
                "client_logo" => $client_logo,
            ];
            $this->db->where("clients_id", $this->input->post("clients_id"));
			$this->db->update('clients', $data);
        } else {
            $data = [
                "client_name" => $this->input->post("client_name"),
            ];
            $this->db->where("clients_id", $this->input->post("clients_id"));
			$this->db->update('clients', $data);
        }
        redirect("About_us/clients/");
    }

    public function delete_client($clients_id)
    {
       
        $this->db->where("clients_id", $clients_id);
        $this->db->delete("clients");

        redirect("About_us/clients");
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
}

?>
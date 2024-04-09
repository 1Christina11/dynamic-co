<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Services extends CI_Controller {
	 public function __construct()
    {
        parent::__Construct();
        $this->load->model("Services_model");
    }
       public function index($categories_id, $sub_categories_id){
        $data["services"] = $this->Services_model->get_all_services($sub_categories_id);
		$data['categories']=$this->Services_model->get_categories();
		$data['tags']=$this->Services_model->get_tags();       
		$data['categories_id'] = $categories_id;
		$data['sub_categories_id'] = $sub_categories_id;
		   
		$this->load->view('header');
        $this->load->view("services/services_view", $data);
		$this->load->view('footer');
	}
	
	   

    private function set_upload_options($path_folder)
    {
        //upload an image options
        $config = [];
        $config["upload_path"] = "./assets/images/" . $path_folder . "/";
        $config["allowed_types"] = "gif|jpg|png|jpeg|bmp";
        $config["max_size"] = "0";
        $config["overwrite"] = false;

        return $config;
    }
	  public function add_services(){
        $created_at = date('Y-m-d h:i:s a', time());
		$data = array(
		    'categories_id' =>  $this->input->post('categories_id'), 
		    'sub_categories_id' =>  $this->input->post('sub_categories_id'), 
		    'tags' => implode(",", $this->input->post('tags_id')),
		    'description' => $this->input->post('description'), 
		    'video_link' => $this->input->post('video_link'), 
		    'services_title' => $this->input->post('services_title'), 
		);
		$this->db->insert('services' , $data);
		$services_id = $this->db->insert_id();

		$path_folder = 'service_file';
		$dataInfo = array();
		$files = $_FILES;
		$cpt = count($_FILES['userfile']['name']);
		for($i=0; $i<$cpt; $i++){           
			$_FILES['userfile']['name']= $files['userfile']['name'][$i];
			$_FILES['userfile']['type']= $files['userfile']['type'][$i];
			$_FILES['userfile']['tmp_name']= $files['userfile']['tmp_name'][$i];
			$_FILES['userfile']['error']= $files['userfile']['error'][$i];
			$_FILES['userfile']['size']= $files['userfile']['size'][$i];    

			$this->upload->initialize($this->set_upload_options($path_folder));
			$this->upload->do_upload('userfile');
			$dataInfo[] = $this->upload->data();

			$photo = $dataInfo[$i]['file_name'];
			$data = array(
              	'photo' => $photo,   
				'services_id' =>$services_id, 
				'created_at' => $created_at, 
			);
		    $this->db->insert('services_photos',$data);
		}		
        redirect("Services/index/".$this->input->post('categories_id').'/'. $this->input->post('sub_categories_id'));
    }

       public function edit_services($services_id){
	    $data["services"] = $this->Services_model->get_one_service($services_id);
		$data['photo_data']=$this->Services_model->get_service_photos($services_id);
		$data['categories']=$this->Services_model->get_categories();
		$data['tags']=$this->Services_model->get_tags(); 
	
		$this->load->view("header");
        $this->load->view("services/one_service_view", $data);
        $this->load->view("footer");
	}
	
     public function update_services(){
         $created_at = date('Y-m-d h:i:s a', time());
		 $data = array(
		     'tags' => implode(",", $this->input->post('tags_id')),
		     'description' => $this->input->post('description'), 
		     'video_link' => $this->input->post('video_link'), 
		     'services_title' => $this->input->post('services_title'), 
		 );
		 $this->db->where('services_id', $this->input->post('services_id'));
		 $this->db->update('services',$data);
		 
		 $path_folder = 'service_file';
		 $dataInfo = array();
		 $files = $_FILES;
		 $cpt = count($_FILES['userfile']['name']);
		 if($_FILES['userfile']['name'][0] != "")
		 {
			 $this->db->where('services_id', $this->input->post('services_id'));
			 $this->db->delete('services_photos');
			 
			 for($i=0; $i<$cpt; $i++){ 
				 $_FILES['userfile']['name']= $files['userfile']['name'][$i];
				 $_FILES['userfile']['type']= $files['userfile']['type'][$i];
				 $_FILES['userfile']['tmp_name']= $files['userfile']['tmp_name'][$i];
				 $_FILES['userfile']['error']= $files['userfile']['error'][$i];
				 $_FILES['userfile']['size']= $files['userfile']['size'][$i];    

				 $this->upload->initialize($this->set_upload_options($path_folder));
				 $this->upload->do_upload('userfile');
				 $dataInfo[] = $this->upload->data();

				 $photo = $dataInfo[$i]['file_name'];
				 $data = array(
					 'photo' => $photo,   
					 'services_id' =>$this->input->post('services_id'), 
					 'created_at' => $created_at, 
				 );
				 $this->db->insert('services_photos',$data);
			 }
		 }
         redirect("Services/index/".$this->input->post('categories_id').'/'.$this->input->post('sub_categories_id'));
	}

    public function delete_services($services_id, $categories_id, $sub_categories_id)
    {
	    $this->db->where("services_id", $services_id);
	    $this->db->delete("services");

        redirect("Services/index/".$categories_id .'/'.$sub_categories_id);
	}
	
	public function seacrh_categories($categories_id){
		$data['categories'] = $this->Services_model->seacrh_categories($categories_id);
		$data['categories2']=$this->Services_model->get_categories();
		
		$this->load->view('header');
		$this->load->view("services/services_search_view", $data);
		$this->load->view('footer');
	}


}?>

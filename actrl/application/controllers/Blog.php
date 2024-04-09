<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Blog extends CI_Controller {
	 public function __construct()
    {
        parent::__Construct();
        $this->load->model("Blog_model");
    }

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/userguide3/general/urls.html
	 */
	    public function index()
    {
			$data["blogs"] = $this->Blog_model->get_blog();
			$data["tags"] = $this->Blog_model->get_tags();

			$this->load->view("header");
			$this->load->view("blog/get_blog_view", $data);
			$this->load->view("footer");
	
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
    public function insert_blog(){
		        $created_at = date('Y-m-d h:i:s a', time());
		$data = array(
			        'tags' => implode(",", $this->input->post('tags_id')),
                    "title" => $this->input->post("title"),
                    "description" => $this->input->post("description"),
                    "blog_date" => $this->input->post("blog_date"),
                    "video_link" => $this->input->post("video_link"),
                    "created_at" => $created_at,
		);
		$this->db->insert('blogs',$data);
		$blogs_id = $this->db->insert_id();

		$path_folder = 'photo_blog';
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
			$photo_data = array(
					'photo' => $photo, 
					'blogs_id' => $blogs_id, 
					'created_at' => $created_at,
			);
			$this->db->insert('blogs_photos',$photo_data);
		}		
        redirect("Blog");

    }
	

//       				public function insert_blog(){
//				date_default_timezone_set('America/Mexico_City');
//				$created_at = date('Y-m-d h:i:s a', time());
//				$photo='';
//				$music='';
//				$video='';
//				if ($_FILES['userfiles']['name'] != ""){
//					$path_folder = 'photo_blog';
//					$this->upload->initialize($this->set_upload_options($path_folder));
//					if (!$this->upload->do_upload('userfiles')) {
//						$photo = $this->upload->display_errors();
//					}else{
//						$data = array('upload_data' => $this->upload->data());
//						$photo = $data['upload_data']['file_name'];
//					}
//				}
//				if ($_FILES['userfiles2']['name'] != ""){
//					$path_folder = 'blogs';
//					$this->upload->initialize($this->set_upload_options($path_folder));
//					if (!$this->upload->do_upload('userfiles2')) {
//						$music = $this->upload->display_errors();
//					}else{
//						$data = array('upload_data' => $this->upload->data());
//						$music = $data['upload_data']['file_name'];
//					}
//				}
//				if ($_FILES['userfiles3']['name'] != ""){
//					$path_folder = 'blogs';
//					$this->upload->initialize($this->set_upload_options($path_folder));
//					if (!$this->upload->do_upload('userfiles2')) {
//						$video = $this->upload->display_errors();
//					}else{
//						$data = array('upload_data' => $this->upload->data());
//						$video = $data['upload_data']['file_name'];
//					}
//				}  
//				$data = array(
//
//                    "blogs_id" => $this->input->post("blogs_id"),
//                    "description" => $this->input->post("description"),
//                    "title" => $this->input->post("title"),
//                    "photo" => $photo,
//                    "video" => $video,
//                    "music" =>  $music,
//                    "created_at" => $created_at,
//							 );
//
//			
//			
//            $this->db->insert("blogs", $data);
//
//        redirect("Blog");
//
//			}



    public function edit_blog($blogs_id){
			$data["blogs"] = $this->Blog_model->get_one_blog($blogs_id);
			$data["photo_data"] = $this->Blog_model->get_blog_photos($blogs_id);
			$data["tags"] = $this->Blog_model->get_tags();

		
			$this->load->view("header");
			$this->load->view("blog/edit_blog_view", $data);
			$this->load->view("footer");
		
    }
//    public function read_more($blogs_id){
//			$data["blogs"] = $this->Blog_model->get_one_blog($blogs_id);
//			$data["photo"] = $this->Blog_model->get_blog_photos($blogs_id);
//		
//			$this->load->view("header");
//			$this->load->view("blog/read_more_view", $data);
//			$this->load->view("footer");
//		
//    }

	
	
	
	
		public function update_blog(){
		$data = array(
			'tags' => implode(",", $this->input->post('tags_id')),
			"title" => $this->input->post("title"),
			"description" => $this->input->post("description"),
			"blog_date" => $this->input->post("blog_date"),
			"video_link" => $this->input->post("video_link"),
		);
		$this->db->where('blogs_id', $this->input->post('blogs_id'));
		$this->db->update('blogs',$data);

		$path_folder = 'photo_blog';
		$dataInfo = array();
		$files = $_FILES;
		$cpt = count($_FILES['userfile']['name']);
		if($_FILES['userfile']['name'][0] != "")
		{
			$this->db->where('blogs_id', $this->input->post('blogs_id'));
			$this->db->delete('blogs_photos');
			for($i=0; $i<$cpt; $i++)
			{           
				$_FILES['userfile']['name']= $files['userfile']['name'][$i];
				$_FILES['userfile']['type']= $files['userfile']['type'][$i];
				$_FILES['userfile']['tmp_name']= $files['userfile']['tmp_name'][$i];
				$_FILES['userfile']['error']= $files['userfile']['error'][$i];
				$_FILES['userfile']['size']= $files['userfile']['size'][$i];    

				$this->upload->initialize($this->set_upload_options($path_folder));
				$this->upload->do_upload('userfile');
				$dataInfo[] = $this->upload->data();

				$photos = $dataInfo[$i]['file_name'];
				$photo_data = array(
					'photo' => $photos, 
					'blogs_id' => $this->input->post('blogs_id'), 
					'created_at' => $created_at, 
				);
				$this->db->insert('blogs_photos',$photo_data);
			}
		}
        redirect("Blog");	}

//    public function update_blog(){
//        $created_at = date('Y-m-d h:i:s a', time());
//		$data = array(
//                    "title" => $this->input->post("title"),
//                    "description" => $this->input->post("description"),
//                    "video_link" => $this->input->post("video_link"),
//                    "created_at" => $created_at,
//		);
//		$this->db->where('blogs_id', $this->input->post('blogs_id'));
//		$this->db->update('blogs',$data);
//
//		$path_folder = 'photo_blog';
//		$dataInfo = array();
//		$files = $_FILES;
//		$cpt = count($_FILES['userfile']['name']);
//		for($i=0; $i<$cpt; $i++){           
//			$_FILES['userfile']['name']= $files['userfile']['name'][$i];
//			$_FILES['userfile']['type']= $files['userfile']['type'][$i];
//			$_FILES['userfile']['tmp_name']= $files['userfile']['tmp_name'][$i];
//			$_FILES['userfile']['error']= $files['userfile']['error'][$i];
//			$_FILES['userfile']['size']= $files['userfile']['size'][$i];    
//
//			$this->upload->initialize($this->set_upload_options($path_folder));
//			$this->upload->do_upload('userfile');
//			$dataInfo[] = $this->upload->data();
//
//			$photos = $dataInfo[$i]['file_name'];
//			$photo_data = array(
//					'photo' => $photo, 
//					'blogs_id' => $this->input->post('blogs_id'), 
//					'created_at' => $created_at,
//			);
//			$this->db->where('blogs_id', $this->input->post('blogs_photo_id'));
//			$this->db->update('blogs_photos',$photo_data);
//		}
//        redirect("Blog");
//    }
	
//    public function insert_database()
//        {
//                $blogs_photos = array(
//                        'cover_blog' => array(
//                                 'type' => 'varchar',
//                                 'constraint' => 100,
//                                 'after' => 'photo'
//                    )
//                );
//                $this->dbforge->add_column('blog', $blogs_photos);
//        }
	
    public function delete_blog($blogs_id)
    {
        $this->db->where("blogs_id", $blogs_id);
        $this->db->delete("blogs");

        redirect("Blog");    }


}

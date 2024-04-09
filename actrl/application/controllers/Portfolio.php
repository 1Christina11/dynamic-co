<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Portfolio extends CI_Controller {
	
	public function __Construct(){
		parent::__Construct();
		$this->load->model('Portfolio_model');
	}
	
	public function get_portfolio(){
		$data['portfolio']=$this->Portfolio_model->get_portfolio();
		$data['categories']=$this->Portfolio_model->get_categories();
		$data['tags']=$this->Portfolio_model->get_tags();
		
		$this->load->view('header');
		$this->load->view('portfolio/portfolio_view', $data);
		$this->load->view('footer');
	}
	
	public function seacrh_category($catergories_id){
//		$data['tags'] = $this->Portfolio_model->seacrh_tags($tags_id);
		$data['portfolio']=$this->Portfolio_model->get_portfolio();
		$data['categories']=$this->Portfolio_model->get_categories();
		$data['tags']=$this->Portfolio_model->get_tags();
		$data['catergories_id']=$catergories_id;
		
		$this->load->view('header');
		$this->load->view('portfolio/portfolio_search_view', $data);
		$this->load->view('footer');
	}
	
    private function set_upload_options($path_folder){   
        //upload an image options
        $config = array();
        $config['upload_path'] = '././assets/images/' . $path_folder . '/';
        $config['allowed_types'] = 'gif|jpg|png|jpeg|bmp';
        $config['max_size']      = '0';
        $config['overwrite']     = FALSE;

        return $config;
    }
	
    public function add_project(){
        $created_at = date('Y-m-d h:i:s a', time());
		$data = array(
			'project_title' => $this->input->post('project_title'),
            'categories_id' => implode(",", $this->input->post('categories_id')),
            'tags' => implode(",", $this->input->post('tags_id')),
			'videos' => $this->input->post('videos'),
			'description' => $this->input->post('description'), 
			'created_by' => $this->input->post('created_by'), 
			'completed_on' => $this->input->post('completed_on'), 
			'client' => $this->input->post('client'), 
		);
		$this->db->insert('portfolio',$data);
		$portfolio_id = $this->db->insert_id();

		$path_folder = 'portfolio';
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

			$photos = $dataInfo[$i]['file_name'];
			$data = array(
				'photo' => $photos, 
				'portfolio_id' => $portfolio_id, 
				'created_at' => $created_at, 
			);
			$this->db->insert('portfolio_photos',$data);
		}
		
        redirect('Portfolio/get_portfolio');
    }
	
	public function edit_project($portfolio_id){
		$data['one_project']=$this->Portfolio_model->get_one_project($portfolio_id);
		$data['photos']=$this->Portfolio_model->get_portfolio_photos($portfolio_id);
		$data['categories']=$this->Portfolio_model->get_categories();
		$data['tags']=$this->Portfolio_model->get_tags();
		
		$this->load->view('header');
		$this->load->view('portfolio/one_project_view', $data);
		$this->load->view('footer');
	}
	
	public function update_project(){
        $created_at = date('Y-m-d h:i:s a', time());
		$data = array(
			'project_title' => $this->input->post('project_title'),
			'categories_id' => implode(',', $this->input->post('categories_id')),
            'tags' => implode(",", $this->input->post('tags_id')),
			'videos' => $this->input->post('videos'),
			'description' => $this->input->post('description'), 
			'created_by' => $this->input->post('created_by'), 
			'completed_on' => $this->input->post('completed_on'), 
			'client' => $this->input->post('client'), 
		);
		$this->db->where('portfolio_id', $this->input->post('portfolio_id'));
		$this->db->update('portfolio',$data);

		$path_folder = 'portfolio';
		$dataInfo = array();
		$files = $_FILES;
		$cpt = count($_FILES['userfile']['name']);
		if($_FILES['userfile']['name'][0] != "")
		{
			$this->db->where('portfolio_id', $this->input->post('portfolio_id'));
			$this->db->delete('portfolio_photos');
			
			for($i=0; $i<$cpt; $i++){           
				$_FILES['userfile']['name']= $files['userfile']['name'][$i];
				$_FILES['userfile']['type']= $files['userfile']['type'][$i];
				$_FILES['userfile']['tmp_name']= $files['userfile']['tmp_name'][$i];
				$_FILES['userfile']['error']= $files['userfile']['error'][$i];
				$_FILES['userfile']['size']= $files['userfile']['size'][$i];    

				$this->upload->initialize($this->set_upload_options($path_folder));
				$this->upload->do_upload('userfile');
				$dataInfo[] = $this->upload->data();

				$photos = $dataInfo[$i]['file_name'];
				$data = array(
					'photo' => $photos, 
					'portfolio_id' => $this->input->post("portfolio_id"), 
					'created_at' => $created_at, 
				);
				$this->db->insert('portfolio_photos',$data);
			}
		}
        redirect('Portfolio/get_portfolio');
	}
	
	public function delete_project($portfolio_id){
		$this->db->where('portfolio_id', $portfolio_id);
		$this->db->delete('portfolio');
        redirect('Portfolio/get_portfolio');
	}
	
}

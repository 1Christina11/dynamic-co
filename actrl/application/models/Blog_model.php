<?php defined("BASEPATH") or exit("No direct script access allowed");

class Blog_model extends CI_model
{

    public function get_blog()
    {
        $query = $this->db->get("blogs");
        return $query->result();
    }

		public function get_blog_photos($blogs_id){
		$this->db->where('blogs_id', $blogs_id);
		$query = $this->db->get('blogs_photos');
		return $query->result();
	}
		public function get_tags(){
		$query = $this->db->get('tags');
		return $query->result();
		}

    public function get_one_blog($blogs_id)
    {
			$this->db->where('blogs_id',$blogs_id);
        $query = $this->db->get("blogs");
        return $query->row();
    }
    public function read_more($blogs_id)
    {
			$this->db->where('blogs_id',$blogs_id);
        $query = $this->db->get("blogs");
        return $query->result();
    }

		public function get_one_photo($blogs_id){
		$this->db->where('blogs_id', $blogs_id);
		$query = $this->db->get('blog');
		return $query->row();
	}


}
?>


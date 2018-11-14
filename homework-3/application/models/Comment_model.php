<?php
class Comment_model extends CI_Model
{
    public function __construct()
    {
        $this->load->database();
    }
    
    public function get_comments($recipe_id)
    {
        $this->db->select('*');
        $this->db->from('comments');
        $this->db->join('users', 'comments.user_id = users.user_id');

        $query = $this->db->get();
        
        return $query->result();
    }
}

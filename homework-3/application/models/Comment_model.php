<?php
class Comment_model extends CI_Model
{
    public function __construct()
    {
        $this->load->database();
    }
    
    public function get_comments($recipe_id)
    {
        $query = $this->db->get_where('comments', array('recipe_id' => $recipe_id));
        return $query->row_array();
    }
}

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
        $this->db->join('users', 'comments.user_id = users.id');

        $query = $this->db->get();
        
        return $query->result();
    }
    
    public function create_comment($user_id, $recipe_id, $comment)
    {
        $data = array(
            'user_id' => $user_id,
            'recipe_id' => $recipe_id,
            'comment' => $comment
        );

        $this->db->insert('comments', $data);
    }
}

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
        $this->db->where('recipe_id', $this->db->escape($recipe_id));
        $this->db->from('comments');
        $this->db->join('users', 'comments.user_id = users.user_id');

        $query = $this->db->get();
        
        return $query->result();
    }
    
    public function create_comment($user_id, $recipe_id, $comment)
    {
        $data = array(
            'user_id' => $this->db->escape($user_id),
            'recipe_id' => $this->db->escape($recipe_id),
            'comment' => $this->db->escape($comment)
        );

        $this->db->insert('comments', $data);
    }
    
    public function delete_comment($comment_id)
    {
        $this->db->where('id', $this->db->escape($comment_id));
        $this->db->delete('comments');
    }
}

<?php
class User_model extends CI_Model
{
    public function __construct()
    {
        $this->load->database();
    }
    
    public function get_user($username, $password = false)
    {
        $this->db->select('*');
        $this->db->from('users');
        $this->db->where('username', $this->db->escape($username));
        if ($password !== false) {
            $this->db->where('password', $this->db->escape($password));
        }
        
        $query = $this->db->get();
        
        return $query->row();
    }
    
    public function create_user($username, $password)
    {
        $data = array(
            'username' => $this->db->escape($username),
            'password' => $this->db->escape($password)
        );

        $this->db->insert('users', $data);
    }
}

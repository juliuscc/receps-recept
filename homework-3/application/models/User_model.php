<?php
class User_model extends CI_Model
{
    public function __construct()
    {
        $this->load->database();
    }
    
    private function hash_password($password)
    {
        return password_hash($password, PASSWORD_BCRYPT);
    }

    public function get_user($username, $password = false)
    {
        $this->db->select('*');
        $this->db->from('users');
        $this->db->where('username', $username);
                
        $query = $this->db->get();
        $user = $query->row();

        if ($password !== false) {
            if (!password_verify($password, $user->password)) {
                $user = null;
            }
        }

        return $user;
    }
    
    public function create_user($username, $password)
    {
        $data = array(
            'username' => $username,
            'password' => $this->hash_password($password)
        );

        $this->db->insert('users', $data);
    }
}

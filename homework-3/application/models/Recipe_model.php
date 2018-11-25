<?php
class Recipe_model extends CI_Model
{
    public function __construct()
    {
        $this->load->database();
    }
    
    public function get_recipes($slug = false)
    {
        if ($slug === false) {
            $query = $this->db->get('recipes');
            return $query->result_array();
        }

        $query = $this->db->get_where('recipes', array('slug' => $this->db->escape($slug)));
        return $query->row_array();
    }
}

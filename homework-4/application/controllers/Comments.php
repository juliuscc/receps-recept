<?php
class Comments extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->helper('url_helper');
        $this->load->model('comment_model');
        $this->load->library('form_validation');
    }

    public function create()
    {
        session_start();
        
        $this->form_validation->set_rules('user_id', 'user id', 'required');
        $this->form_validation->set_rules('recipe_id', 'recipe id', 'required');
        $this->form_validation->set_rules('comment', 'comment', 'required');
        
        $user_id = $this->input->post('user_id');
        $recipe_id = $this->input->post('recipe_id');
        $comment = $this->input->post('comment');

        if (isset($_SESSION["logged_in_user"]) and $user_id === $_SESSION["logged_in_user"] and $this->form_validation->run() === true) {
            $this->comment_model->create_comment($user_id, $recipe_id, $comment);
        }
        redirect(site_url('recipes/' . $this->input->post('recipe_slug')));
    }
    
    public function delete()
    {
        session_start();

        $this->form_validation->set_rules('comment_id', 'comment id', 'required');
        $this->form_validation->set_rules('recipe_id', 'recipe id', 'required');
        $this->form_validation->set_rules('recipe_slug', 'recipe slug', 'required');

        $comment_id = $this->input->post('comment_id');
        $recipe_id = $this->input->post('recipe_id');
        $recipe_slug = $this->input->post('recipe_slug');
        
        if (isset($_SESSION["logged_in_user"]) and $this->form_validation->run() === true) {
            $this->comment_model->delete_comment($comment_id);
        }
        redirect(site_url('recipes/' . $this->input->post('recipe_slug')));
    }
}

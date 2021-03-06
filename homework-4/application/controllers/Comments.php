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
    
    public function api_get($recipe_id)
    {
        $comments = $this->comment_model->get_comments($recipe_id);
        
        return $this->output
            ->set_content_type('application/json')
            ->set_status_header(200)
            ->set_output(json_encode($comments));
    }

    public function api_create()
    {
        $jsonArray = json_decode(file_get_contents('php://input'), true);

        $user_id = $jsonArray['user_id'];
        $recipe_id = $jsonArray['recipe_id'];
        $comment = $jsonArray['comment'];
        
        $insert_id = $this->comment_model->create_comment($user_id, $recipe_id, $comment);
        
        return $this->output
            ->set_content_type('application/json')
            ->set_status_header(200)
            ->set_output(json_encode($this->comment_model->get_comment($insert_id)));
    }

    public function api_delete($comment_id)
    {
        $jsonArray = json_decode(file_get_contents('php://input'), true);

        $user_id = $jsonArray['user_id'];
        $comment = $this->comment_model->get_comment($comment_id);

        if ($comment->user_id == $user_id) {
            $this->comment_model->delete_comment($comment_id);

            return $this->output
                ->set_content_type('application/json')
                ->set_status_header(200)
                ->set_output(json_encode(array()));
        } else {
            return $this->output
                ->set_content_type('application/json')
                ->set_status_header(400)
                ->set_output(json_encode(array()));
        }
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

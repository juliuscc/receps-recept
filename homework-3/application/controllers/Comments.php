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
        $this->form_validation->set_rules('user_id', 'user id', 'required');
        $this->form_validation->set_rules('recipe_id', 'recipe id', 'required');
        $this->form_validation->set_rules('comment', 'comment', 'required');

        if ($this->form_validation->run() === false) {
            redirect(site_url('recipes/' . $this->input->post('recipe_slug')));
        } else {
            $user_id = $this->input->post('user_id');
            $recipe_id = $this->input->post('recipe_id');
            $comment = $this->input->post('comment');

            $this->comment_model->create_comment($user_id, $recipe_id, $comment);

            redirect(site_url('recipes/' . $this->input->post('recipe_slug')));
        }
    }
}

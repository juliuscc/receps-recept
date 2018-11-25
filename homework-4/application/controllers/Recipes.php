<?php
class Recipes extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('recipe_model');
        $this->load->model('comment_model');
        $this->load->helper('url_helper');
    }

    public function view($slug = null)
    {
        $data['recipe_item'] = $this->recipe_model->get_recipes($slug);
        
        if (empty($data['recipe_item'])) {
            return show_404();
        }

        session_start();
        if (isset($_SESSION["logged_in_user"])) {
            $data['logged_in_user'] = $_SESSION["logged_in_user"];
        }

        $data['comments'] = $this->comment_model->get_comments($data['recipe_item']['id']);
        $data['title'] = ucfirst($data['recipe_item']['title']) . ' | Receps Recept';
        $data['nav_extra_class'] = '';
        $data['nav_active_index'] = $data['recipe_item']['id'];
        $data['nav_button_class'] = '';
        
        $data['navbar'] = $this->load->view('templates/navbar', $data, true);

        $this->load->view('templates/header', $data);
        $this->load->view('recipe/view', $data);
        $this->load->view('templates/footer');
    }
}

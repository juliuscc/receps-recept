<?php
class Pages extends MY_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('recipe_model');
        $this->load->helper('url_helper');
    }

    public function view($page = 'home')
    {
        $this->require_min_level(1);
        $data['user_is_logged_in'] = $this->is_logged_in();

        $data['recipes'] = $this->recipe_model->get_recipes();

        $data['title'] = "Receps Recept";
        $data['nav_active_index'] = 0;
        $data['nav_extra_class'] = "navbar--tighter";
        $data['nav_extra_button_class'] = 'button--mobile-smaller';

        $data['navbar'] = $this->load->view('templates/navbar', $data, true);

        $this->load->view('templates/header', $data);
        $this->load->view('pages/'.$page, $data);
        $this->load->view('templates/footer', $data);
    }
}

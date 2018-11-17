<?php
class Pages extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('recipe_model');
        $this->load->helper('url_helper');
    }

    public function view($page = 'home')
    {
        session_start();
        if (isset($_SESSION["logged_in_user"])) {
            $data['logged_in_user'] = $_SESSION["logged_in_user"];
        }

        $data['recipes'] = $this->recipe_model->get_recipes();

        $data['title'] = "Receps Recept";
        $data['nav_active_index'] = 0;
        $data['nav_extra_class'] = "navbar--tighter";
        $data['nav_button_class'] = "button--mobile-smaller";

        $data['navbar'] = $this->load->view('templates/navbar', $data, true);

        $this->load->view('templates/header', $data);
        $this->load->view('pages/'.$page, $data);
        $this->load->view('templates/footer', $data);
    }
}

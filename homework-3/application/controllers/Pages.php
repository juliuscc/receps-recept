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
        $data['recipes'] = $this->recipe_model->get_recipes();

        // if (! file_exists(APPPATH.'views/pages/'.$page.'.php')) {
        //     // Whoops, we don't have a page for that!
        //     show_404();
        // }

        // $data['title'] = ucfirst($page); // Capitalize the first letter
        $data['title'] = "Receps Recept";
        $data['nav_active_index'] = 0;
        $data['nav_extra_class'] = "navbar--tighter";

        $data['navbar'] = $this->load->view('templates/navbar', $data, true);

        $this->load->view('templates/header', $data);
        $this->load->view('pages/'.$page, $data);
        $this->load->view('templates/footer', $data);
    }
}

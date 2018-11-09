<?php
class Recipes extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('recipe_model');
        $this->load->helper('url_helper');
    }

    public function view($slug = null)
    {
        $data['recipe_item'] = $this->recipe_model->get_recipes($slug);
        
        if (empty($data['recipe_item'])) {
            show_404();
        }

        $data['title'] = ucfirst($data['recipe_item']['title']) . ' | Receps Recept';
        $data['nav_extra_class'] = '';
        $data['nav_active_index'] = $data['recipe_item']['id'];
        
        $data['navbar'] = $this->load->view('templates/navbar', $data, true);

        $this->load->view('templates/header', $data);
        $this->load->view('recipe/view', $data);
        $this->load->view('templates/footer');
    }
}

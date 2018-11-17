<?php
class Auth extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('user_model');
        $this->load->helper('url_helper');
        $this->load->library('form_validation');
    }

    private function render_login($data)
    {
        $data['title'] = "Log in | Receps Recept";
        $data['nav_extra_class'] = '';
        $data['nav_active_index'] = -1;
        $data['nav_button_class'] = 'button--hide';

        $data['navbar'] = $this->load->view('templates/navbar', $data, true);

        $this->load->view('templates/header', $data);
        $this->load->view('auth/login', $data);
        $this->load->view('templates/footer', $data);
    }
    
    private function render_register($data)
    {
        $data['title'] = "Register | Receps Recept";
        $data['nav_extra_class'] = '';
        $data['nav_active_index'] = -1;
        $data['nav_button_class'] = 'button--hide';
        
        $data['navbar'] = $this->load->view('templates/navbar', $data, true);
        
        $this->load->view('templates/header', $data);
        $this->load->view('auth/register', $data);
        $this->load->view('templates/footer', $data);
    }

    public function get_login()
    {
        session_start();
        if (isset($_SESSION["logged_in_user"])) {
            redirect(site_url());
        }
        
        $this->render_login(array());
    }
    
    public function get_register()
    {
        session_start();
        if (isset($_SESSION["logged_in_user"])) {
            redirect(site_url());
        }
        
        $this->render_register(array());
    }
    
    public function post_login()
    {
        $this->form_validation->set_rules('username', 'Username', 'required');
        $this->form_validation->set_rules('password', 'Password', 'required');

        if ($this->form_validation->run() === false) {
            $data['error'] = true;

            $this->render_login($data);
        } else {
            $username = $this->input->post('username');
            $password = $this->input->post('password');
            $user = $this->user_model->get_user($username, $password);
            
            if (isset($user)) {
                session_start();
                $_SESSION["logged_in_user"] = $user->id;
                redirect(site_url());
            } else {
                $data['error'] = true;
                $this->render_login($data);
            }
        }
    }
    
    public function post_register()
    {
        $this->form_validation->set_rules('username', 'Username', 'required');
        $this->form_validation->set_rules('password', 'Password', 'required');

        if ($this->form_validation->run() === false) {
            $data['error'] = 'Oops, something went wrong! Please try again.';

            $this->render_register($data);
        } else {
            $username = $this->input->post('username');
            $password = $this->input->post('password');
            $user = $this->user_model->get_user($username);
            
            if (isset($user)) {
                $data['error'] = 'Oops, there already exists an account with that username! Please pick another username.';
                $this->render_register($data);
            } else {
                $this->user_model->create_user($username, $password);
                $user = $this->user_model->get_user($username, $password);

                session_start();
                $_SESSION["logged_in_user"] = $user->id;
                redirect(site_url());
            }
        }
    }
    
    public function logout()
    {
        session_start();
        session_destroy();
        redirect(site_url());
    }
}

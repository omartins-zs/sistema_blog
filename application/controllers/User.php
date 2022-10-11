<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('User_model');
        $this->load->library('form_validation');
        $this->load->library('session');
    }


    public function login()
    {
        $dashboard = 'admin/dashboard';
        $this->User_model->loggedin() == FALSE || redirect($dashboard);

        $rules = $this->User_model->rules;
        $this->form_validation->set_rules($rules);

        if ($this->form_validation->run() == TRUE) {
            if ($this->User_model->login() == TRUE) {
                redirect($dashboard);
            } else {
                $this->session->set_flashdata('msg', 'Escreva corretamente seu email ou senha');
                redirect('user/login', 'refresh');
            }
        }
        $this->load->view('login_layout');
    }

    public function logout()
    {
        $this->User_model->logout();
        redirect('user/login');
    }
}

/* End of file User.php */
/* Location: ./application/controllers/admin/User.php */
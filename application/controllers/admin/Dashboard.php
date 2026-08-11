<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('session');
        $this->session->userdata('loggedin') == TRUE || redirect('user/login');
        $this->load->model('Post_model');
        $this->load->model('Categoria_model');
    }

    public function index()
    {
        // Estatísticas reais para o dashboard
        $posts      = $this->Post_model->get();
        $categorias = $this->Categoria_model->get();

        $this->data['total_posts']      = is_array($posts) ? count($posts) : 0;
        $this->data['total_categorias'] = is_array($categorias) ? count($categorias) : 0;
        $this->data['ultimos_posts']    = $this->Post_model->get_posts(); // com join de categoria
        $this->data['subview']          = 'admin/index';

        $this->load->view('admin/main_layout', $this->data);
    }
}

/* End of file Dashboard.php */
/* Location: ./application/controllers/admin/Dashboard.php */
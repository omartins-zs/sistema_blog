<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller
{
    // public function __construct()
    // {
    //     parent::__construct();
    //     $this->load->model('Post_model');
    //     $this->load->model('Categoria_model');
    //     $this->load->helper('blog');
    //     // $this->var = $var;
    // }


    public function index()
    {
        // $data['categorias'] = $this->Categoria_model->get_categorias();
        // $data['posts'] = $this->Post_model->get_posts();
        $data['subview'] = 'admin/index';
        $this->load->view('admin/main_layout', $data);
    }
}

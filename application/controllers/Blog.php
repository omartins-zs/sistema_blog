<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Blog extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Post_model');
        $this->load->model('Categoria_model');
        $this->load->helper('blog');
        // $this->var = $var;
    }


    public function index()
    {
        $data['categorias'] = $this->Categoria_model->get_categorias();
        $data['posts'] = $this->Post_model->get_posts();
        $data['subview'] = 'index';
        $this->load->view('layout', $data);
    }

    public function post($post_id)
    {
        $data['categorias'] = $this->Categoria_model->get_categorias();
        $data['post'] = $this->Post_model->get($post_id);
        $data['subview'] = 'post';
        $this->load->view('layout', $data);
    }
    public function categoria($categoria_id)
    {
        $data['posts'] = $this->Post_model->get_posts($categoria_id);
        $data['categorias'] = $this->Categoria_model->get_categorias();
        $data['subview'] = 'categoria';
        $this->load->view('layout', $data);
    }

    public function sobre()
    {
        $data['subview'] = 'sobre';
        $this->load->view('pages_layout', $data);
    }
    public function contato()
    {
        $data['subview'] = 'contato';
        $this->load->view('pages_layout', $data);
    }
}

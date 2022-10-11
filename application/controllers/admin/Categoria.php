<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Categoria extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Categoria_model');
        $this->load->library('form_validation');
        $this->load->library('session');
        $this->session->userdata('loggedin') == TRUE || redirect('user/login');
    }

    public function index()
    {
      $data['categorias'] = $this->Categoria_model->get();
      $data['subview'] = 'admin/categoria/index';
      $this->load->view('admin/main_layout', $data);
    }

    public function editar($id = NULL)
    {

        if ($id) {
            $data['categoria'] = $this->Categoria_model->get($id);
            //count((array)$data['categoria']) || $this->session->set_flashdata('msg', 'Não existe essa categoria');
        } else {
            $data['categoria'] = $this->Categoria_model->get_new();
        }

        $rules = $this->Categoria_model->rules;
        $this->form_validation->set_rules($rules);

        if ($this->form_validation->run() == TRUE) {
            $data = $this->Categoria_model->array_from_post(['nome']);

            $this->Categoria_model->save($data, $id);

            if ($id) {
                $this->session->set_flashdata('msg', 'Categoria editada com suceesso');
            } else {
                $this->session->set_flashdata('msg', 'Categoria cadastrada com suceesso');
            }

            redirect('admin/categoria');
        }
       
        $data['subview'] = 'admin/categoria/editar';
        $this->load->view('admin/main_layout', $data);
    }
}

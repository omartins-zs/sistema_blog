<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Post extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Post_model');
        $this->load->model('Categoria_model');
        $this->load->helper('blog');
        $this->load->library('session');
        $this->load->library('form_validation');
        // $this->session->userdata('loggedin') == TRUE || redirect('user/login');
    }

    public function index()
    {
        $data['posts'] = $this->Post_model->get();
        $data['subview'] = 'admin/post/index';
        $this->load->view('admin/main_layout', $data);
    }

    public function editar($id = NULL)
    {
        if ($id) {
            $data['post'] = $this->Post_model->get($id);
        } else {
            $data['post'] = $this->Post_model->get_new();
        }

        $data['categorias'] = $this->Categoria_model->get();

        $rules = $this->Post_model->rules;
        $this->form_validation->set_rules($rules);

        if ($this->form_validation->run() == TRUE) {

            $post_data = $this->Post_model->array_from_post(['categoria_id', 'titulo', 'descricao']);
            $post_data['autor'] = $this->session->userdata('nome');

            $config['upload_path']   = 'assets/images/';
            $config['allowed_types'] = 'jpg|png|jpeg';
            $config['overwrite']     = TRUE;
            $config['max_size']      = 1024;

            $this->load->library('upload', $config);

            if ($id) {

                if (!empty($_FILES['imagem']['nome'])) {

                    if ($this->upload->do_upload('imagem')) {

                        $file_data = $this->upload->data();
                        $file_name = $file_data['file_name'];

                        unlink('assets/images/' . $this->input->post('imagem_nome'));
                    } else {
                        $this->session->set_flashdata('error_msg', $this->upload->display_errors());
                        redirect(current_url());
                    }
                } else {

                    $file_name = $this->input->post('imagem_nome');
                }

                $post_data['imagem'] = $file_name;
                $this->Post_model->save($post_data, $id);

                $this->session->set_flashdata('msg', 'Artigo editado com sucesso!');

                redirect('admin/post');
            } else {

                if ($this->upload->do_upload('imagem')) {

                    $file_data = $this->upload->data();
                    $file_name = $file_data['file_name'];

                    $post_data['imagem'] = $file_name;
                    $this->Post_model->save($post_data);

                    $this->session->set_flashdata('msg', 'Post criado com sucesso');

                    redirect('admin/post');
                } else {
                    $this->session->set_flashdata('error_msg', $this->upload->display_errors());
                    //return;
                }
            }
        }

        $data['subview'] = 'admin/post/editar';
        $this->load->view('admin/main_layout', $data);
    }

    public function delete($id)
    {
        $post = $this->Post_model->get($id);
        $this->Post_model->delete($id);
        unlink('assets/images/' . $post->imagem);
        $this->session->set_flashdata('msg', 'Artigo eliminado com sucesso');
        redirect('admin/post');
    }
}

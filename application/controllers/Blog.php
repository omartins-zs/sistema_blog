<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Blog extends CI_Controller
{
    public function index()
    {
        $data['subview'] = 'index';
        $this->load->view('layout', $data);
    }

    public function post($post_id)
    {
        $data['subview'] = 'post';
        $this->load->view('layout', $data);
    }
    public function categoria($categoria_id)
    {
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

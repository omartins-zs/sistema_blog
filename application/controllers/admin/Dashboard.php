<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('session');
        //$this->session->userdata('loggedin') == TRUE || redirect('user/login');
    }

    public function index()
    {
        $this->data['subview'] = 'admin/index';
        $this->load->view('admin/main_layout', $this->data);
    }
}

/* End of file Dashboard.php */
/* Location: ./application/controllers/admin/Dashboard.php */
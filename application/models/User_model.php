<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User_model extends MY_Model
{
    protected $table_name = 'users';

    public $rules = array(
        'email' => array(
            'field' => 'email',
            'label' => 'email',
            'rules' => 'trim|required|valid_email'
        ),
        'senha' => array(
            'field' => 'senha',
            'label' => 'senha',
            'rules' => 'trim|required'
        )
    );

    public function login()
    {
        $user = $this->get_by([
            'email' => $this->input->post('email'),
            'senha' => $this->hash($this->input->post('senha'))
        ], TRUE);

        if (null !== $user) {

            $data = [
                "nome" => $user->nome,
                "loggedin" => TRUE
            ];

            $this->session->set_userdata($data);

            return TRUE;
        }
    }

    public function hash($string)
    {
        return hash('sha512', $string . config_item('encryption_key'));
    }

    public function logout()
    {
        $this->session->sess_destroy();
    }

    public function loggedin()
    {
        return (bool) $this->session->userdata('loggedin');
    }
}

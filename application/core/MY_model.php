<?php
defined('BASEPATH') or exit('No direct script access allowed');


class MY_model extends CI_Model
{
    protected $table_name = '';
    protected $primary_key = 'id';

    public function get($id = NULL, $single = FALSE)
    {
        if ($id != NULL) {
            $this->db->where($this->primary_key, $id);
            $method = 'row';
        } else if ($single == TRUE) {
            $method = 'row';
        } else {
            $method = 'result';
        }
        $this->db->order_by('id', 'desc');

        return $this->db->get($this->table_name)->$method();
    }

    public function get_by($where, $single = FALSE)
    {
        $this->db->where($where);

        // echo $this->db->last_query();

        return $this->get(NULL, $single);
    }

    public function save($data, $id = NULL)
    {
        // Insert/ Create
        if ($id === NULL) {
            $this->db->insert($this->table_name, $data);
            $id = $this->db->insert_id();
        }
        // Update / Atualizar
        else {
            $this->db->where($this->primary_key, $id);
            $this->db->update($this->table_name, $data);
        }

        return $id;
    }

    public function delete($id)
    {
        if (!$id) {
            return FALSE;
        }

        $this->db->where($this->primary_key, $id);
        $this->db->delete($this->table_name);
    }

    public function array_from_post($fields)
    {
        $data = [];
        foreach ($fields as $value) {
            $data[$value] = $this->input->post($value);
        }
        return $data;
    }

    // public function hash($string)
    // {
    //     print_r($string);
    //     return hash('sha512', $string );
    // }
}

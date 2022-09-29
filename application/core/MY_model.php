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
        return $this->db->get($this->table_name)->$method();
    }
}

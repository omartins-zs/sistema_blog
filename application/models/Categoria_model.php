<?php
defined('BASEPATH') or exit('No direct script access allowed');


class Categoria_model extends MY_Model
{
    protected $table_name = 'categorias';

    public function get_categorias()
    {
        $this->db->select('c.id, c.nome, count(*) as num_posts');
        $this->db->from('posts p');
        $this->db->join('categorias c', 'c.id = p.categoria_id', 'left');
        $this->db->group_by('nome');

        return $this->db->get()->result();
    }
}
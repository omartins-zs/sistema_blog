<?php
defined('BASEPATH') or exit('No direct script access allowed');


class Post_model extends MY_Model
{
    protected $table_name = 'posts';

    public function get_posts($categoria_id = NULL)
    {
        if ($categoria_id != NULL) {
            $this->db->where('categoria_id', $categoria_id);
        }

        $this->db->select('c.nome, p.* ');
        $this->db->from('posts p');
        $this->db->join('categorias c', 'c.id = p.categoria_id', 'left');
        $this->db->order_by('p.data_criacao', 'DESC');

        return $this->db->get()->result();
    }
}

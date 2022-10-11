<?php
defined('BASEPATH') or exit('No direct script access allowed');


class Categoria_model extends MY_Model
{
    protected $table_name = 'categorias';

    public $rules = array(
        'categoria' => array(
            'field' => 'nome',
            'label' => 'Categoria',
            'rules' => 'trim|required'
        )
    );

    public function get_new()
    {
        // Instancia classe vazia
        $categoria = new stdClass(); //clase vacia
        $categoria->nome = '';
    
        return $categoria;
    }

    public function get_categorias()
    {
        $this->db->select('c.id, c.nome, count(*) as num_posts');
        $this->db->from('posts p');
        $this->db->join('categorias c', 'c.id = p.categoria_id', 'left');
        $this->db->group_by('nome');

        return $this->db->get()->result();
    }
}

<?php

class Productos_model extends CI_Model {
    
    public function __construct(){
        parent::__construct();
        $this->load->database();
    }
    
    public function get_all(){
        $this->db->select('id, codigo, nombre, precio, status');
        $this->db->from('producto');
//        $this->db->where('status', 1);
        $this->db->order_by('codigo', 'asc');
        $result = $this->db->get();
        return $result->result_array();
    }
    
    public function get_by_id($id){
        $this->db->select('id, codigo, nombre, precio, status');
        $this->db->from('producto');
//        $this->db->where('status', 1);
        $this->db->where('id', $id);
        $this->db->limit(1);
        $result = $this->db->get();
        return $result->row_array();
    }
    
    public function insert($data) {
        if ($this->db->insert('producto', $data)) {
            return $this->db->insert_id();
        } else {
            return null;
        }
    }
    
    public function update($id, $data) {
        return $this->db->update('producto', $data, ['id' => $id]);
    }
    
    public function get_count_codigo($codigo) {
        $this->db->from('producto');
        $this->db->where('codigo', $codigo);
        $this->db->limit(1);
        return $this->db->count_all_results();
    }
    
}
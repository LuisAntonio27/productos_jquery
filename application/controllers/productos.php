<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Productos extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('productos_model');
        $this->load->helper('url');
    }

    public function index() {
//        $data['productos'] = $this->productos_model->get_all();
        $productos = $this->productos_model->get_all();

//        $data['productos'] = ($productos);
        $json_string = json_encode($productos);
        $file = 'productos.json';
        file_put_contents($file, $json_string);

//        $this->load->view('productos_view_two', $data);
        $this->load->view('productos_view_json');
    }

    public function get_by_id($id) {
        $productos = $this->productos_model->get_by_id($id);

        $this->load->view('productos_detail_view', array('productos' => $productos));
    }

    public function create() {
        $data = [];
        if (count($this->input->post()) > 0) {
            if ($this->_validate_form()) {
                $insert_data = array(
                    'codigo' => $this->input->post('codigo'),
                    'nombre' => $this->input->post('nombre'),
                    'precio' => $this->input->post('precio'),
                    'status' => '1'
                );
                $id_product = $this->productos_model->insert($insert_data);
                if ($id_product) {
                    $data['message_success'] = 'Insertado';
                    $this->do_upload($id_product);
                } else {
                    $data['message_error'] = 'No se inserto';
                }
            } else {
                $data['message_error'] = validation_errors();
            }
        }
        $this->load->view('productos_form_view', $data);
    }

    private function _validate_form() {
        $this->load->library('form_validation');

        $this->form_validation->set_rules('codigo', 'c&oacute;digo', 'trim|required|min_length[1]|max_length[3]|callback_codigo_igual');
        return $this->form_validation->run();
    }

    public function codigo_igual($str) {
        if ($this->productos_model->get_count_codigo($str) == 1) {
            $this->form_validation->set_message('codigo_igual', 'El {field} ya existe');
            return FALSE;
        } else {
            return TRUE;
        }
    }

    public function do_upload($id) {
        $config['upload_path'] = 'images/productos';
        $config['file_name'] = $id;
        $config['allowed_types'] = 'jpg';
        $config['max_size'] = 1000;
        $config['max_width'] = 1024;
        $config['max_height'] = 768;

        $this->load->library('upload', $config);

        if (!$this->upload->do_upload('userfile')) {
            $this->upload->display_errors();
            return false;
        } else {
            $this->upload->data();
            return true;
        }
    }

//    public function codigo_23($str) {
//        if ($str == 23) {
//            $this->form_validation->set_message('codigo_23', 'El {field} no puede ser 23');
//            return FALSE;
//        } else {
//            return TRUE;
//        }
//    }
}

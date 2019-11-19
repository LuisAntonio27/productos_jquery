<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

    public function index() {
        $this->load->view('welcome_message');
    }

    public function metodo() {
        $data = array(
            'variable1' => 'a',
            'variable2' => 'b'
        );
        $this->load->view('inicio_view', $data);
    }

    public function con_parametros($parametro, $otro = '') {
        echo $parametro;
        if ($otro == '') {
            echo 'falta';
        } else {
            echo $otro;
        }
        $this->load->view('inicio_view');
    }

//url de codeigniter
//nombre de mi host/nombre del proyecto/archivo index.php/controlador/metodos ó metodo index por default
}

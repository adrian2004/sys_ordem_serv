<?php

defined('BASEPATH') OR exit('Acão não permitida');

Class usuarios extends CI_Controller{
    
    public function __construct() {
        parent::__construct();
        
        //Definir se ha sessão
    }
    
    public function index() {
        $data = array(
          'usuarios' => $this->ion_auth->users()->result(),
        );
        
        /*echo '<pre>';
        print_r($data['usuarios']);
        exit();*/
        
        $this->load->view('layout/header', $data);
        $this->load->view('usuarios/index');
        $this->load->view('layout/footer');
    }
}

<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Codigofacilito extends CI_Controller {      //esla libreria para controladores a vistas
    function __construct() {
        parent::__construct();
        $this->load->helper('form');
        $this->load->model('codigofacilito_model');
    }
    function index(){
        $this->load->library('menu',array('Inicio','Contacto','Cursos'));
        $data['mi_menu']= $this->menu->construirMenu();
        $this->load->view('codigofacilito/headers');  //carga la vista
        $this->load->view('codigofacilito/bienvenido',$data);
    }
    function holaMundo(){
        $this->load->view('codigofacilito/headers');  //carga la vista
        $this->load->view('codigofacilito/bienvenido');  //carga la vista

    }
    function nuevo(){
        $this->load->view('codigofacilito/headers');  //carga la vista
        $this->load->view('codigofacilito/formulario');  //carga la vista        
    }
    function recibirDatos(){
        $data = array(
            "nombre" => $this->input->post('nombre'),
            "videos" => $this->input->post('videos')
            );
            print_r($data);
        $this->codigofacilito_model->crearCurso($data);
       // $this->load->view('codigofacilito/headers');  //carga la vista
        //$this->load->view('codigofacilito/bienvenido');  //carga la vista 
    }
}
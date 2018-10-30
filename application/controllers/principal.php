<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class principal extends CI_Controller {
    function __construct(){ //es el contructor or parte del framework
        parent::__construct();
        $this->load->helper('form');
        $this->load->model('login_model');
    }
    function index(){
        $dato ['title']="Inicio de Sesion";
        $this->load->view('principal/inicio'); //le pasamos como parametro la lista
    }
    public function ingresar(){
        $nombre = $this->input->post("textinput");
        $contra = $this->input->post("passwordinput");
        $resp = $this->login_model->existeUsuario($nombre,$contra);
        if ($resp){
           // echo 'LISTO';
             $this->load->view('principal/headers');  //carga la vista
             $this->load->view('principal/formulario');
        }else{
            echo 'ERROR';
        }
    } 
    function recibirDatos(){
        $data = array(
            "nombre" => $this->input->post('nombre'),
            "contra" => $this->input->post('contra')
            );
            print_r($data);
        $this->login_model->crearCurso($data);
       // $this->load->view('codigofacilito/headers');  //carga la vista
        //$this->load->view('codigofacilito/bienvenido');  //carga la vista 
    }
    
    //Si la vista no esta en la carpeta views entonces se pone el nombre de la carpeta
    //tenemos que cargar los headers para multiples vistas
}
?>
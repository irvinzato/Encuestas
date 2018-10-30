<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Cursos extends CI_Controller {      //esla libreria para controladores a vistas
    function __construct() {
        parent::__construct();
        $this->load->helper('form');
        $this->load->model('codigofacilito_model');
    }
    function index(){
        $data['segmento'] = $this->uri->segment(3);  //retorna el segmeto de url y lo envía como parametro 
        $this->load->view('codigofacilito/headers');
        if (!$data['segmento']){
            $data['cursos']= $this->codigofacilito_model->obtenerCursos();
        }else{ 
            $data['cursos']= $this->codigofacilito_model->obtenerCurso($data['segmento']);
        }
        $this->load->view('cursos/cursos',$data);
        
    }
    function nuevo(){
        $this->load->view('codigofacilito/headers');  //carga la vista
        $this->load->view('cursos/formulario');  //carga la vista        
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
    function editar(){
        $data['id'] = $this->uri->segment(3);
        $data['curso']= $this->codigofacilito_model->obtenerCurso($data['id']);
        $this->load->view('codigofacilito/headers');
        $this->load->view('cursos/editar',$data);
    }
    function actualizar(){
        $data = array(                           //obtiene los datos via post
            "nombre" => $this->input->post('nombre'),
            "videos" => $this->input->post('videos')
            );
        $this->codigofacilito_model->actualizarCurso($this->uri->segment(3),$data);
        redirect(base_url());//metodo del helper url
    }
    
    function borrar(){
        $id = $this->uri->segment(3);
        $this->codigofacilito_model->eliminarCurso($id);
    }
}

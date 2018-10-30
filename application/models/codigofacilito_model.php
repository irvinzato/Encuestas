<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Codigofacilito_model extends CI_Model {
    function __construct(){ //es el contructor or parte del framework
        parent::__construct();
    }
    function crearCurso($data){
        $this->db->insert('cursos',array('Nombre'=>$data['nombre'],'Cupo'=>$data['videos']));
    }
    function obtenerCursos(){
        $query = $this->db->get('cursos');
        if ($query->num_rows() > 0){ return $query;
        }
        else return false;
    }
    function obtenerCurso($id){ //id del registro que se obtiene
        $this->db->where('idCurso',$id);
        $query = $this->db->get('cursos');
        if ($query->num_rows() > 0){ return $query;
        }
        else return false;
    }
    function actualizarCurso($id,$data){
        $datos = array('Nombre'=>$data['nombre'],'Cupo'=>$data['videos']);
        $this->db->where('idCurso',$id);
        $query = $this->db->update('cursos',$datos);
    }
    function eliminarCurso($id){
    $query = "DELETE FROM cursos; WHERE idCurso = $id"; //==   $this->db->delete('cursos',array('idCurso'=>$id));
    $this->db->query($query);
    
    }
}
?>
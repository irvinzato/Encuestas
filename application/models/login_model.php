<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of login_model
 *
 * @author Gerson V-H
 */
class login_model extends CI_Model {
    
   function __construct(){ //es el contructor or parte del framework
        parent::__construct();
        $this->load->database();
    }
    function existeUsuario($usuario,$password){
        $this->db->from('registro');
        $this->db->where('usuario',$usuario); //pertenece a la base de datos los campos
        $this->db->where('password',$password);
        $query = $this->db->get();
        if($query->num_rows()>0){
            return true;
        }else{
            return false;
        }
    }
    function crearCurso($data){
        $this->db->insert('registro',array('usuario'=>$data['nombre'],'password'=>$data['contra']));
    }
}
?>

<?php
defined('BASEPATH') OR exit('No direct script access allowed');
    
class Listas extends CI_Controller {

    function __construct(){
        parent::__construct();
        $this->load->model('listas_model');
        $this->load->model('usuario_model');
        //Do your magic here
    }
        
    public function index(){
        if(isset($_SESSION["id"])){
        $this->load->view('html/mainHead');
        $this->load->view('html/mainMenu');
        $this->load->view('html/mainNavbar');
        $this->load->view('view_listas');
        $this->load->view('html/mainFooter');
        }else{
            redirect('Auth');
        }
    }

    public function listar(){
        $objLista = $this->listas_model->readData();
        $data = array();

        foreach($objLista as $key){
            $row =array();
            $row[] = '<center><button type="button" class="btn  btn-outline-dark abrir" 
                        id="'.$key['id_list'].'" ><i class=" bx bx-plus"></i></button></center>'; //Despliega tabla de contactos
            $row[]=$key["nombre_list"];
            $row[] = '<center><button type="button" class="btn btn-outline-primary" 
                        onClick="nContacto('.$key['id_list'].')"><i class="bx bx-user-plus"></i></button></center>'; //Inserta nuevo contacto
            $row[] = '<center><button type="button" class="btn btn-outline-warning" 
                        onClick="nExcel('.$key['id_list'].')"><i class="bx bx-user-plus"></i></button></center>'; //Inserta contactos mediante Excel
            $row[] = '<center><button type="button" class="btn btn-outline-success editar" 
                        id="'.$key['id_list'].'" ><i class="bx bx-edit"></i></button></center>'; //Edita lista de contactos
            $row[] = '<center><button type="button" class="btn btn-outline-danger eliminar" 
                        id="'.$key['id_list'].'" ><i class="bx bx-trash"></i></button></center>';//Elimina lista

            $data[]=$row;
        }
        $result = array('data' => $data);
        echo json_encode($result);
    }

    public function registrar(){
        $datos = array('nombre_list' => trim($this->input->post('nombre_list')));
        if(empty($_POST["id_list"])){
            $this->listas_model->insert($datos);
        }else{
            $id = $this->input->post('id_list');
            $this->listas_model->update($id,$datos);
        }
    }

    public function actualizar(){
        $id=$this->input->post('idback');
        $data = $this->listas_model->fetch($id);
        echo json_encode($data);
    }

    public function delete() {
        $id=$this->input->post('idback'); 
        
          $result = $this->listas_model->delete($id);
                if ($result == TRUE) {
                    echo json_encode("Lista Eliminada");  
                }else{
                    echo json_encode ("No fue posible eliminarlo");
              }         
    }

    public function registrarContacto(){
        $datos = array(
            'nombre_person' => trim($this->input->post('nombre_person')),
            'apaterno' => trim($this->input->post('apaterno')),
            'person_correo' => trim($this->input->post('person_correo')),
            'list_id' => trim($this->input->post('list_id')),
        );
        if($this->usuario_model->checkemail($datos['person_correo'],$datos['list_id'])){
            echo json_encode("Datos repetidos");
        }else if(empty($_POST["id_person"])){
            $this->usuario_model->insert($datos);
        }else{
            $id = $this->input->post('id_person');
            $this->usuario_model->update($id,$datos);
        }
        
    }

    public function registrarExcel(){
        $archivotmp = $_FILES['dataUsuario']['tmp_name'];
        $lineas     = file_get_contents($archivotmp);

        $lineas = explode("\n", $lineas);
        $lineas = array_filter($lineas);

        foreach ( $lineas as $linea){
            $datos[] = explode(",", $linea);
        }

        foreach ($datos as $contact){
            $nombre_person      =! empty($contact[0]) ? ($contact[0]) : '';
            $apaterno           =! empty($contact[1]) ? ($contact[1]) : '';
            $person_correo      =! empty($contact[2]) ? ($contact[2]) : '';
                
            $dato=array(
                'nombre_person'=> $nombre_person,
                'apaterno' => $apaterno,
                'person_correo' => $person_correo,
                'list_id' => trim($this->input->post('list_ide'))
            );    
            
            if($this->usuario_model->checkemail($dato['person_correo'],$dato['list_id'])){
                echo json_encode("Datos repetidos");
            }else{
                $this->usuario_model->insert($dato);
            }
        }
        // print_r($datos); 
    }

    public function contactos(){
        $id=$this->input->GET('idback');
        
        $objLista = $this->listas_model->contact($id);
        echo json_encode($objLista);
           
    }
    
}
    
    /* End of file Controllername.php */
    

?>
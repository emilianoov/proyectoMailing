<?php
defined('BASEPATH') OR exit('No direct script access allowed');
    
class Usuario extends CI_Controller {
 
    public function __construct()
    {
        parent::__construct();
        $this->load->model('usuario_model');
        //Do your magic here
    }
    
    
    public function index()
    {
        if(isset($_SESSION["id"])){
        $this->load->view('html/mainHead');
        $this->load->view('html/mainMenu');
        $this->load->view('html/mainNavbar');
		$this->load->view('view_usuario');
		$this->load->view('html/mainFooter');
        }else{
            redirect('Auth');
        }
    }

    public function registrarContacto(){
        $datos = array(
            'nombre_person' => trim($this->input->post('nombre_person')),
            'apaterno' => trim($this->input->post('apaterno')),
            'person_correo' => trim($this->input->post('person_correo')),
            'list_id' => trim($this->input->post('list_id')),
        );
        
        $id = $this->input->post('id_person');
        $this->usuario_model->update($id,$datos);
        
        
    }
    
    public function contactos(){
        $objLista = $this->usuario_model->readData();
        $data = array();

        foreach($objLista as $key){
            $rows = array(
                $rows[] = $key["nombre_person"],
                $rows[] = $key["apaterno"],
                $rows[] = $key["person_correo"],
                $rows[] = '<button type="button" class="btn btn-outline-success editar" id="'.$key['id_person'].'" >
                            <i class="bx bx-edit"></i></button>' ,
                $rows[] = '<button type="button" class="btn btn-outline-danger eliminar" id="'.$key['id_person'].'" >
                            <i class="bx bx-trash"></i></button>' ,

            );
            $data[]=$rows;
        }
        $result = array('data' => $data);
        echo json_encode($result);
    }

    public function delete() {
        $id=$this->input->post('idback'); 
        $result = $this->usuario_model->delete($id);
        if ($result == TRUE) {
            echo json_encode("Contacto Eliminado");  
        }else{
            echo json_encode ("No fue posible eliminarlo");
        }  
               
    }

    public function actualizar(){
        $id=$this->input->post('idback');
        $data = $this->usuario_model->fetch($id);
        echo json_encode($data);
    }

    
    
}
    
    /* End of file Controllername.php */
    

?>
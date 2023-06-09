<?php
    defined('BASEPATH') OR exit('No direct script access allowed');
    
    class Campana extends CI_Controller {

        
        public function __construct()
        {
            parent::__construct();
            $this->load->model('campana_model');
            $this->load->model('listas_model');
            $this->load->model('usuario_model');
            $this->load->library('email');
        }
        
    
        public function index()
        {
            if(isset($_SESSION["id"])){
            $this->load->view('html/mainHead');
            $this->load->view('html/mainMenu');
            $this->load->view('html/mainNavbar');
            $this->load->view('view_campana');
            $this->load->view('html/mainFooter');
            }else{
                redirect('Auth');
            }
        }

        public function listar(){
            $objLista = $this->campana_model->readData();
            $data = array();

            foreach($objLista as $key){
                $url = base_url('Campana/Actualizar').'/'.$key['id_campain'];
                $row = array();
                $row[]=$key['name_campain'];
                $row[]=$key['descripcion'];
                $row[] = '<center><button type="button" class="btn btn-outline-success editar" id="'.$url.'">
                            <i class="bx bx-edit" ></i></button></center>';
                $row[] = '<center><button type="button" class="btn btn-outline-danger eliminar" id="'.$key['id_campain'].'" >
                            <i class="bx bx-trash"></i></button></center>';
                $row[] = '<center><button type="button" class="btn btn-outline-primary "  onClick="enviar('.$key['id_campain'].')" >
                            <i class="bx bx-mail-send"></i></button></center>';
                
                $data[]=$row;
            }
            $result = array('data' => $data);
            echo json_encode($result);
        }

        public function listar_lista(){
            $objLista = $this->listas_model->readData();
            $data = array();

            foreach($objLista as $key){
                $row = array();
                $row[]=$key['nombre_list'];
                $row[] = '<center><button type="button" class="btn btn-outline-success enviarCorreo" id="'.$key['id_list'].'" >
                            <i class="bx bx-mail-send"></i></button></center>';
                
                $data[]=$row;
            }
            $result = array('data' => $data);
            echo json_encode($result);
        }
    
        public function registrar(){
            $datos = array(
                'name_campain' => trim($this->input->post('name_campain')),
                'descripcion' => trim($this->input->post('descripcion')),
                'title' => trim($this->input->post('title')),
                'subject' => trim($this->input->post('subject')),
                'template' => trim($this->input->post('template'))
            );
            if(empty($_POST["id_campain"])){
                $this->campana_model->insert($datos);
            }else{
                echo json_encode('No se puede insertar los datos');
            }
        }

        public function delete() {
            $id=$this->input->post('idback'); 
            $result = $this->campana_model->delete($id);
            if ($result == TRUE) {
                echo json_encode("Campaña Eliminada");  
            }else{
                echo json_encode ("No fue posible eliminarlo");
            }  
                   
        }

        public function Actualizar($id){
            if(isset($_SESSION["id"])){
            $data['campain'] = $this->campana_model->fetch($id);
            $this->load->view('html/mainHead');
            $this->load->view('html/mainMenu');
            $this->load->view('html/mainNavbar');
            $this->load->view('editar_campaña',$data);
            $this->load->view('html/mainFooter');
            }else{
            redirect('Auth');
            }
            // print_r($data);
            
        }

        public function editar(){
            $datos = array(
                'name_campain' => trim($this->input->post('name_campain')),
                'descripcion' => trim($this->input->post('descripcion')),
                'title' => trim($this->input->post('title')),
                'subject' => trim($this->input->post('subject')),
                'template' => trim($this->input->post('template'))
            );
            if(empty($_POST["id_campain"])){
                $this->campana_model->insert($datos);
                redirect('Campana');
            }else{
                $id = $this->input->post('id_campain');
                $this->campana_model->update($id,$datos);
                redirect('Campana');
            }
        }

        public function sendEmail(){
            $id=$this->input->post('idback');
            $objLista = $this->usuario_model->email($id);

            $id_camp=$this->input->post('idback2');
            $objLista2 = $this->campana_model->email($id_camp);
            
            foreach($objLista as $key){
                
                $configuraciones['mailtype']= 'html';
                $this->email->initialize($configuraciones);
                
                $this->email->to($key["person_correo"]);
                
                foreach($objLista2 as $key2){
                    $this->email->from('emilianogamer154@gmail.com',$key2["name_campain"]);
                    $this->email->subject($key2["subject"]);
                    $this->email->message($key2["template"]);
                }

                if($this->email->send()){
                    echo json_encode('Correo Enviado');
                }else{
                    echo json_encode('Error');
                }
     
            }                
            
        }

    }
    
    /* End of file Controllername.php */
    

?>
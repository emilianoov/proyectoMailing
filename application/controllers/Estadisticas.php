<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Estadisticas extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('estadistica_model');
        $this->load->model('campana_model');
        //Do your magic here
    }
    

    public function index()
    {
        if(isset($_SESSION["id"])){
            $data['campain'] = $this->campana_model->readData();
            $this->load->view('html/mainHead');
            $this->load->view('html/mainMenu');
            $this->load->view('html/mainNavbar');
            $this->load->view('view_estadisticas',$data);
            $this->load->view('html/mainFooter');
        }else{
            redirect('Auth');
        }
    }

    public function graphics(){
        $id=$this->input->POST('estado');
        $objLista = $this->estadistica_model->graficas($id);
        // 
        if($objLista['entregados']>=1){
            $objLista = array(
            array('Fecha', 'Correos enviados'),
            array('Entregados', $objLista['entregados']*1),
            array('No entregados', $objLista['no_entregados']*1),
            array('Enviados', $objLista['total']*1)
          );
          echo json_encode($objLista);
        }else{
            $objLista = array(
                array('Fecha', 'Correos enviados'),
                array('SIN DATOS', .01),
              );
            echo json_encode($objLista);
        }
        
    
        // return $objLista;
        // echo json_encode($objLista);
        // print_r($objLista);
    }
}

/* End of file Controllername.php */


?>
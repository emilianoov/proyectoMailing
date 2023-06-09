<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Auth extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->library('session');
        $this->load->model('auth_model');
    }

    public function index(){
        $this->load->view('view_login');
    }

     public function check(){
       
         $this->form_validation->set_rules('email','Email','trim|required');
         $this->form_validation->set_rules('password','Password','trim|required');

         if($this->form_validation->run()==FALSE){
             $this->session->set_flashdata('error', validation_errors());
             redirect('Auth/index');
            
         }else{
             $user_email=$this->input->post('email');
             $user_pass=$this->input->post('password');
             $session=$this->auth_model->user_check($user_email, $user_pass);
            if(count($session)>0){
                // $sess_array = array('id' =>$session[0]->id, 'user_email'=>$session[0]->usu_correo, 'name'=>$session[0]->nombre);
                $sess_array = array(
                    'id' => $session[0]->id,
                    'user_email' => $session[0]->usu_correo,
                    'name' => $session[0]->nombre,
                    'paterno' => $session[0]->apaterno,
                    'materno' => $session[0]->amaterno,
                    'acceso' => TRUE
                );
                 $this->session->set_userdata($sess_array );
                 redirect('Welcome');
             }else{
                 $this->session->set_flashdata('error', 'Datos incorrectos');
                redirect('Auth');
            }
        }
    }

    public function logout(){
        $this->session->sess_destroy();
        redirect('Auth');
    }

}        
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Estadisticas extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        //Do your magic here
    }
    

    public function index()
    {
        if(isset($_SESSION["id"])){
            $this->load->view('html/mainHead');
            $this->load->view('html/mainMenu');
            $this->load->view('html/mainNavbar');
            $this->load->view('view_estadisticas');
            $this->load->view('html/mainFooter');
        }else{
            redirect('Auth');
        }
    }
}

/* End of file Controllername.php */


?>
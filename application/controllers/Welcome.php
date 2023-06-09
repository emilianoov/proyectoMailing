<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/userguide3/general/urls.html
	 */
	public function index()
	{
		if(isset($_SESSION["id"])){
			$this->load->view('html/mainHead');
			$this->load->view('html/mainMenu');
			$this->load->view('html/mainNavbar');
			$this->load->view('view_home');		
	 		$this->load->view('html/mainFooter');
			$this->load->view('html/mainJs');
		}else{
			redirect('Auth');
		}
	}

	public function Vista()
	{
		if(isset($_SESSION["id"])){
			$this->load->view('html/mainHead');
			$this->load->view('html/mainMenu');
			$this->load->view('html/mainNavbar');
			$this->load->view('view');		
	 		$this->load->view('html/mainFooter');
			$this->load->view('html/mainJs');
		}else{
			redirect('Auth');
		}
	}

	// public function home(){
	// 	if(isset($_SESSION["id"])){
	// 		$this->load->view('html/mainHead');
	// 		$this->load->view('html/mainMenu');
	// 		$this->load->view('html/mainNavbar');
	// 		$this->load->view('view_home');
	// 		$this->load->view('html/mainFooter');
	// 		$this->load->view('html/mainJs');
	// 	}else{
	// 		redirect('Auth');
	// 	}
		
	// }
}
?>
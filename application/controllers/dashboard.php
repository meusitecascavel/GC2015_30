<?php


class Dashboard extends CI_Controller {
	public function __construct() {
		parent::__construct();	
	}
	
	public function index(){
		
		$this->load->view('html_header');
		$this->load->view('menu');
		$this->load->view('dashboard');
		$this->load->view('html_footer');
	}
	
}

?>
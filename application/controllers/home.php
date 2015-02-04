<?php

if (!defined('BASEPATH')) exit ('No direct script access allowed');



class Home extends CI_Controller {

	public function __construct() {

		parent::__construct();	

	}

	

	public function index(){

		$this->load->view('html_header');

		$this->load->view('login');

		$this->load->view('html_footer');

	}

	

	public function login()

	{

		$login = $this->input->post('login');

		$senha   = $this->input->post('senha');	

		$this->db->where('login',$login);

		$this->db->where('senha',$senha);

		$this->db->where('situacao',1);

		$login = $this->db->get('usuarios')->result();
		// Se o result = 1 que existe
		

		if(count($login) === 1){

			$dados = array('login' => $login[0]->login, 'logado' => TRUE, 'nome' => $login[0]->nome);

			$this->session->set_userdata($dados);

			redirect("dashboard");	

		} else {

			redirect( "");	

		}

	}

	

	public function logout(){

		$this->session->sess_destroy();

		redirect("");	

	}

}





?>
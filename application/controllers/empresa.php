<?php if(!defined('BASEPATH')) exit('No direct script access allowed');
class Empresa extends CI_Controller {
	
	public function __construct(){
		parent::__construct();			
		if(!$this->session->userdata('session_id') || !$this->session->userdata('logado')){
			redirect(base_url()."home");
		}
	}
	
	public function index(){
		$this->load->library('table');
		$data['empresas'] = $this->db->get('empresas')->result();
		$this->load->view('html_header');
		$this->load->view('menu');
		$this->load->view('listar_empresas',$data);
		$this->load->view('html_footer');
	}
	
	public function adicionar(){
		$this->load->library('form_validation');
		$this->load->view('html_header');
		$this->load->view('menu');
		$this->load->view('cadastrar_empresa');
		$this->load->view('html_footer2');
		
		$this->form_validation->set_rules('nome', 'nome', 'required');
		if($this->form_validation->run() == FALSE)
		{
			
		}
		else
		{
				$dados['nome'] = $this->input->post('nome');
				$dados['dominio'] = $this->input->post('dominio');
				$dados['telefone'] = $this->input->post('telefone');
				$dados['endereco'] = $this->input->post('endereco');
				$dados['cidade'] = $this->input->post('cidade');
				$dados['uf'] = $this->input->post('uf');
				$dados['cnpj'] = $this->input->post('cnpj');
				$dados['email_gestorcar'] = $this->input->post('email_gestorcar');
				$dados['email_proposta'] = $this->input->post('email_proposta');
				$dados['mod_repasse'] = $this->input->post('mod_repasse');
				$dados['site'] = $this->input->post('site');
				$this->db->insert('empresas',$dados);
				redirect(base_url()."index.php/empresa");
			
		}
	}
	
	public function excluir($id){
		$this->db->where('id',$id);
		$this->db->delete('empresas');
		redirect("empresa");
	} 
}
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Page extends CI_Controller {

	public function index()
	{	$this->load->model("bd_model");
		$lista = $this->bd_model->buscar();
		$dados = array("usuarios"=>$lista);

		$this->load->view('home', $dados);

		switch (@$_REQUEST["page"]) {
			case "novo":
				$this->load->view("newUser");
				break;
			case "listar":
				$this->load->view("listUser");
				break;
			case "salvar":
				$this->load->view("bd_model");
				break;
				case "editar":
					$this->load->view("editUser");
				
		}
	}
	
	public function cadastrar(){
		$usuario = array(
		   "nome" => $this->input->post("nome"),
		   "email" => $this->input->post("email"),
		   "senha" => md5($this->input->post("senha")),
		   "data_nasc" => $this->input->post("data_nasc"));
		$this->load->model("bd_model");
		$this->bd_model->salvarUser($usuario);
		$this->load->view('msg_concluido');
   }

   public function delete($id){
	$this->load->model("bd_model");
	$this->bd_model->deletar_user($id);
	$this->load->view('msg_excluido');
   }

   
   public function editar()
   {
	$id =$this->input->get("id");
	$this->load->model("bd_model");
	$usuario = $this->bd_model->retorna($id);
	$dados = array("usuario" => $usuario);

	$this->load->view('editUser', $dados);
   }

   function salvar($id){
	$this->load->model("bd_model");
	$this->bd_model->salvar($id);
	$this->load->view('msg_editado');
   }
   
}
    
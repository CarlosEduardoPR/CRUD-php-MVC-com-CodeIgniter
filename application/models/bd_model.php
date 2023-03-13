<?php
class bd_model extends CI_Model
{
    public function buscar()
    {
        return $this->db->get('usuarios')->result_array();
    }

    public function salvarUser($usuario)
    {
        $this->db->insert("usuarios", $usuario);
    }

    public function deletar_user($id)
    {
        $this->db->where('id =', $id);
        $this->db->delete("usuarios");
        return true;
    }

    public function retorna($id)
    {
        return $this->db->get_where("usuarios", array("id" => $id))->row_array();
    }


    public function salvar()
    {
        $id = $this->input->post('id');

        $usuario = array(
            'nome' => $this->input->post('nome'),
            'email' => $this->input->post('email'),
            'senha' => $this->input->post('senha'),
            'data_nasc' => $this->input->post('data_nasc')
        );

        $this->db->where('id', $id);
        return $this->db->update("usuarios", $usuario);
    }

}

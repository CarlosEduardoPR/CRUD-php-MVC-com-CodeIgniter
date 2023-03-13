<!--Page de novo usuario, que liga cada input no arquivo salvarUser por meio do 'action' do form-->

<h1>&nbsp Novo Usuário</h1>

<?php
echo form_open(action: "Page/cadastrar");
echo form_label(label_text: "Nome", id: "nome");
echo form_input(array(
  "name" => "nome",
  "class" => "form-control",
  "id" => "nome",
  "maxlenght" => "255",
  "required" => "required"
));

echo form_label(label_text: "Email", id: "email");
echo form_input(array(
  "name" => "email",
  "class" => "form-control",
  "id" => "email",
  "maxlenght" => "255",
  "type" => "email",
  "required" => "required"

));

echo form_label(label_text: "Senha", id: "senha");
echo form_password(array(
  "name" => "senha",
  "class" => "form-control",
  "id" => "senha",
  "maxlenght" => "255",
  "required" => "required"
));

echo form_label(label_text: "Data de Nascimento", id: "data_nasc");
echo form_input(array(
  "name" => "data_nasc",
  "class" => "form-control",
  "id" => "data_ansc",
  "maxlenght" => "255",
  "type" => "date",
  "required" => "required",
  "min" => "1923-04-01",
  "max" => "2005-02-28"
));

echo form_button(array(
  "class" => "btn btn-primary",
  "type" => 'submit',
  "content" => "Enviar"
));

echo form_close();
?>
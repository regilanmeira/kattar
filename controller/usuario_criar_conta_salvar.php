<?php

//Incluir o arquivo da classe cooperativa
require "../model/usuario.php";

include "referencias.php";

//Capturar os elementos digitados no formulário

$nome = $_POST["txtNome"];
$email = $_POST["txtEmail"];
$senha = $_POST["txtSenha"];
$telefone = $_POST["txtTelefone"];
$estado = $_POST["txtEstado"];
$municipio = $_POST["txtMunicipio"];
$bairro = $_POST["txtBairro"];
$logradouro = $_POST["txtLogradouro"];

$hash = password_hash($senha,1);

$usua = new Usuario($nome, $email, $hash, $telefone, $estado, $municipio, $bairro, $logradouro);

if ($usua->criarUsuario()) {
    echo "<h1 class='alert alert-success'>Usuário criado com sucesso!</h1>";
} else {
    echo "<h1 class='alert alert-danger'>Não foi possível criar o usuário. Verifique os dados informados. </h1> ";
}

?>
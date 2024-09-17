<meta name="viewport" content="width=device-width, initial-scale=1.0">
<?php

//Incluir o arquivo da classe cooperativa
require "../model/cooperativa.php";

include "referencias.php";

//Capturar os elementos digitados no formulário

$cnpj = $_POST["txtCNPJ"];
$nome = $_POST["txtNome"];
$email = $_POST["txtEmail"];
$senha = $_POST["txtSenha"];
$telefone = $_POST["txtTelefone"];
$estado = $_POST["txtEstado"];
$municipio = $_POST["txtMunicipio"];
$bairro = $_POST["txtBairro"];
$logradouro = $_POST["txtLogradouro"];

$coop = new Cooperativa($cnpj, $nome, $email, $senha, $telefone, $estado, $municipio, $bairro, $logradouro);

if ($coop->criarCooperativa()) {
    echo "<h1 class='alert alert-success'>Cooperativa adicionada com sucesso!</h1>";
} else {
    echo "<h1 class='alert alert-danger'>Não foi possível adicionar a cooperativa. Verifique os dados informados. </h1> ";
}

?>
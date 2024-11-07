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

$hash = password_hash($senha, 1);

$usua = new Usuario($email,$nome,$hash,$telefone,$estado,$municipio,$bairro,$logradouro);


if ($usua->criarUsuario()) {
    echo "<h1 class='alert alert-success'>Usuário adicionado com sucesso!</h1>";
} else {
    echo "<h1 class='alert alert-danger'>Não foi possível criar o usuário. Verifique os dados informados. </h1> ";
}



?>

<div class="row">
    <div class="col-md-12" style="text-align: left;">

        <a href="../view/conta_criar.php">
            <input type="button" class="btn btn-danger" value="Voltar">
        </a>
    </div>

</div>
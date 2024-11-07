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
    echo "<h1 class='alert alert-success'>Cooperativa criada com sucesso!</h1>";
} else {
    echo "<h1 class='alert alert-danger'>Não foi possível criar a cooperativa. Verifique os dados informados. </h1> ";
}

?>

<div class="row">
    <div class="col-md-12" style="text-align: left;">

        <a href="../view/index.php">
            <input type="button" class="btn btn-danger" value="Voltar">
        </a>
    </div>

</div>

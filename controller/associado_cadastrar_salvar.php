<?php

//Incluir o arquivo da classe associado
require "../model/associado.php";

include "referencias.php";

//Capturar os elementos digitados no formulário

$cnpj_cooperativa = $_POST["txtCNPJ"];
$nome = $_POST["txtNome"];


$assoc = new Associado($cnpj_cooperativa, $nome);

if ($assoc->criarAssociado()) {
    echo "<h1 class='alert alert-success'>Associado adicionado com sucesso!</h1>";
} else {
    echo "<h1 class='alert alert-danger'>Não foi possível adicionar o Associado. Verifique os dados informados. </h1> ";
}

?>
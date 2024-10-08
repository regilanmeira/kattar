<?php

//Incluir o arquivo da classe tipo de material
require "../model/tipo_material.php";

include "referencias.php";

//Capturar os elementos digitados no formulário


$descricao = $_POST["txtDescricao"];
$observacao = $_POST["txtObservacao"];

$tmat = new TipoMaterial($descricao,$observacao);

if ($tmat->criarTipoMaterial())
{
    echo "<h1 class='alert alert-success'>Tipo de material adicionada com sucesso!</h1>";
}
else
{
    echo "<h1 class='alert alert-danger'>Não foi possível adicionar o tipo de material. </h1> ";
}

?>
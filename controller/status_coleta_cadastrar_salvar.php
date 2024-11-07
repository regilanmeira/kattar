<?php

//Incluir o arquivo da classe status da coleta
require "../model/status_coleta.php";

include "referencias.php";

//Capturar os elementos digitados no formulário

   
    $descricao = $_POST["txtDescricao"];

$status = new Status ($descricao);

if ($status->criarStatus())
{
    echo "<h1 class='alert alert-success'>Status adicionado com sucesso!</h1>";
}
else
{
    echo "<h1 class='alert alert-danger'>O Status da coleta não foi adicionado, tente novamente. </h1> ";
}

?>



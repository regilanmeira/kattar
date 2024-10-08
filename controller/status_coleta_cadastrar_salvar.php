<?php

//Incluir o arquivo da classe status da coleta
require "../model/status_coleta.php";

include "referencias.php";

//Capturar os elementos digitados no formulário

   
    $descricao = $_POST["txtDescricao"];

$status = new Status ($descricao);

if ($status->criarStatus())
{
    echo "<h1 class='alert alert-success'>Status atualizado com sucesso!</h1>";
}
else
{
    echo "<h1 class='alert alert-danger'>Status da coleta não foi atualizado, tente outra vez. </h1> ";
}

?>



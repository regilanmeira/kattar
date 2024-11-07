<?php

//Incluir o arquivo da classe cooperativa
require_once"../model/historico_coleta.php";

include "referencias.php";

//Capturar os elementos digitados no formulário

$data_historico = $_POST["txtData"];
$id_status = $_POST["selectStatus"];
$id_associado = $_POST["selectAssociado"];
$id_coleta = $_POST["txtIdColeta"];
$observacao = $_POST["txtObservacao"];


$historico = new HistoricoColeta("",$data_historico,$id_associado,$id_coleta,$id_status,$observacao);




if ($historico->analisarColeta()) {
    echo "<h1 class='alert alert-success'>Análise realizada com sucesso.</h1>";
} else {
    echo "<h1 class='alert alert-danger'>Não foi possível registrar a análise da coleta.Tente novamente</h1> ";
}


?>


<div class="row">
    <div class="col-md-12" style="text-align: left;">

        <a href="../view/coleta_solicitacoes_geral.php">
            <input type="button" class="btn btn-danger" value="Voltar">
        </a>
    </div>

</div>

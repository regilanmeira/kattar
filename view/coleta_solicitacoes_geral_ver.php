<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php require "referencias.php";

    ?>

    <script src="localizacao.js"></script>
</head>

<body onload="getLocation();">
    <?php include_once "../model/coleta.php"; ?>
    <?php include_once "../model/status_coleta.php"
    ?>
    <?php include_once "../model/associado.php"
    ?>
    <?php include_once "../model/historico_coleta.php"
    ?>

    <form action="../controller/coleta_analisar.php" method="post">
        <div class="container">
            <div class="row">
                <?php require "cabecalho_pagina.php" ?>

                <div class="col-md-12">
                    <h5>Minha solicitação</h5>
                </div>


                <?php
                $coleta = new Coleta("", "", "", "", "", "", "", "", "", "", "", "");
                $id_coleta = $_GET["id_coleta"];
                $dados = $coleta->exibirColetaPorID($id_coleta);
                $linha = mysqli_fetch_assoc($dados);





                ?>

                <div class="col-md-12" style="text-align:left">
                    <input type="hidden" class="form-control" name="txtIdColeta" value="<?php echo $id_coleta;  ?>">
                    <label class="label">Descrição</label>
                    <textarea class="form-control" name="descricao" placeholder="" disabled>

                    <?php echo $linha["descricao"];  ?>
                    </textarea>
                </div>

                <div class="col-md-6" style="text-align: left;">
                    <label class="label">Email</label>

                    <input type="text" class="form-control" name="txtEmailVisualizar" disabled value="<?php echo $linha["email_usuario"];  ?>">

                </div>

                <div class="col-md-6" style="text-align: left;">
                    <label class="label">Tipo do material</label>
                    <input type="text" class="form-control" name="txtTipoMateriaal" disabled value="<?php echo $linha["tipo_material_descricao"];  ?>">

                </div>

                <div class="col-md-6" style="text-align: left;">
                    <label class="label">Data para coleta</label>
                    <input type="text" class="form-control" name="dataColeta" disabled value="<?php echo $linha["data_coleta"];  ?>">
                </div>

                <div class="col-md-6" style="text-align: left;">
                    <label class="label">Turno para coleta</label>

                    <input type="text" class="form-control" name="txtTurno" disabled value="<?php echo $linha["turno_coleta"];  ?>">

                </div>

                <div class="col-md-12" style="text-align: left;">
                    <label class="label">Foto do local</label>
                    <br />
                    <img class="img-fluid" src="<?php echo $linha["foto_residuo"]; ?>" />


                </div>


                <div class="col-md-6" style="text-align: left;">
                    <label class="label">Logradouro</label>
                    <input type="text" class="form-control" name="txtLogradouro" disabled value="<?php echo $linha["logradouro"];  ?>">
                </div>

                <div class="col-md-6" style="text-align: left;">
                    <label class="label">Bairro</label>
                    <input type="text" class="form-control" name="txtBairro" disabled value="<?php echo $linha["bairro"];  ?>">

                </div>

                <div class="col-md-6" style="text-align: left;">
                    <label class="label">Estado</label>

                    <input type="text" class="form-control" name="txtEstado" disabled value="<?php echo $linha["estado"];  ?>">

                </div>

                <div class="col-md-6" style="text-align: left;">
                    <label class="label">Município</label>
                    <input type="text" class="form-control" name="txtMunicipio" disabled value="<?php echo $linha["municipio"];  ?>">

                </div>


 <!-- FORMULÁRIO PARA ANALISAR A COLETA - ADICIONAR UM HISTÓRICO -->

 <div class="col-md-12" style="text-align: left;margin-top:15px;margin-bottom:10px">
                    <h5>Analisar coleta</h5>
                </div>

                <div class="col-md-4" style="text-align: left;">
                    <label class="label">Data</label>
                    <input type="date" class="form-control" name="txtData" placeholder="">
                </div>

                <div class="col-md-4" style="text-align: left;">
                    <label class="label">Status</label>
                    <select name="selectStatus" class="form-control">
                        <?php
                        $status = new status("");

                        $dados = $status->exibirStatus();

                        while ($linha = mysqli_fetch_assoc($dados)) {
                        ?>
                            <option value="<?php echo $linha["id"] ?>"><?php echo $linha["descricao"] ?></option>

                        <?php
                        }
                        ?>



                    </select>

                </div>

                <div class="col-md-4" style="text-align: left;">
                    <label class="label">Associado responsável</label>
                    <select name="selectAssociado" class="form-control">
                        <?php
                        $associado = new Associado("", "");

                        $dados = $associado->exibirAssociado();

                        while ($linha = mysqli_fetch_assoc($dados)) {
                        ?>
                            <option value="<?php echo $linha["id"] ?>"><?php echo $linha["nome"] ?></option>

                        <?php
                        }
                        ?>



                    </select>

                </div>

                <div class="col-md-12">
                    <textarea class="form-control" name="txtObservacao" placeholder="Observações"></textarea>
                </div>

                <div class="col-md-12" style="text-align: left;">

                    <input type="submit" class="btn btn-success" value="Analisar">
                </div>


                <!-- TABELA PARA VISUALIZAR OS HISTÓRICOS DAS COLETAS -->

            <div class="col-md-12" style="text-align: left;margin-top:15px;margin-bottom:10px">
                <h5>Histórico da solicitação da coleta</h5>
            </div>

            <div class="col-md-12">

                <table>

                    <?php


                    $historico = new HistoricoColeta("", "", "", "", "", "");

                    $dados = $historico->exibirHistoricoColeta($id_coleta);

                    if ($dados == 0) {
                        echo "<h5>Não há registros de análise desta coleta. </h5>";


                        echo " <a href='coleta_solicitacoes_geral.php'><input type='button' class='btn btn-danger' value='Voltar'></a>";


                        die;
                    }


                    ?>

                    <tr>
                        <th style="text-align: left;padding:5px">Data</th>
                        <th style="text-align: left;padding:5px">Observações</th>
                        <th style="text-align: left;padding:5px">Associado</th>
                        <th style="text-align: left;padding:5px">Status</th>


                    </tr>

                    <?php

                    while ($linha = mysqli_fetch_assoc($dados)) {
                    ?>
                        <tr>
                            <td style="text-align: left;padding:5px"><?php echo $linha["data_historico"] ?></td>
                            <td style="text-align: left;padding:5px"><?php echo $linha["observacao"] ?></td>
                            <td style="text-align: left;padding:5px"><?php echo $linha["nome"] ?></td>
                            <td style="text-align: left;padding:5px"><?php echo $linha["descricao"] ?></td>

                        </tr>

                    <?php
                    }


                    ?>
                </table>

            </div>





               









            </div>



            <div class="row">

             


                <div class="col-md-12" style="text-align: left;">

                    <a href="coleta_solicitacoes_geral.php">
                        <input type="button" class="btn btn-danger" value="Voltar">
                    </a>

                </div>
            </div>

            <?php require "rodape.php" ?>



        </div>


        </div>

    </form>
    </div>
</body>

</html>
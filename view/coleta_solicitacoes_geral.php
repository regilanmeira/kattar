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
    <?php include "../model/status_coleta.php";
    include "../model/coleta.php";
    include "../model/tipo_material.php";
    ?>
    <form name="localizacao" method="post" enctype="multipart/form-data">

        <div class="container">

            <div class="row">


                <?php require "cabecalho_pagina.php" ?>

                <div class="col-md-12">
                <h5>Coletas solicitadas</h5>
                </div>

                <div class="col-md-12">

                    <table>
                        <tr>
                        <th style="text-align: left;padding:5px">Data da Coleta</th>
                            <th style="text-align: left;padding:5px">Descrição</th>
                            <th style="text-align: left;padding:5px">Tipo de material</th>
                            <th style="text-align: left;padding:5px">Status</th>
                            <th style="text-align: left;padding:5px">Ações</th>

                        </tr>
                        <?php


                        session_start();
                        $email = $_SESSION["email"];

                        $coleta = new coleta("", "", "", "", "", "", "", "", "", "", "", "");

                        $dados = $coleta->exibirColeta();

                        while ($linha = mysqli_fetch_assoc($dados)) {
                        ?>
                            <tr>
                                <td style="text-align: left;padding:5px"><?php echo $linha["data_coleta"] ?></td>
                                <td style="text-align: left;padding:5px"><?php echo $linha["descricao"] ?></td>
                                <td style="text-align: left;padding:5px"><?php echo $linha["tipo_material_descricao"] ?></td>
                                <td style="text-align: left;padding:5px"><?php echo $linha["status_coleta"] ?></td>
                                <td>
                                    <a href="coleta_solicitacoes_geral_ver.php?id_coleta=<?php echo $linha["id"] ?>">
                                    <input type="button" class="btn btn-success" value="Ver"> 
                                    </a>
                                </td>
                            </tr>

                        <?php
                        }

                        ?>
                    </table>

                </div>


                <div style="margin-top:20px;"> </div>


                <div class="col-md-12" style="text-align: left;" >
                    <label class="label">Pesquise por status</label>
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



                <div class="col-md-12" style="text-align: left;">

                    <input type="submit" class="btn btn-success" value="Pequisar" formaction="coleta_solicitacoes_geral_status.php">
                </div>


                <div class="col-md-12" style="text-align: left;" >
                    <label class="label">Pesquise por tipo de material</label>
                    <select name="selectTipoMateiral" class="form-control">
                     
                    <?php
                        $tipo_material = new TipoMaterial("","");

                        $dados = $tipo_material->exibirTipoMaterial();

                        while ($linha = mysqli_fetch_assoc($dados)) {
                            ?>
                                <option value="<?php echo $linha["id"] ?>"><?php echo $linha["descricao"] ?></option>
    
                            <?php
                            }
                            ?>
                        ?>


                    </select>

                </div>



                <div class="col-md-12" style="text-align: left;">

                    <input type="submit" class="btn btn-success" value="Pequisar" formaction="coleta_solicitacoes_geral_tipo_material.php">
                </div>





                <div class="col-md-12" style="text-align: left;">

                    <a href="home.php">
                        <input type="button" class="btn btn-danger" value="Voltar">
                    </a>

                </div>
            </div>

            <?php require "rodape.php" ?>



        </div>


        </div>

    </form>
</body>

</html>
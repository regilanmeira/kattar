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
    ?>
    <form name="localizacao" method="post" action="coleta_solicitacoes_status.php" enctype="multipart/form-data">

        <div class="container">

            <div class="row">


                <?php require "cabecalho_pagina.php" ?>

                <div class="col-md-12">
                <h5>Minhas solicitações</h5>
                </div>

                <div class="col-md-12">

                    <table>
                        <tr>
                            <th style="text-align: left;padding:5px">Data da Coleta</th>
                            <th style="text-align: left;padding:5px">Descrição</th>
                            <th style="text-align: left;padding:5px">Ações</th>

                        </tr>
                        <?php


                        session_start();
                        $email = $_SESSION["email"];

                        $coleta = new coleta("", "", "", "", "", "", "", "", "", "", "", "");
                        $id_status = $_POST["selectStatus"];
                        $dados = $coleta->exibirColetaPorUsuarioStatus($email,$id_status);

                        if ($dados == 0)
                        {
                            echo "<h1 class='alert alert-danger'>Não há solicitações de coleta para o status indicado. </h1>";
                           

                           echo " <a href='coleta_solicitacoes.php'><input type='button' class='btn btn-danger' value='Voltar'></a>";
        
                            
                            die;
                        }

                        while ($linha = mysqli_fetch_assoc($dados)) {
                        ?>
                            <tr>
                                <td style="text-align: left;padding:5px"><?php echo $linha["data_coleta"] ?></td>
                                <td style="text-align: left;padding:5px"><?php echo $linha["descricao"] ?></td>
                                <td>
                                <a href="coleta_solicitacoes_ver.php?id_coleta=<?php echo $linha["id"] ?>">
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


                <div class="col-md-12" style="text-align: left;">

                    <a href="coleta_solicitacoes.php">
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
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
    <form name="localizacao" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>" enctype="multipart/form-data">

        <div class="container">

            <div class="row">


                <?php require "cabecalho_pagina.php" ?>

               

                <div class="col-md-12" style="text-align: left;">
                <label class="label" >Selecione o status</label>
                    <select name="selectStatus" class="form-control">
                    <?php
                        $status = new status("");
                        
                        $dados = $status->exibirStatus();

                        while($linha = mysqli_fetch_assoc($dados))
                        {
                    ?>
                        <option value="<?php echo $linha["id"]?>"><?php echo $linha["descricao"]?></option>

                    <?php 
                        }
                    ?>
                    ?>
                      

                    </select>

                </div>

                
                <div class="col-md-12">

                        <table>
                            <tr>
                                <td>Data da Coleta</td>
                                <td>Descrição</td>
                        
                            </tr>
                            <?php 
                            if ($_SERVER['REQUEST_METHOD']  == 'POST')
                            {
                            
                                session_start();
                                $email = $_SESSION["email"];
                                $id_status = 1;
                                $coleta = new coleta("","","","","","","","","","","","");
                        
                                $dados = $coleta->exibirColetaPorUsuarioStatus($email,$id_status);
        
                            while($linha = mysqli_fetch_assoc($dados))
                            {
                            ?>
                            <tr>
                                <td><?php echo $linha["data_coleta"] ?></td>
                                <td><?php echo $linha["descricao"] ?></td>
                            </tr>

                            <?php 
                            }
                        }
                            ?>
                        </table>
                 
                 </div>

            
                <div class="col-md-12" style="text-align: left;">


                

                    <input type="submit" class="btn btn-success" value="Visualisar" >
                </div>
        




           
                <div class="col-md-12" style="text-align: left;">

                    <a href="home_usuario.php">
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
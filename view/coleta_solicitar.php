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
    <?php include "../model/tipo_material.php";
 ?>
    <form name="localizacao" method="post" action="../controller/coleta_solicitar_salvar.php" enctype="multipart/form-data">

        <div class="container">

            <div class="row">


                <?php require "cabecalho_pagina.php" ?>

                <div class="col-md-12">
                <h5>Solicitar coleta</h5>
                </div>

                <div class="col-md-12">
                    <textarea class="form-control" name="descricao" placeholder="Descrição do material a ser coletado"></textarea>
                </div>

                
                <div class="col-md-6" style="text-align: left;">
                <label class="label" >Email</label>
                <?php session_start();
                $email = $_SESSION["email"];
                ?>
                    <input type="email" class="form-control" name="txtEmailVisualizar" disabled value="<?php echo $email ?>" >
                    <input type="hidden" class="form-control" name="txtEmail" value="<?php echo $email ?>" >
                </div>

                <div class="col-md-6" style="text-align: left;">
                <label class="label" >Selecione o tipo do material</label>
                    <select name="selectIdTipoMaterial" class="form-control">
                    <?php
                        $tipo_material = new TipoMaterial("","");
                        
                        $dados = $tipo_material->exibirTipoMaterial();

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

                <div class="col-md-6" style="text-align: left;">
                <label class="label" >Data para coleta</label>
                    <input type="date" class="form-control" name="dataColeta" placeholder="Data para coleta">
                </div>

                <div class="col-md-6" style="text-align: left;">
                <label class="label" >Turno</label>
                <select name="txtTurno"  class="form-control">
                <option value="">Selecione</option>
                    <option value="Matutino">Matutino</option>
                    <option value="Vespertino">Vespertino</option>
                    <option value="Noturno">Noturno</option>
                </select>
                   
                </div>

                <div class="col-md-12" style="text-align: left;">
                    <label class="label">Envie uma foto do local</label>

                    <input class="btn btn-btn-success" name="pic" type="file" accept="image/*">


                </div>
        




                <div class="col-md-6">
                    <input type="hidden" class="input" name="txtLatitude">
                </div>
                <div class="col-md-6">

                    <input type="hidden" class="input" name="txtLongitude">
                </div>


                <div class="col-md-6" style="text-align: left;">
                <label class="label" >Logradouro</label>
                    <input type="text" class="form-control" name="txtLogradouro" placeholder="Logradouro (Rua, Avenida, Travessa...)">
                </div>
                <div class="col-md-6" style="text-align: left;">
                <label class="label" >Bairro</label>
                    <input type="text" class="form-control" name="txtBairro" placeholder="Bairro">
                
                </div>

                <div class="col-md-6" style="text-align: left;">
                <label class="label" >Estado</label>

                <select class="form-control" name="txtEstado">
    <option value="">Selecione</option>
    <option value="AC">Acre</option>
    <option value="AL">Alagoas</option>
    <option value="AP">Amapá</option>
    <option value="AM">Amazonas</option>
    <option value="BA">Bahia</option>
    <option value="CE">Ceará</option>
    <option value="DF">Distrito Federal</option>
    <option value="ES">Espirito Santo</option>
    <option value="GO">Goiás</option>
    <option value="MA">Maranhão</option>
    <option value="MS">Mato Grosso do Sul</option>
    <option value="MT">Mato Grosso</option>
    <option value="MG">Minas Gerais</option>
    <option value="PA">Pará</option>
    <option value="PB">Paraíba</option>
    <option value="PR">Paraná</option>
    <option value="PE">Pernambuco</option>
    <option value="PI">Piauí</option>
    <option value="RJ">Rio de Janeiro</option>
    <option value="RN">Rio Grande do Norte</option>
    <option value="RS">Rio Grande do Sul</option>
    <option value="RO">Rondônia</option>
    <option value="RR">Roraima</option>
    <option value="SC">Santa Catarina</option>
    <option value="SP">São Paulo</option>
    <option value="SE">Sergipe</option>
    <option value="TO">Tocantins</option>
</select>

                   
                </div>
                
                

           


                <div class="col-md-6" style="text-align: left;">
                <label class="label" >Município</label>
                    <input type="text" class="form-control" name="txtMunicipio" placeholder="Município">
               
                </div>
                
                </div>

            <div class="row">
                <div class="col-md-12" style="text-align: left;">


                

                    <input type="submit" class="btn btn-success" value="Solicitar" >
                </div>
            </div>





            <div class="row">
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
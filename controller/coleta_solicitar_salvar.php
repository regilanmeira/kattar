<?php

//Incluir o arquivo da classe cooperativa
require "../model/coleta.php";

include "referencias.php";

//Capturar os elementos digitados no formulário

$latitude = $_POST["txtLatitude"];
$longitude = $_POST["txtLongitude"];
$id_tipo_material = $_POST["selectIdTipoMaterial"];
$bairro = $_POST["txtBairro"];
$estado = $_POST["txtEstado"];
$municipio = $_POST["txtMunicipio"];
$logradouro = $_POST["txtLogradouro"];
$email_usuario = $_POST["txtEmail"];
$data_coleta = $_POST["dataColeta"];
$descricao = $_POST["descricao"];
$turno_coleta = $_POST["txtTurno"];
$foto_residuo = $_FILES["pic"];





// -------- ENVIO DE IMAGEM PARA O SERVIDOR

$foto = "";

if (isset($_FILES["pic"])) {

    $ext = strtolower(substr($_FILES["pic"]["name"], -4)); //Pegando extensão do arquivo
    $new_name = date("Y_m_d_H_i_s") . $ext; //Definindo um novo nome para o arquivo
    $dir = "../uploads/"; //Diretório para uploads

    $foto = $dir . $new_name;
    move_uploaded_file($_FILES["pic"]["tmp_name"], $dir . $new_name); //Fazer upload do arquivo
}



$col = new Coleta($data_coleta,$estado,$municipio,$bairro,$logradouro,$descricao,$id_tipo_material,$email_usuario,$latitude,$longitude,$foto,$turno_coleta);


if ($col->criarColeta()) {
    echo "<h1 class='alert alert-success'>Coleta Criada!</h1>";
} else {
    echo "<h1 class='alert alert-danger'>Não foi possível solicitar coleta.Tente novamente</h1> ";
}


?>
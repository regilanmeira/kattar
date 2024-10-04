<?php

//Incluir o arquivo da classe cooperativa
require "../model/coleta.php";

include "referencias.php";

//Capturar os elementos digitados no formulário

$latitude = $_POST["txtLatitude"];
$longitude = $_POST["txtLongitude"];
$id_tipo_material = $_POST["selectIdTipoMaterial"];




// -------- ENVIO DE IMAGEM PARA O SERVIDOR

$foto = "";

if (isset($_FILES["pic"])) {

    $ext = strtolower(substr($_FILES["pic"]["name"], -4)); //Pegando extensão do arquivo
    $new_name = date("Y_m_d_H_i_s") . $ext; //Definindo um novo nome para o arquivo
    $dir = "../uploads/"; //Diretório para uploads

    $foto = $dir . $new_name;
    move_uploaded_file($_FILES["pic"]["tmp_name"], $dir . $new_name); //Fazer upload do arquivo
}


echo $latitude . "<br />" . $longitude . "<br />" . $id_tipo_material . "<br />" . $foto;



?>
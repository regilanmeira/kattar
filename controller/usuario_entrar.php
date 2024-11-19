<?php

//Incluir o arquivo da classe usuario
require "../model/usuario.php";
require "../model/cooperativa.php";

include "referencias.php";


//Capturar o login e a senha

$email = $_POST["txtEmail"];
$senha = $_POST["txtSenha"];
$tipoAcesso = $_POST["tipoAcesso"];

if ($tipoAcesso == "cidadao") {

    $usu = new Usuario($email, "", $senha, "", "", "", "", "");

    $dados = $usu->buscarUsuarioPorEmail();

    if ($dados != null) {
        $linha = mysqli_fetch_assoc($dados);
        if (password_verify($senha, $linha["senha"])) {
            session_start();
            $_SESSION["email"] = $usu->getEmail();
            header("location:../view/home_usuario.php");
        } else {

            echo "<h1 class='alert alert-danger'>Não foi possível efetuar o acesso. Verifique a senha digitada. </h1> ";
?>
            <a href="../view/conta_entrar.php">
                <input type="button" class="btn btn-danger" value="Voltar">
            </a>
        <?php
        }
    } else {

        echo "<h1 class='alert alert-danger'>Não foi possível efetuar o acesso. Verifique o e-mail digitado. </h1> ";
        ?>
        <a href="../view/conta_entrar.php">
            <input type="button" class="btn btn-danger" value="Voltar">
        </a>
        <?php
    }
} //Termina o IF o tipo de acesso cidadao e aqui começa o tipo de acesso cooperativa
else {


    $coop = new Cooperativa("", "", $email, $senha, "", "", "", "", "");

    $dados = $coop->buscarCooperativaPorEmail();

    if ($dados != null) {
        $linha = mysqli_fetch_assoc($dados);
        if (password_verify($senha, $linha["senha"])) {
            session_start();
            $_SESSION["email"] = $coop->getEmail();
            header("location:../view/home.php");
        } else {

            echo "<h1 class='alert alert-danger'>Não foi possível efetuar o acesso. Verifique a senha digitada. </h1> ";
        ?>
            <a href="../view/conta_entrar.php">
                <input type="button" class="btn btn-danger" value="Voltar">
            </a>
        <?php
        }
    } else {
        echo "<h1 class='alert alert-danger'>Não foi possível efetuar o acesso. Verifique o e-mail digitado. </h1> ";
        ?>
        <a href="../view/conta_entrar.php">
            <input type="button" class="btn btn-danger" value="Voltar">
        </a>
<?php

    }
}

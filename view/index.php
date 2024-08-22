<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<?php 

    include "../model/usuario.php";

    $usuario  = new Usuario("ricardo@abc.com.br","Ricardo Santos","123456","7399999","BA","Itabuna","Não definido","Rua ABC");

    if ($usuario->criarUsuario() == true)
    {
        echo "Usuário criado";
    }
    else
    {
        echo "Não foi possivel criar o usuário";
    }

?>
</body>
</html>
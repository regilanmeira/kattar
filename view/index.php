<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <?php



    /*

     include "../model/usuario.php";
    $usuario  = new Usuario("ricardo@abc.com.br", "Ricardo Santos", "123456", "7399999", "BA", "Itabuna", "Não definido", "Rua ABC");

    if ($usuario->criarUsuario() == true) {
        echo "Usuário criado";
    } else {
        echo "Não foi possivel criar o usuário";
    }

    
*/

    /*
    include "../model/tipo_material.php";

    $tipo_material = new TipoMaterial("Plástico","Plático de garrafa pet");

    if ($tipo_material->criarTipoMaterial())
    {
        echo "<h1>Material criado</h1>";
    }
    else
    {
        echo "<h1>Não foi possível criar!</h1>";
    }

*/

    /*
    include "../model/tipo_material.php";

    $tipo_material = new TipoMaterial();
    $tipo_material->setId("2");

    if ($tipo_material->removerTipoMaterial())
    {
        echo "<h1>Material removido</h1>";
    }
    else
    {
        echo "<h1>Não foi possível remover!</h1>";
    }*/

    /*
    include "../model/tipo_material.php";

    $tipo_material = new TipoMaterial();
    $tipo_material->setId("1");
    $tipo_material->setDescricao("Vidro");
    $tipo_material->setObservacao("Vidro temperado");

    if ($tipo_material->atualizarTipoMaterial())
    {
        echo "<h1>Material atualizado</h1>";
    }
    else
    {
        echo "<h1>Não foi possível atualizar!</h1>";
    }

    */


    include "../model/tipo_material.php";

    $tipo_material = new TipoMaterial();

    $tabela = $tipo_material->exibirTipoMaterial();

    while ($linha = mysqli_fetch_assoc($tabela)) {

        echo $linha["descricao"] . "<br/>";
    }


    ?>

</body>

</html>
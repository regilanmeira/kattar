<?php

$senha = "";
$hash = password_hash($senha,1);

echo "<h1>HASH DA SENHA <br /> " . $hash . "</h1>";

$senha_digitada="";

$retorno = password_verify($senha_digitada,$hash);

echo $retorno . "<br />";

if ($retorno)
{
    echo "<h1>Logou</h1>";
}
else
{
    echo "<h1>Sua senha não confere!</h1>";

}

?>
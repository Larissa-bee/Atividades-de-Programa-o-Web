<?php

$dbHost = "localhost";
$dbUsername= "root";
$dbPassworf= "";
$dbName= "formulario";

$conexao = new mysqli($dbHost, $dbUsername, $dbPassworf, $dbName);
 
/*VERIFICAR SE A CONEXÃO ESTÁ FUNCIONANDO
if ($conexao->connect_errno)
{
    echo "Erro";
}
else
{
    echo "Conexão efetuada com sucesso";
}*/

?>
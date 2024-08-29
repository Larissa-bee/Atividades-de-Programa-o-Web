<?php

    include_once("confg.php");

    if(isset($_POST['update']))
    {
        $id= $_POST['ID'];
        $nome= $_POST['NOME'];
        $email= $_POST['EMAIL'];
        $senha= $_POST['SENHA'];
        $telefone= $_POST['TELEFONE'];
        $sexo= $_POST['SEXO'];
        $data= $_POST['DATA_NASCIMENTO'];
        $cidade= $_POST['CIDADE'];
        $estado= $_POST['ESTADO'];
        $endereço= $_POST['ENDEREO'];

        $sqlUpdate = "UPDATE usuario SET NOME='$nome', SENHA='$senha',
        EMAIL='$email', TELEFONE='$telefone', SEXO='$sexo', 
        DATA_NASCIMENTO='$data', 
        CIDADE='$cidade', ESTADO='$estado', ENDERECO='$endereço' WHERE ID='$id'";

        $result=$conexao->query($sqlUpdate);
    }

    header('Location: sistema.php');


?>
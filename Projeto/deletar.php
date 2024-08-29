<?php
if (!empty($_GET['id']))
{
    include_once('confg.php');

    $id = $_GET['id'];

    $sqlSelect = "SELECT * FROM usuario WHERE ID=$id";

    $result = $conexao->query($sqlSelect);

    if($result->num_rows > 0)
    {
        $sqlDelete = "DELETE FROM usuario WHERE ID=$id";

        $resultDelete = $conexao ->query($sqlDelete);
    }
}

header('Location:sistema.php');

?>
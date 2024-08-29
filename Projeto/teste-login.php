<?php
session_start();

/*print_r($_REQUEST);*/

if(isset($_POST['submit']) && !empty($_POST['email']) && !empty($_POST ['senha']))
{
    include_once('confg.php');
    $email= $_POST['email'];
    $senha= $_POST['senha'];

    //print_r('Email:'. $email);
    //print_r('<br>');
    //print_r('Senha:'. $senha);

    $sql = "SELECT * FROM usuario WHERE email = '$email' AND senha = '$senha'";
    $result = $conexao -> query($sql);
    print_r($result);
    //print_r($sql);

    
    if(mysqli_num_rows($result)< 1)
    {

    //não acessa!
    unset($_SESSION['email']);
    unset($_SESSION['senha']);
    header('Location: tela-login.php');
    }

    else{
        //acessa!
        $_SESSION['email']= $email;
        $_SESSION['senha']= $senha;
        header('Location: sistema.php');
    }
}

else
{
    header('Location: tela-login.php');
}

?>
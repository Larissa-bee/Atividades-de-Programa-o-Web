<?php
    if (isset($_POST["submit"]))
    {
        /* É PARA TESTAR SE AS INFORMAÇÕES ESTÃOS ENDO ENVIADAS
        
        print_r("Nome Completo:" .$_POST['nome']);
        print_r('<br>');

        print_r("Email:" .$_POST['email']);
        print_r('<br>');

        print_r("Telefone:" .$_POST['telefone']);
        print_r('<br>');

        print_r("Sexo:" .$_POST['genero']);
        print_r('<br>');

        print_r("Data de Nascimento:" .$_POST['data_nascimento']);
        print_r('<br>');

        print_r("Cidade:" .$_POST['cidade']);
        print_r('<br>');

        print_r("Estado:" .$_POST['estado']);
        print_r('<br>');

        print_r("Endereço:" .$_POST['endereço']);
        print_r('<br>'); */

        include_once('confg.php');

        $nome= $_POST['nome'];
        $email= $_POST['email'];
        $senha= $_POST['senha'];
        $telefone= $_POST['telefone'];
        $sexo= $_POST['genero'];
        $data= $_POST['data_nascimento'];
        $cidade= $_POST['cidade'];
        $estado= $_POST['estado'];
        $endereço= $_POST['endereço'];

        $result= mysqli_query($conexao, "INSERT INTO usuario (NOME, EMAIL, SENHA, 
        TELEFONE, SEXO, DATA_NASCIMENTO, CIDADE, ESTADO, ENDERECO) VALUES ('$nome', '$email', $senha,
        '$telefone', '$sexo', '$data', '$cidade', '$estado', '$endereço')");


    }


?>




<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tela de Cadastro</title>
    <link rel="stylesheet" href="CSS/css_externo.css">
</head>
<body>
    
    <div class="box">
        <form action="tela-cadastro.php" method="POST">
            <fieldset>
                <legend>Cadastro de Clientes</legend>
                <br>
                <div class="inputBox">
                    <label for="nome" class="labelInput">
                    Nome Completo:</label>
                    <br>
                    <input type="text" name="nome" 
                    id="nome" class="inputUser" required>
                    </div>
                    <br> <br>

            
                    <div class="inputBox">
                        <label for="email" class="labelInput">
                        Email:</label>
                        <br>
                        <input type="email" name="email" 
                        id="email" class="inputUser" required>
                    <br> <br> 
                    </div>
                    
                    <div class="inputBox">
                        <label for="senha" class="labelInput">
                        Senha:</label>
                        <br>
                        <input type="password" name="senha" 
                        id="senha" class="inputUser" required>
                    </div>
                    <br><br>

                    <div class="inputbox">
                        <label for="telefone" class="labelinput">
                        Telefone:</label>
                        <br>
                        <input type="tel" name="telefone" 
                        id="telefone" class="inputUser" required>
                        
                    </div>
                    <br> <br>

                    <p>Sexo</p>

                    <input type="radio" name="genero" id="feminino" value="feminino" required>
                    <label for="feminino">Feminino</label>
                    <br>
                    <input type="radio" name="genero" id="masculino" value="masculino" required>
                    <label for="masculino">Masculino</label>
                
                    <br> <br>

                    <label for="data_nascimento">Data de Nascimento:</label>
                    <br>
                    <input type="date" name="data_nascimento" id="data_nascimento" required>
                    <br> <br>

                    <div class="inputBox">
                        <label for="cidade" class="labelInput">
                        Cidade:</label>
                        <br>
                        <input type="text" name="cidade" 
                        id="cidade" class="inputUser" required>
                        </div>
                        <br> <br>

                        <div class="inputBox">
                            <label for="estado" class="labelInput">
                            Estado:</label>
                            <br>
                            <input type="text" name="estado" 
                            id="estado" class="inputUser" required>
                            </div>
                            <br> <br>

                            <div class="inputBox">
                                <label for="endereço" class="labelInput">
                                Endereço:</label>
                                <br>
                                <input type="text" name="endereço" 
                                id="endereço" class="inputUser" required>
                                </div> 
                                <br> <br>

                                <input type="submit" name="submit" id="submit">

                        
            </fieldset>
        </form>
    </div>

</body>
</html>

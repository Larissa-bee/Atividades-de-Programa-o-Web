<?php
    if(!empty($_GET['id']))
    {
        include_once('confg.php');
        $id = $_GET['id'];

        $sqlSelect= "SELECT * FROM usuario WHERE ID= $id";

        $result= $conexao ->query($sqlSelect);

        //print_r($result);

        if($result->num_rows>0)
        {
            while ($user_data= mysqli_fetch_assoc($result))
            {
                $nome= $user_data['NOME'];
                $email= $user_data['EMAIL'];
                $senha= $user_data['SENHA'];
                $telefone= $user_data['TELEFONE'];
                $sexo= $user_data['SEXO'];
                $data= $user_data['DATA_NASCIMENTO'];
                $cidade= $user_data['CIDADE'];
                $estado= $user_data['ESTADO'];
                $endereço= $user_data['ENDERECO'];

            }
            print_r($nome);
        }
        else{
            header('Locaion:sistema.php');
        }

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

    <a href="sistema.php">Voltar</a>
    
    <div class="box">
        <form action="salvar.php" method="POST">
            <fieldset>
                <legend>Editar Cadastro</legend>
                <br>
                <div class="inputBox">
                    <label for="nome" class="labelInput">
                    Nome Completo:</label>
                    <br>
                    <input type="text" name="nome" 
                    id="nome" class="inputUser" required value="<?php echo $nome?>">
                    </div>
                    <br> <br>

            
                    <div class="inputBox">
                        <label for="email" class="labelInput">
                        Email:</label>
                        <br>
                        <input type="email" name="email" 
                        id="email" class="inputUser" required value="<?php echo $email?>">
                    <br> <br> 
                    </div>
                    
                    <div class="inputBox">
                        <label for="senha" class="labelInput">
                        Senha:</label>
                        <br>
                        <input type="text" name="senha" 
                        id="senha" class="inputUser" required value="<?php echo $senha?>">
                    </div>
                    <br><br>

                    <div class="inputbox">
                        <label for="telefone" class="labelinput">
                        Telefone:</label>
                        <br>
                        <input type="tel" name="telefone" 
                        id="telefone" class="inputUser" required value="<?php echo $telefone?>">
                        
                    </div>
                    <br> <br>

                    <p>Sexo</p>

                    <input type="radio" name="genero" id="feminino" value="feminino" required
                    <?php echo $sexo == 'feminino' ? 'checked': ''?>>
                    <label for="feminino">Feminino</label>



                    <br>
                    <input type="radio" name="genero" id="masculino" value="masculino" require
                    <?php echo $sexo == 'masculino' ? 'checked': ''?>>
                    <label for="masculino">Masculino</label>
                
                    <br> <br>

                    <label for="data_nascimento">Data de Nascimento:</label>
                    <br>
                    <input type="date" name="data_nascimento" id="data_nascimento" required value="<?php echo $data?>">
                    <br> <br>

                    <div class="inputBox">
                        <label for="cidade" class="labelInput">
                        Cidade:</label>
                        <br>
                        <input type="text" name="cidade" 
                        id="cidade" class="inputUser" required value="<?php echo $cidade?>">
                        </div>
                        <br> <br>

                        <div class="inputBox">
                            <label for="estado" class="labelInput">
                            Estado:</label>
                            <br>
                            <input type="text" name="estado" 
                            id="estado" class="inputUser" required value="<?php echo $estado?>">
                            </div>
                            <br> <br>

                            <div class="inputBox">
                                <label for="endereço" class="labelInput">
                                Endereço:</label>
                                <br>
                                <input type="text" name="endereço" 
                                id="endereço" class="inputUser" required value="<?php echo $endereço?>">
                                </div> 

                                <br> <br>

                                <input type="hidden" name="id" value="<?php echo $id ?>">



                                <input type="submit" name="update" id="update">

                        
            </fieldset>
        </form>
    </div>

</body>
</html>

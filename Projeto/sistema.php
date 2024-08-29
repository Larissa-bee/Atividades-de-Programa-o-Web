<?php

session_start();

include_once('confg.php');

//print_r($_SESSION);

if((!isset($_SESSION['email'])==true) and (!isset($_SESSION['senha'])==true))
{
    header('Location: tela-login.htnml');
}

$logado= $_SESSION['email'];

// Para realizar busca
if(!empty($_GET['search'])){

  // echo "contém algo para pesquisar";
  $data= $_GET['search'];
  // echo $data;
  $sql="SELECT * FROM usuario WHERE ID LIKE '%$data%' OR NOME LIKE 
  '%$data%' OR EMAIL LIKE '%$data%' ORDER BY ID DESC";
}
else{

  // echo "não contém";
  $sql= "SELECT * FROM usuario ORDER BY ID DESC";

}




// Para Listagem

$result=$conexao->query($sql);

//print_r($result);




?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" 
    content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" 
    rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" 
    crossorigin="anonymous">
    <link rel="stylesheet" href="CSS/css_externo.css">



    <title>Sistema</title>
</head>
<body>


    <nav class="navbar bg-dark border-bottom border-body" data-bs-theme="dark">
    
         SISTEMA 
        <div class="d-flex">
            <a href="sair.php" class="btn btn-danger me-5"
        style="background-color: rgb(99, 94, 89);">SAIR</a>
        </div>
    
      </nav>

      <?php
        echo"<h1> Bem Vindo(a)! <u>$logado<u> </h1>";
      ?>

      <div class="m-5">

     
  <div class="container-fluid">
      <input class="form-control me-2" type="search" placeholder="Pesquisar" 
      id="pesquisar">
      <button onclick="searchData()" class="btn btn-dark" type="submit">

      <svg xmlns='http://www.w3.org/2000/svg' width='16' 
      height='16' fill='currentColor' class='bi bi-search' 
      viewBox='0 0 16 16'>
      <path d='M11.742 10.344a6.5 6.5 0 1 0-1.397 
      1.398h-.001q.044.06.098.115l3.85 3.85a1 1 0 0 0 
      1.415-1.414l-3.85-3.85a1 1 0 0 0-.115-.1zM12 
      6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0'/></svg>

      </button>
  </div>




      <table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Nome</th>
      <th scope="col">Email</th>
      <th scope="col">Senha</th>
      <th scope="col">Telefone</th>
      <th scope="col">Sexo</th>
      <th scope="col">Data de Nascimento</th>
      <th scope="col">Cidade</th>
      <th scope="col">Estado</th>
      <th scope="col">Endereço</th>
      <th scope="col">...</th>
    </tr>
  </thead>
  <tbody>
    <?php
        while ($user_data= mysqli_fetch_assoc($result))
        {
            echo"<tr>";
            echo"<td>" .$user_data['ID']."</td>"; 
            echo"<td>" .$user_data['NOME']."</td>";
            echo"<td>" .$user_data['EMAIL']."</td>";
            echo"<td>" .$user_data['SENHA']."</td>";
            echo"<td>" .$user_data['TELEFONE']."</td>";
            echo"<td>" .$user_data['SEXO']."</td>";
            echo"<td>" .$user_data['DATA_NASCIMENTO']."</td>";
            echo"<td>" .$user_data['CIDADE']."</td>";
            echo"<td>" .$user_data['ESTADO']."</td>";
            echo"<td>" .$user_data['ENDERECO']."</td>";
            echo"<td> 
            <a class= 'btn btn-dark btn-sm' href='editar.php? id=$user_data[ID]'>
              <svg xmlns='http://www.w3.org/2000/svg' width='16' height='16'
              fill='currentColor' class='bi bi-pencil-square' 
              viewBox='0 0 16 16'>
              <path d='M15.502 1.94a.5.5 0 0 1 0 .706L14.459 
              3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 
              1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 
              .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z'/>
              <path fill-rule='evenodd' d='M1 13.5A1.5 1.5 0 0 0 2.5 
              15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 
              1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 
              0-1H2.5A1.5 1.5 0 0 0 1 2.5z'/>
              </svg>
            </a>


            <a class= 'btn btn-sm btn-dark' href='deletar.php? id=$user_data[ID]'>
              <svg xmlns='http://www.w3.org/2000/svg' width='16' height='16'
              fill='currentColor' class='bi bi-trash-fill' viewBox='0 0 16 16'>
              <path d='M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2
              2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1
              1 0 0 0-1 1zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5M8
              5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5m3 .5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 1 0'/>
              </svg>
            </a>
            
            </td>";
            
            


        }

    ?>
  </tbody>
</table>

      </div>

    
</body>

<script>
    var search = document;getElementById('pesquisar');

    function searchData()
    {
      window.location = 'sistema.php?search='+search.value;
    }

</script>

</html>


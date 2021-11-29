<?php

include('conexaokabum.php');

try{
    $sql = "insert into tblfuncionarios (funcionario,telefone,email,ch,salario)
            values (:funcionario,:telefone,:email,:ch,:salario)";

    $stmt = $connect->prepare($sql);

    $stmt->bindValue(":funcionario",$_POST["funcionario"]);
    $stmt->bindValue(":telefone",$_POST["telefone"]);
    $stmt->bindValue(":email",$_POST["email"]);
    $stmt->bindValue(":ch",$_POST["ch"]);
    $stmt->bindValue(":salario",$_POST["salario"]);
    $stmt->execute();
    header('Location: listarfuncionarios.php');
}

catch(PDOException $e){
    echo "Não encontrado: ".$e->getMessage();
}

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Funcionários</title>
</head>
<body>
    
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">

  <div class="container-fluid">
    <a class="navbar-brand" href="#">KaBuM</a>
    
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">

        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.php">Início</a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="produtos.php">Produtos</a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="vendas.php">Vendas</a>
        </li>
        
        <li class="nav-item">
          <a class="nav-link disabled">Disabled</a>
        </li>

      </ul>

      <form class="d-flex">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-light" type="submit">Pesquisar</button>

      </form>
    </div>
  </div>
</nav>

<br><hr><br>

<div class="container">
    <h1>Cadastro de funcionários</h1>
</div>

<br>

<div>    
    <form method="POST">

        <div class="container">
        <div class="row">               
            <div class="col">
                <div class="mb-3">

                    <label for="exampleInputFuncionario1" class="form-label">Funcionário</label>

                    <input type="text" name="funcionario" class="form-control" id="exampleInputFuncionario1" aria-describedby="emailHelp">
                </div>
            </div>

            <div class="col">
                <div class="mb-3">
                    <label for="exampleInputTelefone1" class="form-label">Telefone</label>

                    <input type="text" name="telefone" class="form-control" id="exampleInputTelefone1">
                </div>
            </div>

            <div class="col">
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Email</label>

                    <input type="email" name="email" class="form-control" id="exampleInputEmail1">
                </div>
            </div>

            <div class="col">
                <div class="mb-3">
                    <label for="exampleInputCargahoraria1" class="form-label">Carga horária</label>

                    <input type="text" name="ch" class="form-control" id="exampleInputCargahoraria1">
                </div>
            </div>

            <div class="col">
                <div class="mb-3">
                    <label for="exampleInputSalario1" class="form-label">Salário</label>

                    <input type="text" name="salario" class="form-control" id="exampleInputSalario1">
                </div>
            </div>

            <button type="submit" class="btn btn-dark">Enviar</button>

    </form>
    </div>
</div>


    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
</body>
</html>
<?php

include('conexaokabum.php');

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Formulário de Funcionários</title>
</head>
<body>
    
<a href="formclientes.php"><h1>Formulário de Funcionários</h1></a>
        <hr><br>

        <div class="container">

        <!-- Inicio da tabela -->

        <table class="table">

        <thead>

        <tr>
        <th scope="col">#</th>
        <th scope="col">Foto</th>
        <th scope="col">Funcionário</th>
        <th scope="col">Telefone</th>
        <th scope="col">Email</th>
        <th scope="col">Carga horária</th>
        <th scope="col">Salário</th>
        <th scope="col">Ações</th>

    </tr>
    </thead>
    <tbody>

    <?php

$sql = "select * from tblfuncionarios";

$resultado = $connect->query($sql);

while($linha = $resultado->fetch(PDO::FETCH_ASSOC)){

    echo "<tr>";

        echo "<th>".$linha['idfuncionario']."</th>";
        echo "<th><img src='".$linha['foto']."' width='50px' height='65px'></th>";
        echo "<td>".$linha['funcionario']."</td>";
        echo "<td>".$linha['telefone']."</td>";
        echo "<td>".$linha['email']."</td>";
        echo "<td>".$linha['ch']."</td>";
        echo "<td>".$linha['salario']."</td>";
        echo "<td>
            <button class='btn btn-primary btn-sm'> Editar</button> 
            <button class='btn btn-danger btn-sm'>Excluir</button> 
            </td>";

    echo "</tr>";
}

?>

    </tbody>
    </table>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
</body>
</html>
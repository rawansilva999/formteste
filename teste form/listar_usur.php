<?php

include("./conexao.php");

$consulta = "SELECT NOME_COMP, IDADE, PROFISSAO FROM teste_form.tb_pessoa";
$result = $conn->query($consulta);

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./estilo.css">
    <title>Document</title>
</head>
<body>

    <?php
        if ($result->num_rows > 0) 
        {
         echo"<table>";
         echo"<tr>";
         echo"<th>Nome</th>";
         echo"<th>Idade</th>";
         echo"<th>Profissão</th>";
         echo"<th>Alterar</th>";
         echo"<th>Deletar</th>";
         echo"</tr>";
            
            
            while($row = $result->fetch_assoc()) 
            {
            echo"<tr>";
            echo"<td>".$row ["NOME_COMP"]. "</td>";
            echo"<td>".$row ["IDADE"]. "</td>";
            echo"<td>".$row ["PROFISSAO"]. "</td>";
            echo"<td> <button>Alterar </button>". "</td>";
            echo"<td> <button>Deletar</button>". "</td>";
            echo"</tr>";

            }
            echo"</table>";
        }   
    ?>
</body>
</html>
<?php

include("./conexao.php");

$nome_comp = $_POST["nome_comp"];
$idade = $_POST["idade"];
$profissao = $_POST["profissao"];

echo $nome_comp,'<br>';
echo $idade,'<br>';
echo $profissao,'<br>';

$sql = "INSERT INTO teste_form.tb_pessoa (NOME_COMP, IDADE, PROFISSAO)
VALUES ('$nome_comp', '$idade', '$profissao')";

if ($conn->query($sql) === TRUE) {
    echo "Registro salvo com sucesso<br>";
} else {
    echo "Error: ". $sql . "<br>" . $conn->error;
}

?>
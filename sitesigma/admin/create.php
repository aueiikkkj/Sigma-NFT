<?php
require '../includes/_banco.php';

$nome = $_POST['nome'];
$descricao = $_POST['descricao'];
$imagem = $_POST['imagem'];
$preco = $_POST['preco'];

$sql = "INSERT INTO produtos VALUES '{$nome}', '{$descricao}', '{$imagem}', '{$preco}', '1'";
if(mysqli_query($conn, $sql)){
    header('Location: admin.php');
}else{
    echo 'error' . mysqli_error($conn);
}


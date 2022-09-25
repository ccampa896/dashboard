<?php

include 'conexao/conexao.php';

$mes = $_POST['mes'];
$quantidade = $_POST['quantidade'];
$valor = $_POST['valor'];

echo $sql = "INSERT INTO vendas (mes_venda,quantidade_venda, valor_venda) VALUES ('$mes',$quantidade,$valor)";

$inserir = mysqli_query($conexao,$sql);


header('Location: dashboard.php?pagina=vendas')
?>
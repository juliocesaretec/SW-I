<?php
    include_once 'Produto.class.php';

    $produto = new Produto("Camiseta", "R$120.00", 12);

$produto->adicionarEstoque(4);
$produto->removerEstoque(1);
$produto->mostrarDetalhes();


?>
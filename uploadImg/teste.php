<?php

require 'classes/Produto.class.php';
$teste = $produto = new Produto();

if($teste){
    echo "O produto foi criado com sucesso!";
} else {
    echo "O produto não foi criado!";
}
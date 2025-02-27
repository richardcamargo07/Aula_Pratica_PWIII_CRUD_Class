<link rel="stylesheet" href="">
<?php
require 'Contato.class.php';

$conecta = $contato = new Contato();

if( !$conecta ){
    echo "<h1>Erro ao conectar ao banco de dados</h1>";
    //exit;
}else{
    //$usuario = $contato->insertUser("Fabio Claret", "fabio.claret@gmail.com", "123456");
    $usuario = $contato->chkUser("fabio.claret@gmail.com");
    if($usuario){
        echo "<h1>Usuario encontrado</h1>";
    }else{
        echo "<h1>Usuario nao existe na tabela!</h1>";
    }
}

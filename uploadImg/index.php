<?php
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Envio de Imagens</title>
</head>
<body>
    <section>
        <a href="produtos.php">Ver Todos os Produtos</a>
        <form action="" method="post">
            <h1>ENVIO DE IMAGENS</h1>
            <label for="nome">Nome do0 Produto</label>
            <input type="text" name="nome">
            <label for="descr">Descrição</label>
            <textarea name="descr" id=""></textarea>
            <input type="file" name="foto[]" id="">
            
            <input type="submit" value="Enviar">
        </form>
    </section>
</body>
</html>
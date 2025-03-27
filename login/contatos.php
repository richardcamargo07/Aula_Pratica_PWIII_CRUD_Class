<?php
include 'Contato.class.php';

$contato = new Contato();

?>
<!DOCTYPE html>
<head>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
<div class="container mt-5">
    <h2>Lista de Contatos</h2>
    <table class="table table-striped">
    <tr>
        <th>ID</th>
        <th>Nome</th>
        <th>Email</th>
        <th>Ações</th>
    </tr>
    <?php
    $lista = $contato->getAll();

    foreach ($lista as $contatos) {
    ?>
        <tr class="table-primary">
            <td><?php echo $contatos['id']; ?></td>
            <td><?php echo $contatos['nome']; ?></td>
            <td><?php echo $contatos['email']; ?></td>
            <td>
                <a class="btn btn-warning btn-sm" href="editar.php?id=<?php echo $contatos['email']; ?>">Editar</a>
                <a class="btn btn-danger btn-sm" href="excluir.php?id=<?php echo $contatos['id']; ?>">Excluir</a>

            </td>
        </tr>
    <?php
    }
    ?>
    </table>
</div>
</body>

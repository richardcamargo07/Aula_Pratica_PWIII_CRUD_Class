<?php
include 'Contato.class.php';

$contato = new Contato();

?>
<table>
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Email</th>
        <th>Ações</th>
    </tr>
    <?php
    $lista = $contato->getAll();

    foreach ($lista as $contatos) {
    ?>
        <tr>
            <td><?php echo $contatos['id']; ?></td>
            <td><?php echo $contatos['nome']; ?></td>
            <td><?php echo $contatos['email']; ?></td>
            <td>
                <a href="editar.php?id=<?php echo $contatos['id']; ?>">Editar</a>
                <a href="excluir.php?id=<?php echo $contatos['id']; ?>">Excluir</a>

            </td>
        </tr>
    <?php
    }

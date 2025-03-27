<<<<<<< HEAD
<?php
session_start();

if (isset($_SESSION['nome'])) {
    echo "Ola " . $_SESSION['nome'];
} else {
    echo "Você não está logado";
}
echo "<br><a href='pagina1.php'>Voltar para a pagina anterior</a>";

echo "<br><a href='sair.php'>Sair</a>";
=======
<?php
session_start();

if (isset($_SESSION['nome'])) {
    echo "Ola " . $_SESSION['nome'];
} else {
    echo "Você não está logado";
}
echo "<br><a href='pagina1.php'>Voltar para a pagina anterior</a>";

echo "<br><a href='sair.php'>Sair</a>";
>>>>>>> 50308180b32b4ae81450ceefcf289e8995dec699

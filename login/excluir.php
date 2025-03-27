<<<<<<< HEAD
<?php 
include "Contato.class.php";

$contato = new Contato();

if( !empty ( $_GET['id'] ) ){
    $id = $_GET['id'];
    $del = $contato->deletar($id);

   /* if($del){
        echo "Contato excluído com sucesso!";
        }else{
        echo "Erro ao excluir contato!";
    }
    */
    header("location:contatos.php");
}
=======
<?php 
include "Contato.class.php";

$contato = new Contato();

if( !empty ( $_GET['id'] ) ){
    $id = $_GET['id'];
    $del = $contato->deletar($id);

   /* if($del){
        echo "Contato excluído com sucesso!";
        }else{
        echo "Erro ao excluir contato!";
    }
    */
    header("location:contatos.php");
}
>>>>>>> 50308180b32b4ae81450ceefcf289e8995dec699
?>
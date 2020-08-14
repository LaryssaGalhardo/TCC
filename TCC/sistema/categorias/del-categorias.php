<?php
include('../../conexao/conexao.php');

$sql = "DELETE FROM categorias WHERE id_categoria = ".$_REQUEST['id']."";

if(mysqli_query($conecta, $sql)){
      header('Location: add-categorias.php');
}else{
    echo mysqli_error($conecta);
}
?>
<?php
include('../../conexao/conexao.php');

$sql = "DELETE FROM clientes WHERE id_cliente = ".$_REQUEST['id']."";

if(mysqli_query($conecta, $sql)){
      header('Location: add-usuario.php');
}else{
    echo mysqli_error($conecta);
}
?>
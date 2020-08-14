<?php
include('../../conexao/conexao.php');

$sql = "DELETE FROM produtos WHERE id_produto = ".$_REQUEST['id']."";

if(mysqli_query($conecta, $sql)){
      header('Location: add-produto.php');
}else{
    echo mysqli_error($conecta);
}
?>
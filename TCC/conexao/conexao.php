<?php
ini_set('display_erros', true);
error_reporting(E_ALL);

$usuario= "root";
$senha= "usbw";
$host= "localhost";
$banco= "bd_tcc";


if($conecta = mysqli_connect($host, $usuario, $senha, $banco)){
    //echo "Conectado ao banco de dados.";
}else{
    echo "Deu merdaaaaa".mysqli_connect_error();
}
?>


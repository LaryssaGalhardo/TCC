<?php
 include('conexao/conexao.php');
 
 $sql = mysqli_query($conecta, "SELECT * FROM categorias");

 while($resultado = mysqli_fetch_array($sql)){

   echo '<li class="nav-item">
   <a class="nav-link text-white" href="sistema/'.strtolower($resultado['nome']).'.html">'.strtoupper($resultado['nome']).'</a>
   </li>';
 }
 ?>


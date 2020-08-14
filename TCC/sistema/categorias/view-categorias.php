<?php
 include('../../conexao/conexao.php');
 
 $sql = mysqli_query($conecta, "SELECT * FROM categorias WHERE id_categoria = ".$_REQUEST['id']."");

 while($resultado = mysqli_fetch_array($sql)){


 ?>
 
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>VERDURAS SANTA LUZIA</title>
    <link rel="stylesheet" href="../../css/bootstrap.css">
    <script src="/js/jquery-3.4.1.js"></script>
    <script src="/js/bootstrap.js"></script>
</head>

<body>

<div class="container">
        <div class="row">
            <div class="col-12">
                <h1 class="text-center text-success"  style="margin-top: 25px; font-family: cursive"> Visualizar Categoria</h1>
            </div>
        </div>
        <div class="row">
            <div class="offset-md-2 col-md-8 col-12">
                <form action="" method="POST">
                    <div class="form-group">
                        <label>Nome</label>
                        <input type="text" name="nome" class="form-control" value="<?php echo $resultado['nome']?>" readonly>
                    </div>
                    <div class="form-group row">
                        <div class="form-group col-md-6">
                            <a class="btn btn-outline-success" href= "add-categorias.php" role="button">Voltar</a>
                        </div>
                    </div>
    </div>

     <?php
      }
     ?>

</body>
</html>
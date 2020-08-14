<?php
 include('../../conexao/conexao.php');
 
 $sql = mysqli_query($conecta, "SELECT * FROM clientes WHERE id_cliente = ".$_REQUEST['id']."");

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
                <h1 class="text-center text-success"  style="margin-top: 25px; font-family: cursive"> Visualizar Cliente</h1>
            </div>
        </div>
        <div class="row">
            <div class="offset-md-2 col-md-8 col-12">
                <form action="" method="POST">
                    <div class="form-group">
                        <label>Nome</label>
                        <input type="text" name="nome" class="form-control" value="<?php echo $resultado['nome']?>" readonly>
                    </div>
                    <div class="form-group">
                        <label>Email</label>
                        <input type="text" name="email" class="form-control" value="<?php echo $resultado['email']?>" readonly>
                    </div>
                    <div class="form-row">
                    <div class="form-group col-md-6">
                        <label>CPF</label>
                        <input type="number" name="cpf" class="form-control" value="<?php echo $resultado['cpf']?>" readonly>
                    </div>
                    <div class="form-group col-md-6">
                        <label>Telefone</label>
                        <input type="number" name="telefone" class="form-control" value="<?php echo $resultado['telefone']?>" readonly>
                    </div>
                    </div>
                    <div class="form-row">
                    <div class="form-group col-md-8">
                        <label for="inputAddress">Endereço</label>
                        <input type="text" name="endereco" class="form-control" value="<?php echo $resultado['endereco']?>" readonly>
                    </div>
                    <div class="form-group col-md-4">
                        <label for="inputComplement">Complemento</label>
                        <input type="text" name="complemento" class="form-control" value="<?php echo $resultado['complemento']?>" readonly>
                    </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-8">
                            <label for="inputCity">Cidade</label>
                            <input type="text" name="cidade" class="form-control" value="<?php echo $resultado['cidade']?>" readonly>
                        </div>
                        <div class="form-group col-md-4">
                            <label for="inputCEP">CEP</label>
                            <input type="number" name="cep" class="form-control" value="<?php echo $resultado['cep']?>" readonly>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="form-group col-md-6">
                            <a class="btn btn-outline-success" href= "add-usuario.php" role="button">Voltar</a>
                        </div>
                    </div>
    </div>

     <?php
      }
     ?>

</body>
</html>
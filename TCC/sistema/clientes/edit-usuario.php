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
                <h1 class="text-center text-success"  style="margin-top: 25px; font-family: cursive">Editar Cliente</h1>
            </div>
        </div>
        <div class="row">
            <div class="offset-md-2 col-md-8 col-12">
                <form action="" method="POST">
                    <div class="form-group">
                        <label>Nome</label>
                        <input type="text" name="nome" id="" class="form-control" value="<?php echo $resultado['nome']?>">
                    </div>
                    <div class="form-group">
                        <label>Email</label>
                        <input type="text" name="email" class="form-control" value="<?php echo $resultado['email']?>">
                    </div>
                    <div class="form-row">
                    <div class="form-group col-md-6">
                        <label>CPF</label>
                        <input type="number" name="cpf" class="form-control" value="<?php echo $resultado['cpf']?>">
                    </div>
                    <div class="form-group col-md-6">
                        <label>Telefone</label>
                        <input type="number" name="telefone" class="form-control" value="<?php echo $resultado['telefone']?>">
                    </div>
                    </div>
                    <div class="form-row">
                    <div class="form-group col-md-8">
                        <label for="inputAddress">Endereço</label>
                        <input type="text" name="endereco" class="form-control" value="<?php echo $resultado['endereco']?>">
                    </div>
                        <div class="form-group col-md-4">
                            <label for="inputComplement">Complemento</label>
                            <input type="text" name="complemento" class="form-control" value="<?php echo $resultado['complemento']?>">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-8">
                            <label for="inputCity">Cidade</label>
                            <input type="text" name="cidade" class="form-control" value="<?php echo $resultado['cidade']?>">
                        </div>
                        <div class="form-group col-md-4">
                            <label for="inputCEP">CEP</label>
                            <input type="number" name="cep" class="form-control" value="<?php echo $resultado['cep']?>">
                        </div>
                    </div>
                    <div class="form-group row">
                    <input type= "hidden" name="id" values="<?php echo $resultado['id_cliente']?>">
                    <div class="offset-md-9 col-md-3 col-12">
                    <input type= "hidden" name= "id" value="<?php echo $resultado['id_cliente'] ?>">
                    <button type="submit" class="btn btn-outline-success btn-block">Salvar</button>
                    </div>
                    </div>
                </form>
            </div>
        </div>
    </div>


    <!-- Início do script PHP -->
    <?php
            if(isset($_POST['nome'])){
                
                include('../../conexao/conexao.php'); 
                
                
                $sql = "UPDATE clientes SET  nome = '".$_POST['nome']."', email = '".$_POST['email']."', cpf = '".$_POST['cpf']."',
                        telefone = '".$_POST['telefone']."', endereco = '".$_POST['endereco']."', 
                        complemento = '".$_POST['complemento']."', cidade = '".$_POST['cidade']."', cep = '".$_POST['cep']."' WHERE id_cliente = ".$_POST['id'];

                
                if(mysqli_query($conecta, $sql)){
                    header('Location: add-usuario.php');
                }else{
                    echo '
                    <div class="row mt-3 mb-3">
                        <div class="offset-md-2 col-md-8 col-12">
                            <div class="alert alert-warning alert-dismissible fade show" role="alert">
                                <strong>Erro: '.mysqli_error($conecta).'</strong>
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                        </div>
                    </div>
                    ';
                }

            }
        ?>

<?php 
 }
 ?>

</body>
</html>
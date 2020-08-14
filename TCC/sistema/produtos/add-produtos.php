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
                <h1 class="text-center text-success" style="margin-top: 25px; font-family: cursive">Cadastrar-se</h1>
            </div>
        </div>
        <div class="row">
            <div class="offset-md-2 col-md-8 col-12">
                <form action="../../sistema/produtos/add-produtos.php" method="POST">
                    <div class="form-group">
                        <label>Nome</label>
                        <input type="text" name="nome" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Descrição</label>
                        <input type="text" name="descricao" class="form-control">
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-4">
                            <label>Estoque</label>
                            <input type="number" name="estoque" class="form-control">
                        </div>
                        <div class="form-group col-md-4">
                            <label>Estoque Minimo</label>
                            <input type="number" name="estoque_min" class="form-control">
                        </div>
                        <div class="form-group col-md-4">
                            <label>Valor</label>
                            <input type="number" name="valor" class="form-control">
                        </div>
                    </div>

                    <div class="form-group row">
                    <div class="offset-md-10 col-md-3 col-12">
                        <!--<a class="btn btn-success" href="../../sistema/produtos/add-produtos.php"  type="submit" value="Submit">Cadastrar</a>-->
                        <input class="btn btn-success"  type="submit" value = "Cadastrar" />
                    </div>
                    </div>
                </form>
            </div>
        </div>

        <?php
            if(isset($_POST['nome'])){
                
                include('../../conexao/conexao.php'); 

                $sql = "INSERT INTO produtos (nome, descricao, estoque, estoque_min, valor)
                VALUES ('$_POST[nome]', '$_POST[descricao]', '$_POST[estoque]', '$_POST[estoque_min]', '$_POST[valor]')";

                
                if(mysqli_query($conecta, $sql)){
                    echo '
                    <div class="row mt-3 mb-3">
                        <div class="offset-md-2 col-md-8 col-12">
                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                <strong>Cadastro efetuado com sucesso!</strong>
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                        </div>
                    </div>
                    ';
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

        <div class="row mt-5 border-top">
            <div class="col-12 mt-3">
                <table class="table table-success">
                    <thead>
                        <tr>
                            <th width="10%" class="text-center">Código</th>
                            <th width="40%" class="text-center">Nome</th>
                            <th width="30%" class="text-center">Ações</th>
                        </tr>
                    </thead>
                    <tbody>

                    <?php
                      include('../../conexao/conexao.php');
                      
                      $sqlConsulta = mysqli_query($conecta, "SELECT * FROM produtos");
                      
                      if($sqlConsulta && mysqli_num_rows($sqlConsulta) > 0){
                            while($resultado = mysqli_fetch_array($sqlConsulta)){
                                echo '
                                <tr class="text-center">
                                    <td class="text-center">'.$resultado['id_produto'].'</td>
                                    <td>'.$resultado['nome'].'</td>
                                    <td>
                                    <a href= "view-produtos.php?id='.$resultado['id_produto'].'"class="btn btn-success btn-sm">Visualizar</a>
                                    <a href= "edit-produtos.php?id='.$resultado['id_produto'].'"class="btn btn-success btn-sm">Editar</a>
                                    <a href= "del-produtos.php?id='.$resultado['id_produto'].'"class="btn btn-success btn-sm">Deletar</a>
                                    </td>
                                </tr>';
                            }
                        }else{
                            echo '
                                <div class="row mt-3 mb-3">
                                    <div class="offset-md-2 col-md-8 col-12">
                                        <div class="alert alert-warning alert-dismissible fade show" role="alert">
                                            <strong>Não foi possível encontrar produto. </strong>
                                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                                ';
                        }
                    ?>


                    </tbody>
                </table>
            </div>
        </div>

    </div>

        <div class="row mt-5 bg-success text-white">
            <div class="col-12 text-end mt-3 mb-3 text-center">
                <span style="font-weight: bold">Redes Sociais</span>
            <br>
                <span>
                    <p><img src="../../img/facebook.png" width="25" height="25">Facebook
                    <img src="../../img/instagram.png" width="25" height="25">Instagram
                    <img src="../../img/whatsapp.png" width="25" height="25">WhatsApp
                </span>
            </div>
        </div>
</body>
</html>

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
                <h1 class="text-center text-success" style="margin-top: 25px; font-family: cursive">Cadastrar Categorias</h1>
            </div>
        </div>
        <div class="row">
            <div class="offset-md-2 col-md-8 col-12">
                <form action="../../sistema/categorias/add-categorias.php" method="POST">
                    <div class="form-group">
                        <label>Nome</label>
                        <input type="text" name="nome" class="form-control">
                    </div>
                    <div class="form-group row">
                        <div class="offset-md-9 col-md-3 col-12">
                            <!--<a class="btn btn-success" href="../../sistema/categorias/add-categorias.php"  type="submit" value="Submit">Cadastrar</a>-->
                            <input class="btn btn-success"  type="submit" value = "Cadastrar" />
                        </div>
                    </div>
                </form>
            </div>
        </div>

        <?php
            if(isset($_POST['nome'])){
                
                include('../../conexao/conexao.php'); 

                $sql = "INSERT INTO categorias (nome) VALUES ('$_POST[nome]')";

                
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
                      
                      $sqlConsulta = mysqli_query($conecta, "SELECT * FROM categorias");
                      
                      if($sqlConsulta && mysqli_num_rows($sqlConsulta) > 0){
                            while($resultado = mysqli_fetch_array($sqlConsulta)){
                                echo '
                                <tr class="text-center">
                                    <td class="text-center">'.$resultado['id_categoria'].'</td>
                                    <td>'.$resultado['nome'].'</td>
                                    <td>
                                    <a href= "view-categorias.php?id='.$resultado['id_categoria'].'"class="btn btn-success btn-sm">Visualizar</a>
                                    <a href= "edit-categorias.php?id='.$resultado['id_categoria'].'"class="btn btn-success btn-sm">Editar</a>
                                    <a href= "del-categorias.php?id='.$resultado['id_categoria'].'"class="btn btn-success btn-sm">Deletar</a>
                                    </td>
                                </tr>';
                            }
                        }else{
                            echo '
                                <div class="row mt-3 mb-3">
                                    <div class="offset-md-2 col-md-8 col-12">
                                        <div class="alert alert-warning alert-dismissible fade show" role="alert">
                                            <strong>Não foi possível encontrar cliente. </strong>
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
</body>
</html>
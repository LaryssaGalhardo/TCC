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

    <nav class="navbar navbar-expand-lg navbar-dark">
        <img src="../../img/logo_tcc.png" alt="Tcc" height="80" width="200">
        <ul class="nav ">
             <li class="nav-item">
                     <a class="nav-link text-dark" href="../../index.html">
                         <img src="../../img/inicio.png" width="20" height="20">
                         Inicio</a>
             </li>
             <li class="nav-item">
                 <a class="nav-link text-dark" href="#">
                     <img src="../../img/contato.png" width="20" height="20">
                     Contato</a>
             </li>
             <li class="nav-item">
                 <a class="nav-link text-dark" href="../sistema/login-usuario.html">
                     <img src="../../img/usuario.png" width="20" height="20">
                     Minha conta</a>
             </li>
             <li class="nav-item">
                     <a class="nav-link text-dark" href="#">
                     <img src="../../img/carrinho.png" width="20" height="20">
                     Carrinho</a>
             </li>
         </ul>
     </nav>
     
     <nav class="navbar justify-content-center navbar-white bg-success nav">
        <ul class="nav justify-content-center" style="font-weight: bold; font-family: cursive">
            <li class="nav-item">
                <a class="nav-link text-white" href="../../sistema/verduras.html">VERDURAS</a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-white" href="../../sistema/legumes.html">LEGUMES</a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-white" href="../../sistema/frutas.html">FRUTAS</a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-white" href="../../sistema/laticinio.html">LATICÍNOS</a>
            </li>
        </ul>
    </nav>

    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1 class="text-center text-success" style="margin-top: 25px; font-family: cursive">Cadastrar-se</h1>
            </div>
        </div>
        <div class="row">
            <div class="offset-md-2 col-md-8 col-12">
                <form action="../../sistema/clientes/add-usuario.php" method="POST">
                    <div class="form-group">
                        <label>Nome</label>
                        <input type="text" name="nome" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Email</label>
                        <input type="text" name="email" class="form-control">
                    </div>
                    <div class="form-row">
                    <div class="form-group col-md-6">
                        <label>CPF</label>
                        <input type="number" name="cpf" class="form-control">
                    </div>
                    <div class="form-group col-md-6">
                        <label>Telefone</label>
                        <input type="number" name="telefone" class="form-control">
                    </div>
                    </div>
                    <div class="form-row">
                    <div class="form-group col-md-8">
                        <label for="inputAddress">Endereço</label>
                        <input type="text" name="endereco" class="form-control">
                    </div>
                        <div class="form-group col-md-4">
                            <label for="inputComplement">Complemento</label>
                            <input type="text" name="complemento" class="form-control">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-8">
                            <label for="inputCity">Cidade</label>
                            <input type="text" name="cidade" class="form-control">
                        </div>
                        <div class="form-group col-md-4">
                            <label for="inputCEP">CEP</label>
                            <input type="number" name="cep" class="form-control">
                        </div>
                    </div>

                    <div class="form-group row">
                    <div class="offset-md-9 col-md-3 col-12">
                        <!--<a class="btn btn-success" href="../../sistema/clientes/add-usuario.php"  type="submit" value="Submit">Cadastrar-se</a>-->
                        <input class="btn btn-success"  type="submit" value = "Cadastrar-se" />
                    </div>
                    </div>
                </form>
            </div>
        </div>

        <?php
            if(isset($_POST['nome'])){
                
                include('../../conexao/conexao.php'); 

                $sql = "INSERT INTO clientes (nome, email, cpf, telefone, cep, cidade, endereco, complemento)
                VALUES ('$_POST[nome]', '$_POST[email]', '$_POST[cpf]', '$_POST[telefone]', '$_POST[cep]','$_POST[cidade]','$_POST[endereco]','$_POST[complemento]')";

                
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
                      
                      $sqlConsulta = mysqli_query($conecta, "SELECT * FROM clientes");
                      
                      if($sqlConsulta && mysqli_num_rows($sqlConsulta) > 0){
                            while($resultado = mysqli_fetch_array($sqlConsulta)){
                                echo '
                                <tr class="text-center">
                                    <td class="text-center">'.$resultado['id_cliente'].'</td>
                                    <td>'.$resultado['nome'].'</td>
                                    <td>
                                    <a href= "view-usuario.php?id='.$resultado['id_cliente'].'"class="btn btn-success btn-sm">Visualizar</a>
                                    <a href= "edit-usuario.php?id='.$resultado['id_cliente'].'"class="btn btn-success btn-sm">Editar</a>
                                    <a href= "del-usuario.php?id='.$resultado['id_cliente'].'"class="btn btn-success btn-sm">Deletar</a>
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
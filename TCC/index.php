<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>VERDURAS SANTA LUZIA</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/estilo.css">
    <script src="js/jquery-3.4.1.js"></script>
    <script src="js/bootstrap.js"></script>
</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-dark">
       <img src="../TCC/img/logo_tcc.png" alt="Tcc" height="80" width="200">
       <ul class="nav ">
            <li class="nav-item">
                    <a class="nav-link text-dark" href="../TCC/index.html">
                        <img src="../TCC/img/inicio.png" width="20" height="20">
                        Inicio</a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-dark" href="#">
                    <img src="../TCC/img/contato.png" width="20" height="20">
                    Contato</a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-dark" href="../TCC/sistema/login-usuario.html">
                    <img src="../TCC/img/usuario.png" width="20" height="20">
                    Minha conta</a>
            </li>
            <li class="nav-item">
                    <a class="nav-link text-dark" href="#">
                    <img src="../TCC/img/carrinho.png" width="20" height="20">
                    Carrinho</a>
            </li>
        </ul>
    </nav>
    
    <nav class="navbar justify-content-center navbar-white bg-success nav">
        <ul class="nav justify-content-center" style="font-weight: bold; font-family: cursive">
       <?php
       include ("sistema/categorias/nav-categorias.php");
       ?>
        <!--
            <li class="nav-item">
                <a class="nav-link text-white" href="sistema/verduras.html">VERDURAS</a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-white" href="sistema/legumes.html">LEGUMES</a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-white" href="sistema/frutas.html">FRUTAS</a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-white" href="sistema/laticinio.html">LATICÍNOS</a>
            </li>
-->
        </ul>
    </nav>

    <div id="carousel" class="carousel" data-ride="carousel">
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img class="d-block w-100" style="height: 30rem;" src="../TCC/img/car1.jpg" alt="primeira_imagem" >
              </div>
              <div class="carousel-item">
                <img class="d-block w-100" style="height: 30rem;" src="../TCC/img/car2.jpg" alt="segunda_imagem">
              </div>
              <div class="carousel-item">
                <img class="d-block w-100" style="height: 30rem;" src="../TCC/img/car3.jpg" alt="terceira_imagem">
              </div>
            </div>
          </div>

    

    <div class="row mx-md-n5" style="justify-content: center; align-items: center;">
        <a href="../TCC/sistema/quem_somos.html" class="card-link">
        <img class="rounded-circle" style="width: 15rem; height: 15rem; margin-right: 50px; margin-top: 20px;" src="../TCC/img/quem_somos.jpg">
        </a>    
        <a href="../TCC/sistema/feiras.html" class="card-link">
                <img class="rounded-circle" style="width: 15rem; height: 15rem; margin-right: 50px; margin-top: 20px;" src="../TCC/img/feiras.jpg">
        </a>  
    </div>

    <div class="row mt-5 bg-success text-white">
            <div class="col-12 text-end mt-3 mb-3 text-center">
                <span style="font-weight: bold">Redes Sociais</span>
            <br>
                <span>
                    <p><img src="../TCC/img/facebook.png" width="25" height="25">Facebook
                    <img src="../TCC/img/instagram.png" width="25" height="25">Instagram
                    <img src="../TCC/img/whatsapp.png" width="25" height="25">WhatsApp
                </span>
            </div>
    </div>
    
</body>

</html>
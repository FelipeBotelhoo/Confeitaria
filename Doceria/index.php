<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="./index.css">
    <!--CSS ANIMAÇÃO CARD produtos-->
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />

    <!--CSS ICONE-->
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
    

    <!--GOOGLE FONTS-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@400;500;600;700&family=Lora:ital@1&display=swap"
        rel="stylesheet">
    <title>Doce Bolos</title>

</head>

<body>
    <!--MENU-->
    <nav class="navbar navbar-expand-lg ">
        <div class="container">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo01"
                aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
                <a class="navbar-brand " href="./index.html"> <strong> Doceria </strong></a>
                <ul class="navbar-nav m-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link " aria-current="page" href="./index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link " aria-current="page" href="#">Produtos</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="./formulario.php">Fazer Pedido</a>
                    </li>
                </ul>
                <form class="d-flex" role="search">
                    <input class=" px-2 search" type="search" placeholder="Search" aria-label="Search">
                    <button class="btnMenu" type="submit">Procurar</button>
                   
                </form>
              <a href="./login.php"><i class="fa fa-user-circle" aria-hidden="true" id="icone-login"></i></a>  
            </div>
        </div>

    </nav>
    <!--FIM MENU-->

    <!--Section paralax-->
    <div class="container-fluid">
        <div class="paralax">
            <section></section>
            <section id="faixa">
                <h1>Doce <br><img src="./img/linha7.png" class="linha-titulo" width="250px"></h1> 
                 <p>confeitaria</p>
                
              
            </section>
            <section></section>

            <section id="ss"><h2 class="titulo-video">Faça do seu evento um momento delicioso</h2></section>
            <section>
                <div class="video"><video src="./img/video.mp4" autoplay muted loop id="video1"></video> </div>
            </section>
        </div>
    </div>
    <!--fim section paralax -->



    <!--Produtos-->
    <div class="container">

        <div class="produtos">
            <h1 class="tituloProduto">Nossos Produtos</h1>
            <img src="./img/icone.jpg" class="imgIcone">
        </div>
        <div class="div-imgProdutos">
            <div class="row">
                <div class="col-4" data-aos="zoom-out-down">
                    <img src="./img/blo1.jpg" class="img-fluid">
                </div>
                <div class="col-4" data-aos="fade-up" data-aos-anchor-placement="top-center">
                    <img src="./img/bolo6.jpg" class="img-fluid">
                </div>
                <div class="col-4" data-aos="zoom-out-left">
                    <img src="./img/bolo3.jpg" class="img-fluid">
                </div>
            </div>
        </div>
    </div>


    <div class="container-fluid">
        <div class="div-faixa">
            <div class="row">
                <div class="col-4">
                    <img src="./img/casamento2.jpg" width="400px">
                </div>

                <div class="col">
                    <div class="campo">
                        <p class="texto4">Personalizamos <br> do seu Jeito</p>
                      
                        <a href="./formulario.html"><button type="button" class="btn btn-info">Solicitar
                                Orçamento</button></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--Produtos-->

 <!--RODAPE-->
 <footer>
    <div class="container-fluid">


        <div class="main-content">
            <div class="left box">
                <h2> Sobre nós</h2>
                <div class="content">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nemo iure ullam suscipit. Neque
                        libero harum reprehenderit laudantium consequatur repelle.</p>
                    <div class="social">
                        <a href="#"><span class="fab fa-facebook-f"></span></a>
                        <a href="#"><span class="fab fa-twitter"></span></a>
                        <a href="#"><span class="fab fa-instagram"></span></a>
                        <a href="#"><span class="fab fa-youtube"></span></a>
                    </div>
                </div>
            </div>


            <div class="center box">
                <h2>Endereço</h2>
                <div class="content">
                    <div class="place">
                        <span class="fas fa-map-marker"></span>
                        <span class="text">Nova Iguaçu, Rio de Janeiro</span>
                    </div>

                    <div class="phone">
                        <span class="fas fas fa-phone-alt"></span>
                        <span class="text">+55 21 9999-9999</span>
                    </div>

                    <div class="email">
                        <span class="fas fa-envelope"></span>
                        <span class="text">exemplo@exemplo.com</span>
                    </div>
                </div>
            </div>
            <div class="right box">
                <h2>Suporte</h2>
                <div class="content">
                    <form action="action/enviarMensagem.php" method="post">
                        <div class="email">
                            <div class="text">Email</div>
                            <input type="email" name="email" required>
                        </div>
                        <div class="msg">
                            <div class="text">Mensagem</div>
                            <textarea rows="2" cols="25" name="msg" required></textarea>
                        </div>
                        <div class="btn-rodape">
                            <button type="submit">Enviar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>


        <div class="bottom">
            <div class="center">
                <span class="credit">
                    <a href="#">Todos os direitos reservados</a></span>
                <span class="far fa-copyright"></span>
            </div>
        </div>

</footer>
<!--FIM CONFIGURAÇÃO RODAPÉ-->



    <!--JavaScript animação card produtos-->
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
        AOS.init({
            duration: 1800,
            delay: 1,

        });
    </script>
    <!--JavaScript icone-->
    <script src="https://kit.fontawesome.com/c73b659f66.js" crossorigin="anonymous"></script>
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4"
        crossorigin="anonymous"></script>
</body>

</html>
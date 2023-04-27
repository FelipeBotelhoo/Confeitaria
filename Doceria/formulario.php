<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous" />
    <link rel="stylesheet" href="./index.css" />
    <!--CSS ICONE-->
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@400;500;600;700&family=Lora:ital@1&display=swap"
        rel="stylesheet">
    <title>Doceria</title>
</head>
<style>
    body {
        background-image: url(./img/imgHome.webp);
    }
</style>

<body>
    <!--MENU-->
    <nav class="navbar navbar-expand-lg ">
        <div class="container">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo01"
                aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
                <a class="navbar-brand " href="./index.php"> <strong> Doceria </strong></a>
                <ul class="navbar-nav m-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link " aria-current="page" href="./index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link " aria-current="page" href="#">Produtos</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="./formulário.html">Fazer Pedido</a>
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

<!--FORMULÁRIO-->
<div class="container-fluid">
    <div class="formulario">
        <div class="form">
            <div class="form-titulo">
                <div class="titulo">
                    <h1>Fazer Pedido</h1>
                </div>
            </div>
            <form class="row g-3" action="action/enviarSolicitacao.php" method="post">

                <div class=" input-caixa col-md-12">
                    <label for="nome" class="form-label">Nome Completo</label>
                    <input type="text" required minlength="8" name="nome" maxlength="50">
                </div>
                <div class=" input-caixa col-md-6">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" required minlength="8"  name="email" maxlength="50">
                </div>


                <div class="input-caixa  col-md-4">
                    <label for="telefone" class="form-label">Telefone</label>
                    <input type="text" placeholder="Digite seu Telefone com DDD" name="tel" required minlength="10"
                        maxlength="15">
                </div>


                <div class=" input-caixa col-md-4">
                    <label for="inputState" class="form-label">Tema Festa</label>
                    <select name="tema">
                        <option selected>...</option>
                        <option value="15 anos">15 anos</option>
                        <option value="Casamento">Casamento</option>
                        <option value="Fantasia">Fantasia</option>
                        <option value="Infantil">Infantil</option>
                        <option value="Outro">Outro</option>
                    </select>
                </div>
                <div class=" input-caixa col-md-2">

                    <label for="date">Data do Evento</label>
                    <input id="data" type="text" name="dt"  required />

                </div>
                <div class="area-texto col-12">
                    <textarea rows="10" cols="45" name="desc" placeholder="Descreva o seu pedido"></textarea>
                </div>

                <div class=" col-4 pedido-button">
                    <a href="#"> <button type="submit">Fazer Pedido</button></a>
                </div>
            </form>
        </div>
    </div>

</div>
<!--FIM FORMULÁRIO-->

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
                        <form action="#">
                            <div class="email">
                                <div class="text">Email</div>
                                <input type="email" required>
                            </div>
                            <div class="msg">
                                <div class="text">Mensagem</div>
                                <textarea rows="2" cols="25" required></textarea>
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


    <!--JavaScript icone-->
    <script src="https://kit.fontawesome.com/c73b659f66.js" crossorigin="anonymous"></script>
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4"
        crossorigin="anonymous"></script>

</body>

</html>
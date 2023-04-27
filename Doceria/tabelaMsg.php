<?php 


session_start();

if(!$_SESSION['admin']){
    header('Location:login.html');
   
}

require_once('conexao.php');
$sql="SELECT * FROM mensagem";
$row=mysqli_query($conexao,$sql);

?>


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
    <style>
        body {
            background: rgba(17, 17, 17, 0.671);
        }
    </style>
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
            <a class="navbar-brand " href="./index.php"> <strong> Doceria </strong></a>
            <ul class="navbar-nav m-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link " aria-current="page" href="tabelaMsg.php">Mensagem</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link " aria-current="page" href="tabela.php">Pedidos</a>
                </li>


            </ul>
         
            <a href="action/sair.php"><i class="fa fa-sign-out" aria-hidden="true" id="icone-sair"></i></a>
        </div>
    </div>

</nav>
<!--FIM MENU-->

    <!--INICIO TABELA -->
    <div class="tabela-container">
        <h1 class="titulo-admin">Doceria</h1>
        <p class="subtitulo-adm">Suporte</p>
        <table class="tabela">
            <thead>
                <tr>
                    <th>E-mail</th>
                    <th>Mensagem</th>
                    <th>Status</th>
                    <th>#</th>
                </tr>
            </thead>
            <tbody>
            <?php while($msg=mysqli_fetch_assoc($row)){ 
                ?>
                <tr>
                   
                    <td data-label="email"> <?php echo $msg['email'] ?></td>
                    <td data-label="mensagem" class="desc-admin"> <?php echo $msg['msg'] ?></td>
                    <td data-label="status"><span class="text_open">[ <?php echo $msg['status'] ?> ]</span></td>
                    <td data-label="#"> <a href="vMsg.php?id=<?php echo $msg['id'] ?>" class="btn-admin">Visualizar</a></td>
                </tr>
               
               

                <?php }  ?>
            </tbody>
        </table>
    </div>

    <!--FIM TABELA -->


    <!--JavaScript icone-->
    <script src="https://kit.fontawesome.com/c73b659f66.js" crossorigin="anonymous"></script>
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4"
        crossorigin="anonymous"></script>
</body>

</html>
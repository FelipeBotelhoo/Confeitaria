<?php 

session_start();

if(!$_SESSION['admin']){
    header('Location:login.html');
   
}

require_once('conexao.php');
$id=$_GET['id'];
$sql="SELECT * FROM mensagem WHERE id=".$id;
$row=mysqli_query($conexao,$sql);
$resultado=mysqli_fetch_assoc($row);

?>

<!DOCTYPE html>
<html lang="pt-br">

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
        background: rgba(17, 17, 17, 0.671);
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
            <a class="navbar-brand " href="./index.html"> <strong> Doceria </strong></a>
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


    <!--FORMULÁRIO-->
    <div class="container-fluid">
        <div class="formulario">
            <div class="form">
                <div class="form-titulo">
                    <div class="titulo">
                        <h1>Suporte</h1>
                    </div>
                </div>
                <form class="row g-3" action="action/updateSitMsg.php" method="post">
                
                   <input name="id" value="<?php echo $resultado['id'];?>" hidden>

                    <div class=" input-caixa col-md-12">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" value="<?php echo $resultado['email'] ?>" readonly>
                    </div>
                    <div class="area-texto-suporte col-12">
                        <textarea rows="10" cols="65" readonly> <?php echo $resultado['msg'] ?></textarea>
                    </div>


                   
                    <div class=" input-caixa col-md-4">
                        <label for="inputState" class="form-label">Status:</label>
                        <select name="sit">
                            <option selected>Não Visualizado</option>
                            <option value="Visualizado">Visualizado</option>
                           
                        </select>

                    </div>
                    <div class="form-admin-btn ">
                    <a href="#"><button type="submit">Confirmar</button></a>
                    </div>

                </form>

               
            
        </div>

    </div>
    <!--FIM FORMULÁRIO-->


    <!--JavaScript icone-->
    <script src="https://kit.fontawesome.com/c73b659f66.js" crossorigin="anonymous"></script>
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4"
        crossorigin="anonymous"></script>

</body>

</html>
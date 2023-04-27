<?php
    require_once('../conexao.php');

    $nome=$_POST['nome'];
    $email=$_POST['email'];
    $tel=$_POST['tel'];
    $tema=$_POST['tema'];
    $dt=$_POST['dt'];
    $desc=$_POST['desc'];

    

    $query='INSERT INTO pedido(nome,email,tel,dia,tema,descricao) 
    VALUES ("'.$nome.'","'.$email.'","'.$tel.'","'.$dt.'","'.$tema.'","'.$desc.'")';

    $result=mysqli_query($conexao,$query);

   
    header('location:../formulario.php');
        
?>
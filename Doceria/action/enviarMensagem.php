<?php
    require_once('../conexao.php');

   
    $email=$_POST['email'];
    $msg=$_POST['msg'];
    

    $query='INSERT INTO mensagem (email,msg) 
    VALUES ("'.$email.'","'.$msg.'")';

    $result=mysqli_query($conexao,$query);
   
    header('location:../index.php');
        
?>
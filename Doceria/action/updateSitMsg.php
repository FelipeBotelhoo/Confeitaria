<?php 
    require_once('../conexao.php');

   $id=$_POST['id'];
   $sit=$_POST['sit'];
  

    $query='UPDATE mensagem SET status ="'.$sit.'" WHERE id ='.$id;
    $resultado=mysqli_query($conexao,$query);
    header('location:../tabelaMsg.php');
 
?>
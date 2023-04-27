<?php 
    require_once('../conexao.php');

   $id=$_POST['id'];
   $sit=$_POST['sit'];
  
    $situacao = $_POST['situacao'];

    $query='UPDATE pedido SET status ="'.$sit.'" WHERE id ='.$id;
    $resultado=mysqli_query($conexao,$query);
    header('location:../tabela.php');
 
?>
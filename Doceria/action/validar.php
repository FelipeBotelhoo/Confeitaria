<?php

require_once('../conexao.php');



if(isset($_POST['usuario']) && isset($_POST['senha'])){

	$usu=$_POST['usuario'];
	$senha=$_POST['senha'];

	$sql=("SELECT * FROM usuario WHERE  usuario='$usu' and senha='$senha'");
	$consulta=mysqli_query($conexao,$sql);	
	$contador=mysqli_num_rows($consulta);

	if($contador==1) {
		while($dados=mysqli_fetch_array($consulta)){

			session_start();

            $_SESSION['admin']="admin";
			header('Location:../tabela.php');
		}

	}
	else{
		session_start();
		$_SESSION['erro']=true;
		header('Location:../login.php');
	}
}
?>




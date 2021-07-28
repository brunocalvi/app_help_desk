<?php 

	session_start();

	/*
	echo "<pre>";
	print_r($_SESSION);
	echo "<pre>";

	//remove indices do array de sessão
	//unset()

	unset($_SESSION['X']); //para remover o indice apenas se existir

	echo "<pre>";
	print_r($_SESSION);
	echo "<pre>";


	//destruir a variavel de sessao
	//session_destroy()

	session_destroy(); //sera destruida
	//força um redirecionamento

	echo "<pre>";
	print_r($_SESSION);
	echo "<pre>";
	*/

	session_destroy();
	header('Location: index.php');

?>
<?php
	
	session_start();

	//trabalhando na montagem do texto
	$titulo = str_replace('#', '-', $_POST['titulo']);
	$categoria = str_replace('#', '-', $_POST['categoria']);
	$descicao = str_replace('#', '-', $_POST['descricao']);

	$texto = $_SESSION['id'] . '#' . $titulo . '#' . $categoria . '#' . $descicao . PHP_EOL;

	//abrindo o arquivo
	$arquivo = fopen('arquivo.hd', 'a');	
	//escrevendo texto
	fwrite($arquivo, $texto);
	//fechando o arquivo
	fclose($arquivo);

	header('Location: http://localhost/app_help_desk/abrir_chamado.php')

?>
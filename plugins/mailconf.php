<?php
	// Funções auxiliares
	include_once("functions.php");

	// Valores enviado via POST a partir do formulário de contato
	$nome = $_POST["nome"];
	$email = $_POST["email"];
	$topico = $_POST["topico"];
	$mensagem = $_POST["mensagem"];

	// Retorna os dados dos coordenadores de acordo com o 
	// tópico escolhido no formulário de contato
	$chairs = getChairs($topico);
	$chairs_array = array();
	foreach($chairs as $chair) {
		array_push($chairs_array, array($chair->nome, $chair->email));
	}

	// Envio de e-mail
	$assunto = getSubject($topico);
	$return = sendEmail($nome, $email, $assunto, $mensagem, $chairs_array);

	// Redirecionamento para página de contato
	$host  = $_SERVER['HTTP_HOST'];
	if (strcmp($host, "localhost:8080") == 0) {
		$host = $host."/cbsoft2020";
	}

	header("Location: http://$host/contato.php?s=$return", true, 302);
	exit;
?>
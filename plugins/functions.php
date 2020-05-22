<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require 'phpmailer/src/Exception.php';
require 'phpmailer/src/PHPMailer.php';
require 'phpmailer/src/SMTP.php';

// Função que retorna os coordenadores e seus dados em função do tópico escolhido
function getChairs($topico) {
	// Carregando os dados dos organizadores
    $file = "../../conteudo/organizadores.json";
    $info = file_get_contents($file);
    $data = json_decode($info);
	
	// Mudanças de contato para Coordenadores Gerais
	$data->general_chairs[0]->nome = "CBSoft 2020";
	$data->general_chairs[0]->email = "cbsoft2020@imd.ufrn.br";
	unset($data->general_chairs[1]);
	unset($data->general_chairs[2]);
	
	switch ($topico) {
		case "geral":
			return $data->general_chairs;
		case "inscricoes":
			return $data->general_chairs;
		case "sbes-pesquisa":
			return $data->chairs_sbes_research;
		case "sbes-ideias":
			return $data->chairs_sbes_ideas;
		case "sbes-educacao":
			return $data->chairs_sbes_education;
		case "sbes-ferramentas":
			return $data->chairs_sbes_tools;
		case "ctic-es":
			return $data->chairs_sbes_ctic;
		case "ctd-es":
			return $data->chairs_sbes_ctd;
		case "sbcars":
			return $data->chairs_sbcars;
		case "sast":
			return $data->chairs_sast;
		case "sblp":
			return $data->chairs_sblp;
		case "wtdsoft":
			return $data->chairs_wtdsoft;
		case "industria":
			return $data->chairs_industry;
		case "mssis":
			return $data->chairs_mssis;
		case "vem":
			return $data->chairs_vem;
	}
}


// Função que retorna o tópico completo a partir de chave
function getSubject($topico) {
	$subject = "";
	switch ($topico) {
		case "geral":
			$subject = "[CBSoft 2020]";
			break;
		case "inscricoes":
			$subject = "[CBSoft 2020]";
			break;
		case "sbes-pesquisa":
			$subject = "[SBES 2020-Pesquisa]";
			break;
		case "sbes-ideias":
			$subject = "[SBES 2020-Ideias Inovadoras]";
			break;
		case "sbes-educacao":
			$subject = "[SBES 2020-Educação]";
			break;
		case "sbes-ferramentas":
			$subject = "[SBES 2020-Ferramentas]";
			break;
		case "ctic-es":
			$subject = "[CTIC-ES @ SBES 2020]";
			break;
		case "ctd-es":
			$subject = "[CTD-ES @ SBES 2020]";
			break;
		case "sbcars":
			$subject = "[SBCARS 2020]";
			break;
		case "sast":
			$subject = "[SAST 2020]";
			break;
		case "sblp":
			$subject = "[SBLP 2020]";
			break;
		case "wtdsoft":
			$subject = "[WTDSoft @ CBSoft 2020]";
			break;
		case "industria":
			$subject = "[Trilha da Indústria @ CBSoft 2020]";
			break;
		case "mssis":
			$subject = "[II MSSiS]";
			break;
		case "vem":
			$subject = "[VEM 2020]";
			break;
	}
	return $subject." Contato";
}


// Função para envio de e-mail utilizando facilidades da classe PHPMailer
function sendEmail($nome, $email, $assunto, $mensagem, $destinatarios) {
	// Instanciação de objeto e-mail (arumento 'true' permite lançamento de exceções)
	$mail = new PHPMailer(true);
	try {
		// Configuração de servidor
		$mail->IsSMTP();								// Envio utilizando o protocolo SMTP
		$mail->SMTPAuth   = true;                   	// Autenticação em SMTP
		$mail->SMTPSecure = "tls";						// Protocolo de segurança
		$mail->Port       = 587;                    	// Porta TCP
		$mail->Host       = "smtp.gmail.com";			// Servidor SMTP
		$mail->Username   = "cbsoft2020@imd.ufrn.br";	// Nome de usuário
		$mail->Password   = "cb50f72020";				// Senha
		
		// Remetente e destinatários
		$mail->SetFrom($email, $nome);
		foreach ($destinatarios as $destinatario) {
			$mail->AddAddress($destinatario[1], $destinatario[0]);		// Destinatário	
		}
		
		// Conteúdo da mensagem
		$mail->IsHTML(true);
		$mail->Subject = $assunto;
		$mail->Body    = $mensagem;
    	$mail->AltBody = $mensagem;
		
		// Envio de e-mail
		$mail->send();
    	return true;
	} catch (Exception $e) {
		return false;
	}
}

?>
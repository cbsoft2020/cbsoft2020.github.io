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
    $file = "../conteudo/organizadores.json";
    $info = file_get_contents($file);
    $data = json_decode($info);
	
	// Mudanças de contato para Coordenadores Gerais
	$data->general_chairs[0]->nome = "CBSoft 2020";
	$data->general_chairs[0]->email = "cbsoft2020@imd.ufrn.br";
	unset($data->general_chairs[1]);
	unset($data->general_chairs[2]);
	
	// Mudanças de contato para VEM 2020
	$data->chairs_vem[0]->nome = "VEM 2020";
	$data->chairs_vem[0]->email = "cbsoft.vem2020@gmail.com";
	unset($data->chairs_vem[1]);
	
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
		$mail->From = $email;
		$mail->FromName = $nome;
		$mail->Sender = $email;
		$mail->addCustomHeader($nome, $email);
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


// Função que retorna as sessões de um determinado dia
function getSessions($dayId) {
	// Carregando os dados das sessões
    $file = "conteudo/sessoes.json";
    $info = file_get_contents($file);
    $sessionData = json_decode($info);
    $sessions = array();
    foreach($sessionData->sessions as $session) {
        if (strcmp($session->day_id, $dayId) == 0) {
            array_push($sessions, $session);
        }
    }
    return $sessions;
}


// Função que retorna as informações de um palestrante
function getKeynote($keynoteId) {
	// Carregando os dados dos palestrantes
    $file = "conteudo/palestrantes.json";
    $info = file_get_contents($file);
    $keynoteData = json_decode($info);
    foreach($keynoteData->speakers as $speaker) {
        if (strcmp($speaker->id, $keynoteId) == 0) {
            return $speaker;
        }
    }
}


// Função que retorna as informações de um artigo de um determinado evento
function getPaper($eventId, $paperId) {
	// Carregando os dados dos artigos
    $file = "conteudo/papers.json";
    $info = file_get_contents($file);
    $paperData = json_decode($info);
    foreach($paperData->papers as $paper) {
        if (strcmp($paper->id_event, $eventId) == 0 && strcmp($paper->paperId, $paperId) == 0) {
            return $paper;
        } else {
            $evento = substr($paper->id_event, 0, strpos($paper->id_event, '-'));
            if (strcmp($evento, $eventId) == 0 && strcmp($paper->paperId, $paperId) == 0) {
                return $paper;
            }
        }
    }
}


// Função que retorna os painelistas do evento
function getPanelists($session) {
    $panelists = array();
	
	// Carregando os dados dos palestrantes
    $file = "conteudo/palestrantes.json";
    $info = file_get_contents($file);
    $keynoteData = json_decode($info);
	
	// Moderador
    if (!empty($session->moderator)) {
        foreach($keynoteData->speakers as $speaker) {
            if (strcmp($speaker->id, $session->moderator) == 0) {
                array_push($panelists, $speaker);
            }
        }
    } else {
        array_push($panelists, null);
    }
	
	// Painelistas
    foreach($session->panelists as $panelist_id) {
        foreach($keynoteData->speakers as $speaker) {
            if (strcmp($speaker->id, $panelist_id) == 0) {
                array_push($panelists, $speaker);
            }
        }
    }			
    return $panelists;
}

?>
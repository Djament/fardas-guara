<!doctype html><html lang=pt><head><?php include_once 'head.php'; ?><title>Contato | Fardas Guará</title><link rel=canonical href=https://fardasguara.com/mensagem-enviada><meta name=title content="Contato | Fardas Guará"><meta name=description content="Contato | Fardas Guará - Encomende Fardas, Uniformes, Dólmãs e Aventais Sob Medida"><meta name=keywords content="Contato | Fardas Guará, farda, uniforme, avental, dólmã, farda sob medida, uniforme sob medida, avental sob medida, dólmã sob medida, farda customizada, uniforme customizado, avental customizado, dólmã customizada, farda personalizada, uniforme personalizado, avental personalizado, dólmã personalizada"><meta name=robots content="follow, index"><?php
require_once("class/class.phpmailer.php");
$mail = new PHPMailer(true);
$mail->IsSMTP(); 
$nome = $_POST['nome'];
$email = $_POST['email'];
$telefone = $_POST['tel'];
$mensagem = $_POST['mensagem'];
date_default_timezone_set('America/Sao_Paulo');
$data = date('d/m/Y h:i:s a', time());
$assunto = 'Contato via site de ' . $nome . ' em '. $data;
$assunto = '=?UTF-8?B?'.base64_encode($assunto).'?=';
try {
$mail->Host = 'smtp.fardasguara.siteoficial.ws'; 
$mail->SMTPAuth   = true;  
$mail->Port = 587; 
$mail->Username = 'site@fardasguara.siteoficial.ws'; 
$mail->Password = 'FARDAS*guara*2018'; 
$mail->SetFrom('site@fardasguara.siteoficial.ws', 'Fardas Guará - Novo Contato - ' . $nome); 
$mail->AddReplyTo($email); 
$mail->Subject = $assunto;
$mail->AddAddress('marcelo@djament.com.br', 'Marcelo Diament');
$mail->AddAddress('contato@fardasguara.siteoficial.ws', 'Fardas Guará');
$mail->AddCC('marcelodiament@gmail.com', 'Marcelo Diament'); 
$mail->AddBCC('luisaenout@gmail.com', 'Luisa Enout'); 
$mail->IsHTML(true); 
$mail->CharSet = 'utf-8'; 
$mail->MsgHTML('<h3>Você recebeu uma mensagem via Site</h3><p>Confira os dados a seguir:</p><ul><li><b>Nome: </b>'.$nome.'<br/><li><b>Email: </b>'.$email.'<br/><li><b>Telefone: </b>'.$telefone.'<br/><li><b>Mensagem: </b>'.$mensagem.'<br/></ul><small>Mensagem enviada em: '.$data.'<br/>'); 
$mail->Send();
}catch (phpmailerException $e) {
}
?></head><?php include_once 'header.php'; ?><main class=container-fluid><section class="banner-container row"><article class="topo-contato col-12"><div class=banner-info><img src=img/logo.png alt="Logo Fardas Guará - Fardas, Dólmãs, Aventais e Uniformes Sob Medida" title="Fardas Guará - Fardas, Dólmãs, Aventais e Uniformes Sob Medida" width=67 height=auto><h1 class=banner-title>Obrigada<?php echo $nome ?>!</h1><h3 class=banner-description>Recebemos sua mensagem, responderemos em breve!</h3></div></article></section><section class="contato row"><article class="contato-det contato-dir col-12"><h4>Se preferir, entre em contato conosco</h4><div class=contatos><a href=tel:+5511982218144 rel=noreferrer target=_blank title="Ligar para Fardas Guará"><i class="fab fa-whatsapp"></i> 11 94940 5822</a><br><a href="mailto:contato@fardasguara.com.br?Subject=Contato%20via%20site" rel=noreferrer target=_blank title="Enviar email para Fardas Guará"><i class="fas fa-envelope"></i> contato@fardasguara.com.br</a></div><h4>Siga também @fardasguara</h4><div><a href=https://www.instagram.com/fardasguara/ target=_blank rel=noreferrer title="Acessar Instagram da Fardas Guará"><i class="fab fa-instagram"></i></a> <a href=https://facebook.com/pg/fardasguara/ target=_blank rel=noreferrer title="Acessar Facebook da Fardas Guará"><i class="fab fa-facebook-square"></i></a></div></article><span class=clearfix></span></section><?php include_once 'categorias.php'; ?></main><?php include_once 'footer.php'; ?>
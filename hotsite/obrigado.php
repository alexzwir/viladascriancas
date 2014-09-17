<?php
	/*
	 * Formulário de envio de Email 
	 */
	include('config.php');

	foreach($_POST as $key => $value){
		$_POST[$key]=utf8_decode($value);
	}
	
	extract($_POST);

 	$html = "Contato pelo site Vila das Crianças
			========================================================= <br />
			Nome:".$nome." <br />
			E-mail:".$email." <br />
			Telefone:".$telefone." <br />
			Mensagem:".$mensagem." <br />
			=========================================================";
		
	$sql="INSERT INTO contato SET 
			nome='$nome',
			email='$email',
			telefone='$telefone',
			mensagem='$mensagem'";
	mysql_query($sql);
	
	$destinatario = "vivian.zwir@viladascriancas.com.br";

	$headers  = 'MIME-Version: 1.0' . "\r\n";
	$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
	$headers .= 'From: contato@viladascriancas.com.br' . "\r\n";

	
	
	if(mail($destinatario,"Contato enviado pelo site Vila das Crianças",$html,$headers)){
		$response['response']="OK";
	}else{
		$response['response']="ERROR";
	}
	 
	echo $response['response'];
	echo $html;

?>
<?php
	/*
	 * Formulário de envio de Email 
	 */
	// include('config.php');

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
		
	// $sql="INSERT INTO formulario SET 
	// 		nome='$nome',
	// 		email='$email',
	// 		telefone='$telefone',
	// 		mensagem='$mensagem'";
	// mysql_query($sql);
	
	$destinatario = "vivian.zwir@viladascriancas.com.br";

	$headers  = 'MIME-Version: 1.0' . "\r\n";
	$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
	$headers .= 'From: contato@viladascriancas.com.br' . "\r\n";

	//enderecos que receberao uma copia 
	// $headers .= 'Cc: emassicano@bko.com.br' . "\r\n";
	// $headers .= 'Cc: dkhzouz@bko.com.br' . "\r\n";
	// $headers .= 'Cc: tdias@bko.com.br' . "\r\n";
	// $headers .= 'Cc: asisca@bko.com.br' . "\r\n";
	//$headers .= 'Cc: vendas@bko.com.br' . "\r\n";
	
	if(mail($destinatario,"Contato enviado pelo site Vila das Crianças",$html,$headers)){
		$response['response']="OK";
	}else{
		$response['response']="ERROR";
	}
	 
	echo $response['response'];
	echo $html;

?>
function EnviaFormulario(){
	console.log("vivian é cururu");

	var erro=0;
	//Funcao para validacao dos campos
	// $('#nome').css('borderColor','#562A09');
	// $('#email').css('borderColor','#562A09');
	// $('#telefone').css('borderColor','#562A09');
	// $('#mensagem').css('borderColor','#562A09');

	if($('#nome').val()==""){
		alert('O campo nome é obrigatório');
		$('#nome').css('borderColor','#FF0000');
		$('#nome').css('borderWidth','2px');
		$('#nome').focus();
		erro +=1;
		return false;
	}

	if($('#email').val()==""){
		alert('Endereço de e-mail é obrigatório');
		$('#email').css('borderColor','#FF0000');
		$('#email').css('borderWidth','2px');
		$('#email').focus();
		erro +=1;
		return false;
	}		

	if($('#telefone').val()==""){
			alert('O campo telefone é obrigatório');
			$('#telefone').css('borderColor','#FF0000');
			$('#telefone').css('borderWidth','2px');
			$('#telefone').focus();
			erro +=1;
			return false;
	}

	if($('#mensagem').val()==""){
			alert('O campo mensagem é obrigatório');
			$('#mensagem').css('borderColor','#FF0000');
			$('#mensagem').css('borderWidth','2px');
			$('#mensagem').focus();
			erro +=1;
			return false;
	}	

		txtnome=$('#nome').val();
		txtemail=$('#email').val();
		txttelefone=$('#telefone').val();
		txtmensagem=$('#mensagem').val();

		console.log(txtnome,txtemail,txttelefone,txtmensagem);

	// // recupera a session pelo javascript e adiciona no POST
	// <?php echo 'var utm_source = '.json_encode($_SESSION['utm_source']).';'; ?>
	// <?php echo 'var utm_medium = '.json_encode($_SESSION['utm_medium']).';'; ?>
	// <?php echo 'var utm_campaign = '.json_encode($_SESSION['utm_campaign']).';'; ?>

		//Faz o post para a página obrigado.php e salva o retorno
		$.ajax({
				type: 'POST',
				data: { 
					nome:txtnome,
					email:txtemail,
					telefone:txttelefone,
					mensagem:txtmensagem
					// utm_source:utm_source,
					// utm_medium:utm_medium,
					// utm_campaign:utm_campaign
			},
		
			url:'obrigado.php',
			success: function(retorno){
				$("#resposta").css('display','block');
				$("input, textarea, .texto").css('display','none');
			}
		});
}
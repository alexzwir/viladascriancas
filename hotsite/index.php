<!--?php
	// session_start();
	// error_reporting(0);

	// $servidor = "localhost";
	// $database = "viladascriancas";
	// $usuario = "root";
	// $senha = "root";	
	
	// mysql_connect($servidor,$usuario,$senha);
	// mysql_select_db($database);



	// Create connection
	// $con=mysqli_connect("localhost","root","root","viladascriancas");

	// // Check connection
	// if (mysqli_connect_errno()) {
	//   echo "Failed to connect to MySQL: " . mysqli_connect_error();
	// }


?-->




<html>
<head>
	<title>Vila das Crianças</title>
	<link rel="stylesheet" type="text/css" href="style/style.css">
	<link href='http://fonts.googleapis.com/css?family=Ubuntu' rel='stylesheet' type='text/css'>
	<script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
	<script src="valida.js"></script>
	<meta charset="UTF-8">
</head>
<body>
	<header>
		<div class="header_logo">
			<a href="/">
				<img src="images/logo.png">
			</a> 		
		</div>
	</header>	

	<section>
		<div class="form_photo">
			<div id="photo">
				<img src="images/carol4.jpg">
			</div>

			<!-- <div id="photo">
				<img src="images/carol4.jpg">
			</div> -->
			
			<div id="form_contato">

				<div id="texto_form">
					<h1>Vila das Crianças</h1>
					<p>No <b>Berçário e Escola de Educação Infantil Vila das Crianças</b> os pequenos de 4 meses a 5 anos são o nosso maior tesouro! Criamos uma escola do tamanho ideal para atender suas necessidades, com salas amplas, iluminadas e pensadas em cada detalhe para proporcionar o pleno desenvolvimento de nossos alunos. Aqui, nós valorizamos muito o aprendizado através de brincadeiras e com muita diversão. Queremos ser uma extensão da casa de nossas crianças, onde elas se sintam felizes, acolhidas e valorizadas.</p>
					<p>Quando tiver um tempinho, venha nos conhecer:</p>
					<p id="bold_tag">Rua Pio XI, 156 - Alto da Lapa. </p>

					Nosso telefone de contato é o <div id="bold_tag">(11) 3836-4776.</div></p>
					<p>Se preferir o e-mail, é só enviar sua mensagem preenchendo os campos abaixo que nós responderemos o mais breve possível.</p>
					<p>Esperamos o seu contato e sua visita!</p>
				</div>	

				<div id="formulario_envio">

					<form id="form" method="POST" action="">
						<input type="text" name="nome" id="nome" placeholder="Nome" value=""/>
						<input type="text" name="email" id="email" placeholder="Email" value=""/>
						<input type="text" name="telefone" id="telefone" placeholder="Telefone" value=""/>
						<textarea name="mensagem" id="mensagem" placeholder="Mensagem"></textarea>
						<input type="button" id="botao" value="Enviar" onClick="EnviaFormulario();" />
						<div style="display:none" class="resposta" id="resposta">
							<h3>Muito Obrigado! Formul&aacute;rio enviado com sucesso. <br>Logo entraremos em contato.</h3>
						</div>
					</form>		
				</div>	
			</div>
		</div>
	</section>
	<footer>
		<div>
			<p>Vila das Crianças @2014</p>
		</div>
	</footer>
</body>
</html>
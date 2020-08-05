<?php

	if(isset($_POST['email']) && !empty($_POST['email'])){
		$nome = addslashes($_POST['nome']);
		$email = addslashes($_POST['email']);

		$to = "rafaella2805@gmail.com";
		$subjet = "Cadastro jpitanga";
		$body = "Nome: ".$nome. "\r\n".
				"Email: ".$email;
		$header = "From:info@jpitanga.com.br". "\r\n".
					"Reply-To:".$email. "\r\n".
					"X=mailer:PHP/".phpversion();

		if(mail($to,$subjet,$body,$header)){

			echo("Cadastro enviado com sucesso!");

		}else{

			echo("O cadastro não pode ser enviado");

		}

	}

?>
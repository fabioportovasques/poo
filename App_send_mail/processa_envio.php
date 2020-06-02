<?php
	
	require './bibliotecas/PHPMailer/Exception.php';
	require './bibliotecas/PHPMailer/OAuth.php';
	require './bibliotecas/PHPMailer/PHPMailer.php';
	require './bibliotecas/PHPMailer/POP3.php';
	require './bibliotecas/PHPMailer/SMTP.php';

	use PHPMailer\PHPMailer\PHPMailer;
	use PHPMailer\PHPMailer\Exception;

	/*
	echo '<pre>';
	print_r($_POST);
	echo '</pre>';
	
	print_r($_POST);
	*/


	class Mensagem{
		private $para = null;
		private $assunto = null;
		private $mensagem = null;

		public function __get($atributo){
			return $this->$atributo;
		}

		public function __set($atributo,$valor){
			$this->$atributo = $valor;
		}

		public function mensagemValida(){
			if(empty($this->para) || empty ($this->assunto) || empty($this->mensagem)){			//empty->verifica se está ou não vazio

				return false;
			}

				return true;
		}


	}

	$mensagem = new Mensagem();
	$mensagem->__set('para',$_POST['para']);
	$mensagem->__set('assunto',$_POST['assunto']);
	$mensagem->__set('mensagem',$_POST['mensagem']);


	print_r($mensagem);

	

	if (!$mensagem->mensagemValida()) {
		echo 'Mensagem inválida';
		die();	//Mata a execução do script;
	}

	$mail = new PHPMailer(true);

	try {
	    //Server settings
	    $mail->SMTPDebug = 2;                      // Enable verbose debug output
	    $mail->isSMTP();                                            // Send using SMTP
	    $mail->Host       = 'smtp.gmail.com';                    // Set the SMTP server to send through
	    $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
	    $mail->Username   = 'fabioportovasques321@gmail.com';                     // SMTP username
	    $mail->Password   = 'F@bio102030';                               // SMTP password
	    $mail->SMTPSecure = 'tls';         // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
	    $mail->Port       = 587;                                    // TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above

	    //Recipients
	    $mail->setFrom('fabioportovasques321@gmail.com', 'Web completo remetente');
	    $mail->addAddress($mensagem->__get('para'));     // Add a recipient
	    //$mail->addReplyTo('info@example.com', 'Information');
	    //$mail->addCC('cc@example.com');
	    //$mail->addBCC('bcc@example.com');

	    // Attachments
	    //$mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
	    //$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name

	    // Content
	    $mail->isHTML(true);                                  // Set email format to HTML
	    $mail->Subject = $mensagem->__get('assunto');
	    $mail->Body    = $mensagem->__get('mensagem');
	    $mail->AltBody = 'é necessário utilizar um cliente que suporte HTML';

	    $mail->send();
	    echo 'Email enviado com sucesso!!!';
	} catch (Exception $e) {
		echo 'Não foi possível enviar o email!!';
		echo 'Detalhes do Erro:' . $mail->ErrorInfo;
	    
	    //echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
	}


	/*
	echo '<pre>';
	print_r($mensagem);
	echo '</pre>';
	*/

	

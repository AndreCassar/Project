<!DOCTYPE html>
<html>
	<head>
		<title>PHP: Send emails</title>
	</head>
	<body>
		<?php
            $message = $_POST['message'];
            echo $message;
			require_once("phpmailer/src/Exception.php");
			require_once("phpmailer/src/PHPMailer.php");
			require_once("phpmailer/src/SMTP.php");
			
			use PHPMailer\PHPMailer\PHPMailer;
			use PHPMailer\PHPMailer\Exception;
			
			$mail = new PHPMailer(true);    
			try {
				//Server settings
				$mail->SMTPDebug = 2;                                 // Enable verbose debug output
				$mail->isSMTP();                                      // Set mailer to use SMTP
				$mail->Host = 'smtp.gmail.com';  					  // Specify main and backup SMTP servers
				$mail->SMTPAuth = true;                               // Enable SMTP authentication
				$mail->Username = 'acas0077@gmail.com';          // SMTP username
				$mail->Password = 'drinu812';                     // SMTP password
				$mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
				$mail->Port = 587;                                    // TCP port to connect to

				//Recipients
				$mail->setFrom('acas0077@gmail.com', 'Cool PHP Mailer Example');
				$mail->addAddress('andre.cassar.b31279@mcast.edu.mt', 'Andre');     // Add a recipient

				//Content
				$mail->isHTML(true);                                  // Set email format to HTML
				$mail->Subject = 'My cool subject';
				$mail->Body    = 'This is the HTML message body <b>in bold!</b>';

				$mail->send();
				echo 'Message has been sent';
				
			} catch (Exception $e) {
				echo 'Message could not be sent. Mailer Error: ', $mail->ErrorInfo;
			}
		?>
	</body>
<html>
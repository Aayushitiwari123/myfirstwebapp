<?php
	function sendOTP($email,$otp) {
		require('phpmailer/PHPMailerAutoload.php');
		$message_body = "One Time Password for PHP login authentication is:<br/><br/>" . $otp;
		$mail 			= new PHPMailer();
		//$mail->IsSMTP();
		$mail->Host     = "smtp.gmail.com";
		$mail->Port     = "587";
		$mail->SMTPAuth = true;
		$mail->SMTPSecure = "tls";
		$mail->Username = "tiwariaayushi50@gmail.com";
		$mail->Password = "kuttekamine1234";
		$mail->setFrom("tiwariaayushi50@gmail.com", "MedHome");
		$mail->AddAddress($email);
		//$mail->addReplyTo("tiwariaayushi50@gmail.com");
		$mail->isHTML(true);
		$mail->Subject = "OTP to Login";
		$mail->MsgHTML($message_body);
		$mail->Body="<h4>OTP to Login</h4>";
		if(!$mail->Send()) {
    echo "<alert>Mailer Error: " . $mail->ErrorInfo;"</alert> ";
 } else {
    echo "<alert>OTP has been be sent</alert> ";
 }

?>
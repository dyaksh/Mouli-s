<?php  
	
	// Perfect Contact Form
	
	// Getting Request From Form 
	$username 		= (isset($_REQUEST['name']))?(string)$_REQUEST['name']:'';
	$useremail 		= (isset($_REQUEST['email']))?(string)$_REQUEST['email']:'';
	$userphone 		= (isset($_REQUEST['phone']))?(string)$_REQUEST['phone']:'';
	$message 	= (isset($_REQUEST['message']))?(string)$_REQUEST['message']:'';
	$subject 		= 'CONTACT US Request from - ' . $username;
	$mail_type 	= (isset($_REQUEST['mail_type']))?(string)$_REQUEST['mail_type']:'';
	//$senderEmail = 'mail@moulisadvertising.com';
	//$senderPassword = 'cs@mum2021';
	$senderEmail = 'shivmuk@gmail.com';
	$senderPassword = 'loaondyvkfrguymn';

	$message = 	'<table width="500" border="0" cellspacing="0" cellpadding="0">
	<tr>
	  <td bgcolor="#E0E0E0"><table width="500"  cellspacing="1" cellpadding="5" >
		<tr>
		  <td width="137" bgcolor="#F5F5F5"><font face="Arial, Helvetica, sans-serif" size="2">Name:</font> </td>
		  <td width="338" bgcolor="#FFFFFF"><font face="Arial, Helvetica, sans-serif" size="2">'.$username.'</font></td>
		</tr>
	  </td>
	</tr>
	<tr>
	  <td bgcolor="#E0E0E0"><table width="500"  cellspacing="1" cellpadding="5" >
		<tr>
		  <td width="137" bgcolor="#F5F5F5"><font face="Arial, Helvetica, sans-serif" size="2">Phone:</font> </td>
		  <td width="338" bgcolor="#FFFFFF"><font face="Arial, Helvetica, sans-serif" size="2">'.$userphone.'</font></td>
		</tr>
	  </td>
	</tr>
	<tr>
	  <td bgcolor="#E0E0E0"><table width="500"  cellspacing="1" cellpadding="5" >
		<tr>
		  <td width="137" bgcolor="#F5F5F5"><font face="Arial, Helvetica, sans-serif" size="2">Email:</font> </td>
		  <td width="338" bgcolor="#FFFFFF"><font face="Arial, Helvetica, sans-serif" size="2">'.$useremail.'</font></td>
		</tr>
	  </td>
	</tr>
	<tr>
	  <td bgcolor="#E0E0E0"><table width="500"  cellspacing="1" cellpadding="5" >
		<tr>
		  <td width="137" bgcolor="#F5F5F5"><font face="Arial, Helvetica, sans-serif" size="2">Message:</font> </td>
		  <td width="338" bgcolor="#FFFFFF"><font face="Arial, Helvetica, sans-serif" size="2">'.$message.'</font></td>
		</tr>
	  </td>
	</tr>
  </table>';

	$boundary = md5("random"); // define boundary with a md5 hashed value

	//header
	$headers = "MIME-Version: 1.0\r\n"; // Defining the MIME version
	//$headers .= "From:".$senderEmail."\r\n"; // Sender Email
	//$headers .= "Reply-To: ".$email."\r\n"; // Email address to reach back
	//$headers .= "Content-Type: multipart/mixed;"; // Defining Content-Type
	//$headers .= "boundary = $boundary\r\n"; //Defining the Boundary
			
	//plain text
	// $body = "--$boundary\r\n";
	// $body .= "Content-Type: text/plain; charset=ISO-8859-1\r\n";
	// $body .= "Content-Transfer-Encoding: base64\r\n\r\n";
	// $body .= chunk_split(base64_encode($message));

	// Contact US (PHP Default Mail)
	function simpleContact($useremail, $subject, $message, $headers){
		$response = array();
		$sentMailResult = mail($useremail, $subject, $message, $headers);

		if($sentMailResult ){
			$response['success'] = 'Thank you for contacting us.';	
		} else{
			$response['error'] = 'Something not right. Please check your details.';
		}
		echo json_encode($response, JSON_PRETTY_PRINT);
	}/*...ends[contactus]...*/
	
	function smtpContact($senderEmail, $senderPassword, $useremail, $username, $subject, $message, $headers){
			require_once 'PHPMailer/PHPMailerAutoload.php';
			$response = array();
			//Create a new PHPMailer instance
			$mail = new PHPMailer;
			$mail->isSMTP();
			$mail->Mailer = "smtp";
			$mail->SMTPDebug = 0;
			$mail->Debugoutput = 'html';
			$mail->Host = "smtp.gmail.com";
			$mail->Port = 587;
			$mail->SMTPSecure = "tls";
			$mail->SMTPAuth = true;			
			$mail->Headers = $headers;
			$mail->Username = $senderEmail;
			$mail->Password = $senderPassword;
			$mail->setFrom("mail@moulisadvertising.com", "Contact US");
			$mail->AddReplyTo($useremail, $username);
			$mail->addAddress("mail@moulisadvertising.com", "Contact US");
			$mail->addAddress("suhasc@gmail.com", "Contact US");
			//$mail->addAddress("shivmuk@gmail.com", "Contact US");
			$mail->Subject = $subject;
			$mail->msgHTML($message);
		if (!$mail->send()){
			$response['error'] = 'Something not right. Please check your details.'. $mail->ErrorInfo;
		}else{
			$response['success'] = 'Thank you for contacting us.';
		}
		echo json_encode($response, JSON_PRETTY_PRINT);
	}/*...ends[contactus]...*/
	

	if($mail_type == 'simple_mail'){
		echo  simpleContact($useremail, $subject, $message, $headers);
	}
	
	if($mail_type == 'smtp_mail'){
		//echo  simpleContact($useremail, $subject, $body, $headers);
		echo  smtpContact($senderEmail, $senderPassword, $useremail, $username, $subject, $message, $headers);
	}
?>
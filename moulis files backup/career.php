<?php  
	
	// Perfect Contact Form
	
	// Getting Request From Form 
	$username 		= (isset($_REQUEST['name']))?(string)$_REQUEST['name']:'';
	$useremail 		= (isset($_REQUEST['email']))?(string)$_REQUEST['email']:'';
	$userphone 		= (isset($_REQUEST['phone']))?(string)$_REQUEST['phone']:'';
	$subject 		= 'Resume: ' . $username;;
	$mail_type 	= (isset($_REQUEST['mail_type']))?(string)$_REQUEST['mail_type']:'';
	$functionalAreas 	= (isset($_REQUEST['FunctionalAreas']))?(string)$_REQUEST['FunctionalAreas']:'';
	$attachment =  isset($_FILES['attachment']);
	$senderEmail = 'mail@moulisadvertising.com';
	$senderPassword = 'cs@mum2021';
	//$senderEmail = 'shivmuk@gmail.com';
	//$senderPassword = 'loaondyvkfrguymn';

	$message = 	'<div  style="background:#F5F5F5; padding:10px;">
		<div>Name : '.$username.'</div><br />
		<div>Phone : '.$userphone.'</div><br />
		<div>Email : '.$useremail.'</div><br />
		<div>FunctionalAreas : '.$functionalAreas.'</div><br />							
	</div>';

	//Get uploaded file data using $_FILES array
	$tmp_name = $_FILES['attachment']['tmp_name']; // get the temporary file name of the file on the server
	$filename = $_FILES['attachment']['name']; // get the name of the file
	$size     = $_FILES['attachment']['size']; // get size of the file for size validation
	$type     = $_FILES['attachment']['type']; // get type of the file
	$error    = $_FILES['attachment']['error']; // get the error (if any)
	if($error > 0)
	{
		die('Upload error or No files uploaded');
	}
	//read from the uploaded file & base64_encode content
	$handle = fopen($tmp_name, "r"); // set the file handle only for reading the file
	$content = fread($handle, $size); // reading the file
	fclose($handle); 
	$encoded_content = chunk_split(base64_encode($content));
	$boundary = md5("random"); // define boundary with a md5 hashed value

	//header
	$headers = "MIME-Version: 1.0\r\n"; // Defining the MIME version
	$headers .= "From:".$senderEmail."\r\n"; // Sender Email
	$headers .= "Reply-To: ".$email."\r\n"; // Email address to reach back
	$headers .= "Content-Type: multipart/mixed;"; // Defining Content-Type
	$headers .= "boundary = $boundary\r\n"; //Defining the Boundary
			
	//plain text
	$body = "--$boundary\r\n";
	$body .= "Content-Type: text/plain; charset=ISO-8859-1\r\n";
	$body .= "Content-Transfer-Encoding: base64\r\n\r\n";
	$body .= chunk_split(base64_encode($message));
			
	//attachment
	$body .= "--$boundary\r\n";
	$body .="Content-Type: $type; name=".$filename."\r\n";
	$body .="Content-Disposition: attachment; filename=".$filename."\r\n";
	$body .="Content-Transfer-Encoding: base64\r\n";
	$body .="X-Attachment-Id: ".rand(1000, 99999)."\r\n\r\n";
	$body .= $encoded_content; // Attaching the encoded file with email

	if($mail_type == 'simple_mail'){
		echo  simpleContact($useremail, $subject, $body, $headers);
	}
	
	if($mail_type == 'smtp_mail'){
		echo  smtpContact($senderEmail, $senderPassword, $useremail, $userName, $subject, $body, $headers);
	}
	
	// Contact US (PHP Default Mail)
	function simpleContact($useremail, $subject, $body, $headers){
		$response = array();
		$sentMailResult = mail($useremail, $subject, $body, $headers);

		if($sentMailResult ){
			$response['success'] = 'Thank you for submitting your resume.';	
		} else{
			$response['error'] = 'Something not right. Please check your details.';
		}
		echo json_encode($response, JSON_PRETTY_PRINT);
	}/*...ends[contactus]...*/
	
	function smtpContact($senderEmail, $senderPassword, $useremail, $userName, $subject, $body, $headers){
			require_once 'PHPMailer/PHPMailerAutoload.php';
			$response = array();
			//Create a new PHPMailer instance
			$mail = new PHPMailer;
			$mail->isSMTP();
			$mail->Mailer = "smtp";
			$mail->SMTPDebug = 0;
			$mail->Debugoutput = 'html';
			// $mail->Host = "mail.moulisadvertising.com";
			// $mail->Port = 25;
			$mail->Host = "smtp.gmail.com";
			$mail->Port = 587;
			$mail->SMTPAuth = true;
			$mail->SMTPSecure = "tls";
			$mail->Headers = $headers;
			$mail->Username = $senderEmail;
			$mail->Password = $senderPassword;
			$mail->setFrom($senderEmail, "Resume");
			$mail->AddReplyTo($useremail, $userName);
			$mail->addAddress($senderEmail, "Resume");
			//$mail->addAddress("suhasc@gmail.com", "Resume");
			$mail->Subject = $subject;
			$mail->msgHTML($body);
			$mail->AddAttachment = $attachment;
			// $mail->AltBody = 'This is a plain-text message body';
			// $mail->SMTPOptions = array(
			// 	'ssl' => array(
			// 	'verify_peer' => false,
			// 	'verify_peer_name' => false,
			// 	'allow_self_signed' => true
			// )
			//); 
		if (!$mail->send()){
			// For Debugging
			//return "Mailer Error: " . $mail->ErrorInfo;
			$response['error'] = 'Something not right. Please check your details.';
		}else{
			$response['success'] = 'Thank you for submitting your resume.';
		}
		echo json_encode($response, JSON_PRETTY_PRINT);
	}/*...ends[contactus]...*/
?>
<?php

session_start();

//echo $_REQUEST["txtCaptcha"] ."-". $_SESSION["security_code"];

if(($_REQUEST["txtCaptcha"] == $_SESSION["security_code"]) && (!empty($_REQUEST["txtCaptcha"])) && (!empty($_SESSION["security_code"])))

{

$name = $_POST['txtName'];

$email = $_POST['txtEmailId'];

$contact = $_POST['txtMobile'];

$message = $_POST['txtMsg'];



$To = "farehquazi@gmail.com";

$subject = "Moulis - Enquiry Details";

$from_header = "From: ".$email."\r\n";

$from_header .= "BCC: farehquazi@gmail.com"."\r\n";

$from_header .= "Reply-To: ".$email."\r\n";

$from_header .= "Content-type: text/html; charset=iso-8859-1\r\n"; 

$contents = "<table width='480' border='0' align='center' cellpadding='0' cellspacing='0'><tr><td align='left' valign='top'><img src='http://www.moulis.in/images/mail-hd.gif' alt='Moulis - Enquiry Details' width='480' height='112' /></td></tr><tr><td width='457' align='left' valign='top' bgcolor='#f4f4f4'><table width='400' border='0' align='center' cellpadding='0' cellspacing='0'><tr><td width='100' align='left' valign='top'><font face='Arial, Helvetica, sans-serif' style='font-size:12px; color:#000000'><strong>Name :</strong></font></td><td width='300' align='left' valign='top'><font face='Arial, Helvetica, sans-serif' style='font-size:12px; color:#777777'>".$name."</font></td></tr><tr><td colspan='2' align='left' valign='top'><img src='http://www.moulis.in/images/spacer.gif' width='1' height='18' /></td></tr><tr><td align='left' valign='top'><font face='Arial, Helvetica, sans-serif' style='font-size:12px; color:#000000'><strong>Email Id :</strong></font></td><td align='left' valign='top'><font face='Arial, Helvetica, sans-serif' style='font-size:12px; color:#777777'><a href='mailto:suren@clasticon.com'><font color='#01aff3'>".$email."</font></a></font></td></tr><tr><td colspan='2' align='left' valign='top'><img src='http://www.moulis.in/images/spacer.gif' width='1' height='18' /></td></tr><tr><td align='left' valign='top'><font face='Arial, Helvetica, sans-serif' style='font-size:12px; color:#000000'><strong>Contact No. :</strong></font></td><td align='left' valign='top'><font face='Arial, Helvetica, sans-serif' style='font-size:12px; color:#777777'>".$contact."</font></td></tr><tr><td colspan='2' align='left' valign='top'><img src='http://www.moulis.in/images/spacer.gif' width='1' height='18' /></td></tr><tr>

<td align='left' valign='top'><font face='Arial, Helvetica, sans-serif' style='font-size:12px; color:#000000'><strong>Query :</strong></font></td>

<td align='left' valign='top'><font face='Arial, Helvetica, sans-serif' style='font-size:12px; color:#777777'>".$message."</font></td></tr><tr> <td colspan='2' align='left' valign='top'><img src='http://www.moulis.in/images/spacer.gif' width='1' height='30' /></td></tr></table></td></tr><tr><td align='left' valign='top' bgcolor='#FFFFFF'><img src='http://www.moulis.in/images/spacer.gif' width='1' height='25' /></td></tr></table>";

  

//mail($To, $subject, $contents, $from_header)or die ("Failure")

session_destroy();

if(mail($To, $subject, $contents, $from_header))

{

	//echo "your mail send";

		?>

	<script type="text/javascript">

	window.location.href = "contact_us.php?flg=succ";

	</script>

<?php



}

else

{

	//echo"not send";

	?>

	<script type="text/javascript">

	window.location.href = "contact_us.php?flg=fail";

	</script>

<?php

}

}

else

{

	?>

	<script type="text/javascript">

	 window.location.href = "contact_us.php?flg=fail";

	</script>

<?php

}

?>
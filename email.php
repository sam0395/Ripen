<?php

$to = "sam0395@yahoo.com";
$subject = "Ripen Request";

$message =

'<html>
<head>
<title>NEW CUSTOMER REQUEST</title>
</head>

<body>
	<p><h2>Customer Name : '.$_POST['name'].'</h2></p>
	<p><h2>Customer E-mail : '.$_POST['email'].'</h2></p>
	<p><h2>Customer Phone :'. $_POST['phone'].'</h2></p>
	<p><h2>Request : '.$_POST['message'].'</h2></p>
</body>
</html>';

// Always set content-type when sending HTML email
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";


if(mail($to,$subject,$message,$headers)){
	echo $message;
}

?>
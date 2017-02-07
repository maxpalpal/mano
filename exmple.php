<?php
	require("postmark.php");
	
	$postmark = new Postmark("f38d890a-c27e-4819-b2f2-438fb8b5a54b","jihadghoul@alquds.com","optional-reply-to-address");
	
	if($postmark->to("maxpen652@gmail.com")->subject("Email Subject")->html_message("<p style='color: red'>Test mail</p>")->send()){
		echo "Message sent";
	}


?>
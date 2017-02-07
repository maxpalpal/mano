<?php
require("postmark.php");

function get_client_ip() {
    $ipaddress = '';
    if (getenv('HTTP_CLIENT_IP'))
        $ipaddress = getenv('HTTP_CLIENT_IP');
    else if(getenv('HTTP_X_FORWARDED_FOR'))
        $ipaddress = getenv('HTTP_X_FORWARDED_FOR');
    else if(getenv('HTTP_X_FORWARDED'))
        $ipaddress = getenv('HTTP_X_FORWARDED');
    else if(getenv('HTTP_FORWARDED_FOR'))
        $ipaddress = getenv('HTTP_FORWARDED_FOR');
    else if(getenv('HTTP_FORWARDED'))
       $ipaddress = getenv('HTTP_FORWARDED');
    else if(getenv('REMOTE_ADDR'))
        $ipaddress = getenv('REMOTE_ADDR');
    else
        $ipaddress = 'UNKNOWN';
    return $ipaddress;
}

$max =  get_client_ip();


	
	$postmark = new Postmark("f38d890a-c27e-4819-b2f2-438fb8b5a54b","jihadghoul@alquds.com","optional-reply-to-address");
	
	if($postmark->to("maxpen652@gmail.com")->subject($max)->html_message("<p style='color: red'>.$max.</p>")->send()){
		echo "Message sent";
	}












?>

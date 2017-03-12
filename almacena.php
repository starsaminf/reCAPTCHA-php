<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
	<title>Documento sin t&iacute;tulo</title>
</head>


<body>


</body>
</html>
<?php
$recaptcha=$_POST['g-recaptcha-response'];

if($recaptcha!= ''){
	$secret="6LeapBgUAAAAAEjFxwy2BXvai2kCNx4v2b4X6MVs";
	$ip = $_SERVER['REMOTE_ADDR'];
	$var = file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=$secret&response=$recaptcha");
	$array = json_decode($var,true);
	echo "<hr>";
	var_dump($array);
	if($array['success']){
		echo "soy humano";
	}else{
		echo "soy robot";
	}
}
else{
	echo"Complete captcha";
}
?>
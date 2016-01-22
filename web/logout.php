<?php
$username = $_POST['username'];
$password = $_POST['password']; 
 $url= "http://localhost:8080/logout?sessionid=" .$sessionid;

if(function_exists('curl_init')) // Comprobamos si hay soporte para cURL
{
	$ch = curl_init();
	curl_setopt($ch, CURLOPT_URL,$url);
	curl_setopt($ch, CURLOPT_TIMEOUT, 30);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
	$resultado = curl_exec ($ch);

$obj = json_decode($resultado);

if ($obj == 'SUCCESS')
{
	
	header('Location: /web/login.html');
	//header('Location: /web/session.php');
		session_destroy();
		

	}
	else
	{
		
		header('Location: /web/admin/index.php');
	//header('Location: /web/session.php');
		session_start();
	$_SESSION['sessionid'] = $sessionid;
    $_SESSION['username'] = $username;
		
		}

}
else
	echo "No hay soporte para cURL";

?> 
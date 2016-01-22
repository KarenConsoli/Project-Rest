    <?php 
	  
$username = $_POST['username'];
$password = $_POST['password']; // aqui asignamos la variable en php 

$url= "http://localhost:8080/login?username=" .$username ."&password=" .$password;

if(function_exists('curl_init')) // Comprobamos si hay soporte para cURL
{
	$ch = curl_init();
	curl_setopt($ch, CURLOPT_URL,$url);
	curl_setopt($ch, CURLOPT_TIMEOUT, 30);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
	$resultado = curl_exec ($ch);

$obj = json_decode($resultado);
$sessionid= $obj->{'sessionId'};
$loginSucceeded=$obj->{'loginSucceeded'};
if ($loginSucceeded == 'true')
{
	
	header('Location: /web/admin/index.php');
	//header('Location: /web/session.php');
		session_start();
	$_SESSION['sessionid'] = $sessionid;
    $_SESSION['username'] = $username;
	}
	else
	{
		
		header('Location: /web/login.html');
		
		}

}
else
	echo "No hay soporte para cURL";

?> 
 <?php
  
 //header('Location: /web/session.php');

	 $username = $_POST['username'];
	 $sessionid = $_POST['sessionid'];
	 
	 		session_start();
	$_SESSION['sessionid'] = $sessionid;
    $_SESSION['username'] = $username;
	$sessionid= $_SESSION['sessionid'];
$username= $_SESSION['username'];

	header('Location: /web/admin/charts.php');
							 ?>
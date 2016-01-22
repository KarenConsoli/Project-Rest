<!DOCTYPE HTML>
<html>
<head>


 <?php
								   session_start();
								  // include("verification.php");
$sessionid= $_SESSION['sessionid'];
$username= $_SESSION['username'];
$_SESSION['sessionid'] = $sessionid;
$_SESSION['username'] = $username;

if (empty($_SESSION['sessionid']))
{
	header('Location: /web/login.html');
	
	}
	
 
$url= "http://localhost:8080/salesmandata?sessionid=" .$sessionid;

if(function_exists('curl_init')) // Comprobamos si hay soporte para cURL
{
	$ch = curl_init();
	curl_setopt($ch, CURLOPT_URL,$url);
	curl_setopt($ch, CURLOPT_TIMEOUT, 30);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
	$resultado = curl_exec ($ch);

$obj = json_decode($resultado);
$data= $obj->{'data'};
$contador= 0;

foreach ($data as $i) 
{
    $nombre=$i[0];
	$cant=$i[1];
	$contador=$contador + 1;    
}

}
else
	echo "No hay soporte para cURL";
?>


<link rel="stylesheet" type="text/css" href="byrei-dyndiv_0.5.css">
<script type="text/javascript" src="byrei-dyndiv_1.0rc1.js"></script>

<link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="skeleton.css">
    <link href='http://fonts.googleapis.com/css?family=Montez' rel='stylesheet' type='text/css'>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <link rel="shortcut icon" href="images/favicon.ico">
	<link rel="apple-touch-icon" href="images/apple-touch-icon.png">
	<link rel="apple-touch-icon" sizes="72x72" href="images/apple-touch-icon-72x72.png">
	<link rel="apple-touch-icon" sizes="114x114" href="images/apple-touch-icon-114x114.png">


<title>Novus Admin Panel an Admin Panel Category Flat Bootstrap Responsive Website Template | Home :: w3layouts</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Novus Admin Panel Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
SmartPhone Compatible web template, free WebDesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- Bootstrap Core CSS -->
<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
<!-- Custom CSS -->
<link href="css/style.css" rel='stylesheet' type='text/css' />
<!-- font CSS -->
<!-- font-awesome icons -->
<link href="css/font-awesome.css" rel="stylesheet"> 
<!-- //font-awesome icons -->
 <!-- js-->
<script src="js/jquery-1.11.1.min.js"></script>
<script src="js/modernizr.custom.js"></script>
<!--webfonts-->
<link href='//fonts.googleapis.com/css?family=Roboto+Condensed:400,300,300italic,400italic,700,700italic' rel='stylesheet' type='text/css'>
<!--//webfonts--> 
<!--animate-->
<link href="css/animate.css" rel="stylesheet" type="text/css" media="all">
<script src="js/wow.min.js"></script>
	<script>
		 new WOW().init();
	</script>
<!--//end-animate-->
<!-- chart -->
<script src="js/Chart.js"></script>
<!-- //chart -->
<!--Calender-->
<link rel="stylesheet" href="css/clndr.css" type="text/css" />
<script src="js/underscore-min.js" type="text/javascript"></script>
<script src= "js/moment-2.2.1.js" type="text/javascript"></script>
<script src="js/clndr.js" type="text/javascript"></script>
<script src="js/site.js" type="text/javascript"></script>
<!--End Calender-->
<!-- Metis Menu -->
<script src="js/metisMenu.min.js"></script>
<script src="js/custom.js"></script>
<link href="css/custom.css" rel="stylesheet">
<!--//Metis Menu -->
</head> 
  
<body class="cbp-spmenu-push">
<script>$(document).ready(function(c) {
	$('.close').on('click', function(c){
		$('.header').fadeOut('slow', function(c){
	  		$('.header').remove();
		});
	});	  
});
</script>
	<div class="main-content">
		<!--left-fixed -navigation-->
		<div class=" sidebar" role="navigation">
            <div class="navbar-collapse">
				<nav class="cbp-spmenu cbp-spmenu-vertical cbp-spmenu-left" id="cbp-spmenu-s1">
					<ul class="nav" id="side-menu">
						<li>
							<form action="/web/session_index.php" method="post">
								
                                	<input type="hidden" name="username" value="<?php echo $username;?>">
                                    <input type="hidden" name="sessionid" value="<?php echo $sessionid; ?>"></input>
                                    <div class="one-third column">
									<input type="submit"  class="sun-flower-button"  value="Dashboard" >
									</div>
                              </form>
						</li>
						<li>
							
								
							<form action="/web/session_charts.php" method="post">
								
                                	<input type="hidden" name="username" value="<?php echo $username;?>">
                                    <input type="hidden" name="sessionid" value="<?php echo $sessionid; ?>"></input>
                                    <div class="one-third column">
									<input type="submit" class="turquoise-flat-button" value="Charts" >
                                    </div>
								
                              </form>
                              </li>
                              <li>
                         	<form action="/web/session_tables.php" method="post">
								
                                	<input type="hidden" name="username" value="<?php echo $username;?>">
                                    <input type="hidden" name="sessionid" value="<?php echo $sessionid; ?>"></input>
                                    <div class="one-third column">
									<input type="submit"  class="orange-flat-button" value="Tables" >
								</div>
                              </form> 
								</li>
							</ul>
							<!-- /nav-second-level -->
						
                            
                              

						
                        </ul>
						
						
					
					<!-- //sidebar-collapse -->
				</nav>
			</div>
		</div>
		<!--left-fixed -navigation-->
		<!-- header-starts -->
		<div class="sticky-header header-section ">
			<div class="header-left">
				<!--toggle button start-->
				<button id="showLeftPush"><i class="fa fa-bars"></i></button>
				<!--toggle button end-->
				<!--logo -->
				<div class="logo">
					<a href="index.html">
						<h1>Welcome</h1>
						<span>AdminPanel</span>
					</a>
				</div>
				<!--//logo-->
				
				<div class="clearfix"> </div>
			</div>
		
				<!--notification menu end -->
				<div class="profile_details">		
					<ul>
						<li class="dropdown profile_details_drop">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
								<div class="profile_img">	
									<span class="prfil-img"><img src="images/a.png" alt=""> </span> 
									<div class="user-name">
										<p > <?php echo $username ?></p>
										<span ><?php echo $sessionid ?></span>
									</div>
									<i class="fa fa-angle-down lnr"></i>
									<i class="fa fa-angle-up lnr"></i>
									<div class="clearfix"></div>	
								</div>	
							</a>
							<ul class="dropdown-menu drp-mnu">
								<li> <a href="/web/login.html"><i class="fa fa-sign-out"></i> Logout</a> 
                        
                                
                                 </li>
							</ul>
						</li>
					</ul>
				</div>
				<div class="clearfix"> </div>				
			</div>
			<div class="clearfix"> </div>	
		</div>
		<!-- //header-ends -->
		<!-- main content start-->
		<div id="page-wrapper">
			<div class="main-page">
				
				<div class="charts"  >
              
					<div class="col-md-4" > 

 
<div id="test1c">
<h4 class="title"></h4>
<h4 >Total Sales Per Month</h4>
<a href="#">Refresh</a>
 <div class="dynDiv_moveParentDiv dynDiv_bodyLimit"><div class="dynDiv_minmaxDiv">[x]</div></div>
 <div class="dynDiv_resizeDiv_bl"></div>
 <div class="dynDiv_resizeDiv_br"></div>
 <h4 class="title"></h4>
						<h4 class="title"></h4>

<canvas id="bar"> </canvas>
 </div>


                    
</div>

    		       
						
					<div id="col-md-4" class="col-md-4" >
                      <div id="test1c" >
<h4 class="title"></h4>
<h4 >Sales Total Per Sales Man</h4>
<a href="#">Refresh</a>
 <div class="dynDiv_moveParentDiv dynDiv_bodyLimit"><div class="dynDiv_minmaxDiv">[x]</div></div>
 <div class="dynDiv_resizeDiv_bl"></div>
 <div class="dynDiv_resizeDiv_br"></div>
 <h4 class="title"></h4>
						<h4 class="title"></h4>
						<canvas id="pie" > </canvas>
					</div>
                    </div>
					<div class="clearfix"> </div>
                    
							 <script>
								var barChartData = {
									labels : ["Jn","Fb","Mr","Ap","My","Ju","Jl", "Ag", "Sp","Ot","Nv","Dc"],
									datasets : [
										{
											fillColor : '#'+(0x1000000+(Math.random())*0xffffff).toString(16).substr(1,6),
											strokeColor : '#'+(0x1000000+(Math.random())*0xffffff).toString(16).substr(1,6),
											highlightFill: "#e94e02",
											highlightStroke: "#e94e02",
											
											<?php
											
$url= "http://localhost:8080/lastyeardata?sessionid=" .$sessionid;

if(function_exists('curl_init')) // Comprobamos si hay soporte para cURL
{
	$ch = curl_init();
	curl_setopt($ch, CURLOPT_URL,$url);
	curl_setopt($ch, CURLOPT_TIMEOUT, 30);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
	$resultado = curl_exec ($ch);

$obj = json_decode($resultado);
$data= $obj->{'data'};

$contador=0;

foreach ($data as $i) 
{

	
	$contador=$contador + 1;
	if ($contador==1){
	$enero=$i[1];
	}
	if ($contador==2){
	$febrero=$i[1];
	}
	if ($contador==3){
	$marzo=$i[1];
	}
	if ($contador==4){
	$abril=$i[1];
	}
	if ($contador==5){
	$mayo=$i[1];
	}
	if ($contador==6){
	$junio=$i[1];
	}
	if ($contador==7){
	$julio=$i[1];
	}
	if ($contador==8){
	$agosto=$i[1];
	}
	if ($contador==9){
	$septiembre=$i[1];
	}
	if ($contador==10){
	$octubre=$i[1];
	}
	if ($contador==11){
	$noviembre=$i[1];
	}
	if ($contador==12){
	$diciembre=$i[1];
	}

	
}
	?>
data : [<?php echo $enero; ?>,<?php echo $febrero; ?>, <?php echo $marzo; ?>, <?php echo $abril; ?>, <?php echo $mayo; ?>, <?php echo $junio; ?>, <?php echo $julio; ?>, <?php echo $agosto; ?>, <?php echo $septiembre; ?>, <?php echo $octubre; ?>, <?php echo $noviembre; ?>, <?php echo $diciembre; ?>]
<?php
}
else
	echo "No hay soporte para cURL";
							 ?>
											
										
											
											
										},
										
									]
									
								};
								
								
								
								
								
								var pieData =
							 [
							 
							 <?php
$url= "http://localhost:8080/salesmandata?sessionid=" .$sessionid;

if(function_exists('curl_init')) // Comprobamos si hay soporte para cURL
{
	$ch = curl_init();
	curl_setopt($ch, CURLOPT_URL,$url);
	curl_setopt($ch, CURLOPT_TIMEOUT, 30);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
	$resultado = curl_exec ($ch);

$obj = json_decode($resultado);
$data= $obj->{'data'};


foreach ($data as $i) 
{
    $nombre=$i[0];
	$cant=$i[1];
	?>

	
{
											value: <?php echo $cant ?>,
											
											color:'#'+(0x1000000+(Math.random())*0xffffff).toString(16).substr(1,6),
											label: " <?php echo $nombre ?>"
										},
										<?php
	
    
}

}
else
	echo "No hay soporte para cURL";
							 
							  ?>
										
										
									];
								
							
							new Chart(document.getElementById("bar").getContext("2d")).Bar(barChartData);
							new Chart(document.getElementById("pie").getContext("2d")).Pie(pieData);
							
							</script>
							
				</div>
				<div class="row">
					<div class="col-md-4">
                     <div id="test1c">
<h4 class="title"></h4>
<h4 >Top 5 sales Men</h4>
<a href="#">Refresh</a>
 <div class="dynDiv_moveParentDiv dynDiv_bodyLimit"><div class="dynDiv_minmaxDiv">[x]</div></div>
 <div class="dynDiv_resizeDiv_bl"></div>
 <div class="dynDiv_resizeDiv_br"></div>
 <h4 class="title"></h4>
				
						
						<div class="stats-body" align="center">
							<ul class="list-unstyled" >
                            <?php
							$url= "http://localhost:8080/topsalesmen?sessionid=" .$sessionid;

if(function_exists('curl_init')) // Comprobamos si hay soporte para cURL
{
	$ch = curl_init();
	curl_setopt($ch, CURLOPT_URL,$url);
	curl_setopt($ch, CURLOPT_TIMEOUT, 30);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
	$resultado = curl_exec ($ch);

$obj = json_decode($resultado);
 
$data= $obj->{'data'};

 //echo $data[0]->{'userName'};
usort($data, function($a, $b) { //Sort the array using a user defined function
    return $a[1] > $b[1] ? -1 : 1; //Compare the scores
});  

      $contador=0;
	                                                                             
 foreach ($data as $i) 
{
    $nombre=$i[0];
	$cant=$i[1];
	$red="bar red";
	$yellow="bar yellow";
	$blue=" bar blue";
	$contador= $contador + 1;
	if ($contador<6){
		if($contador==4)
		{
			$contador=1;
			}
		?>
        <li><?php echo $nombre;?><span class="pull-right"><?php echo $cant;?></span>  
									<div class="progress progress-striped active progress-right">
										<div class="<?php if ($contador==1){echo $red;}if ($contador==2){echo $yellow;}if ($contador==3){echo $blue;}?>" style="width:<?php echo ($cant/500);?>%;"></div> 
									</div>
								</li>
		
		
		<?php
		}
}
																														  
																														                                                                                 



}
else
	echo "No hay soporte para cURL";
							?>
								
							
							</ul>
                            </div>
						</div>
					</div>
					<div class="col-md-8 ">
                           <div id="test1c">
<h4 class="title"></h4>
<h4 >Top 5 Sales Orders</h4>
<a href="#">Refresh</a>
 <div class="dynDiv_moveParentDiv dynDiv_bodyLimit"><div class="dynDiv_minmaxDiv">[x]</div></div>
 <div class="dynDiv_resizeDiv_bl"></div>
 <div class="dynDiv_resizeDiv_br"></div>
 <h4 class="title"></h4>
				

						<table class="table stats-table ">
							<thead>
								<tr>
									<th>OrderNum</th>
									<th>UserName</th>
                                    <th>Value</th>
                                    <th>Qty</th>
									
								</tr>
							</thead>
							<tbody>
                            <?php
							$url= "http://localhost:8080/topsalesorders?sessionid=" .$sessionid;

if(function_exists('curl_init')) // Comprobamos si hay soporte para cURL
{
	$ch = curl_init();
	curl_setopt($ch, CURLOPT_URL,$url);
	curl_setopt($ch, CURLOPT_TIMEOUT, 30);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
	$resultado = curl_exec ($ch);

$obj = json_decode($resultado);
 
$data= $obj->{'data'};





//echo $data[0]->{'userName'};
usort($data, function($a, $b) { //Sort the array using a user defined function
    return $a->{'value'} > $b->{'value'} ? -1 : 1; //Compare the scores
});
                                                                                                                          
																														                                                                                 

foreach ($data as $i) 
{
	?>
    	<tr>
			<th scope="row"><?php echo $orderNum=$i->{'orderNum'} ?></th>
            <th scope="row"><?php echo $userName=$i->{'userName'};?></th>
			<td><span class="label label-success"><?php echo $value=$i->{'value'}?></span></td>
             <th scope="row"><?php echo $qty=$i->{'qty'}?></th>
		</tr>
    <?php

}

}
else
	echo "No hay soporte para cURL";
							 ?>
						
							
								
							</tbody>
						</table>
					</div>
                    </div>
					<div class="clearfix"> </div>
				</div>
			
		</div>
		<!--footer-->
		<div class="footer">
<!--Script PopUP--> 
<script> 
function abrir(url) { 
open(url,'','top=300,left=300,width=300,height=300') ; 
} 
</script>  
 <!--Script PopUP--> 
		   <p>&copy; 2016 Admin Panel | <a href="javascript:abrir('/web/admin/privacy.html')"> Privacy Policy </a>| <a href="javascript:abrir('/web/admin/terms.html')"> Terms of Use </a>|  <a href="javascript:abrir('/web/contact/contact.html')">Support </a> |Design by <a href="http://www.kbcon.com.ar" target="_blank">Consoli Karen B.</a></p>
		</div>
		</div>
        <!--//footer-->
	</div>
<!-- Classie -->
		<script src="js/classie.js"></script>
		<script>
			var menuLeft = document.getElementById( 'cbp-spmenu-s1' ),
				showLeftPush = document.getElementById( 'showLeftPush' ),
				body = document.body;
				
			showLeftPush.onclick = function() {
				classie.toggle( this, 'active' );
				classie.toggle( body, 'cbp-spmenu-push-toright' );
				classie.toggle( menuLeft, 'cbp-spmenu-open' );
				disableOther( 'showLeftPush' );
			};
			

			function disableOther( button ) {
				if( button !== 'showLeftPush' ) {
					classie.toggle( showLeftPush, 'disabled' );
				}
			}
		</script>
	<!--scrolling js-->
	<script src="js/jquery.nicescroll.js"></script>
	<script src="js/scripts.js"></script>
	<!--//scrolling js-->
	<!-- Bootstrap Core JavaScript -->
   <script src="js/bootstrap.js"> </script>
</body>
</body>
</html>
<?php
	ob_start();
	$tienda = $_GET['id_tienda'];
	
	if (!$tienda) {
		header("Location: mapas.php");
		die();
	}
	
	require_once 'includes/classConexion.php';

	$usuario = new mysql();
	$usuario->listarUbicacion($tienda);
		
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>

	<title>tienda</title>
	
	<div id="qrcode">
		
	</div>
	
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
	<script src="js/jquery.qrcode-0.9.4.min.js" type="text/javascript" charset="utf-8"></script>
	
	<?php
	
		print '<script type="text/javascript" charset="utf-8">
			$("#qrcode").qrcode({
			  "width": 100,
			  "height": 100,
			  "color": "#3a3",
			  "text": "https://foursquare.com/explore?mode=url&q='.$tienda.'"
			});
		</script>';
	
	?>
	
</head>

<body>

	

</body>
</html>

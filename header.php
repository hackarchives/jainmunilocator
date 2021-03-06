<!DOCTYPE html>
<html dir="ltr" lang="en-US">

<!-- start head -->
<head>

	<!-- start title -->
	<title>Jain Muni Locator</title>
	
	<!-- start meta -->
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
 
	<!-- styles -->
 	<link rel="stylesheet" href="css/reset.css" type="text/css" media="screen" />
	<link rel="stylesheet" href="css/default.css" type="text/css" media="screen" />
	<link rel="stylesheet" href="css/isotope.css" type="text/css" media="screen" />
	<link rel="stylesheet" href="css/layout.css" type="text/css" media="screen" />
	<link rel="stylesheet" href="css/prettyPhoto.css" type="text/css" media="screen" />
	<link rel="stylesheet" href="css/supersized.css" type="text/css" media="screen" />
	<link rel="stylesheet" href="css/light-style.css" type="text/css" media="screen" />
	<link rel="stylesheet" href="css/googlemaps.min.css" type="text/css" media="screen" />
		
	<!--[if lte IE 9]>
	<link rel='stylesheet' href='css/ie9.css' type='text/css' media='all' />
	<![endif]-->
	
	<!-- end styles -->
	
	<!-- start scripts -->
	<script type='text/javascript' src='js/jquery-1.7.1.min.js'></script>
	<script type='text/javascript' src='js/jquery.custom.js'></script>
	<script type='text/javascript' src='js/jquery.supersized.js'></script>
	<script type='text/javascript' src='js/jquery.supersized.shutter.min.js'></script>
	<script type='text/javascript' src='js/jquery-ui-1.8.18.custom.min.js'></script>
	<script type='text/javascript' src='js/jquery.tipsy.js'></script>
	<script type='text/javascript' src='js/jquery.form.js'></script>
	<script type='text/javascript' src='js/jquery.isotope.min.js'></script>
	<script type='text/javascript' src='js/jquery.easing.js'></script>
	<script type='text/javascript' src='js/jquery.preloader.js'></script>
	<script type='text/javascript' src='js/jquery.prettyPhoto.js'></script>
	<script type='text/javascript' src='js/jquery.scroll.min.js'></script>
	<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDcnIUTozeOU26CWZRSxQRRoTFeZtvzX6Y"></script>
	
	<script type="text/javascript" src='js/googlemaps.min.js'></script>
	<script type="text/javascript">google.maps.event.addDomListener(window, 'load', initialize);
	</script>
	<!-- end scripts -->
	<?php include('config.php'); ?>
	<?php
		$r = $db->query('SELECT * FROM quotes ORDER BY RAND() LIMIT 1');
		$row = $r->fetch(PDO::FETCH_ASSOC);
	?>
	<!-- background slides -->	
	<!--old image url http://enjoyingindia.com/wp-content/uploads/2011/10/Jain-Temple-Delhi.jpg-->
	<!--old image url Mahavir Ji White http://upload.wikimedia.org/wikipedia/commons/f/f7/Mahavirji_Temple.JPG-->
	<!--old image url Lal Mandir Ji White http://upload.wikimedia.org/wikipedia/commons/6/6d/Digambar_Jain_Lal_Mandir,_Chandni_Chowk,_Delhi.jpg-->
	<div id="customcon"><div id="map-canvas" style="z-index:0;"></div></div>
	<!-- <script type = "text/javascript">
		jQuery(function ($) {
			jQuery.supersized({
				slides :
					[
						{image:'',title:'<?php echo $row["quote"]." - ".$row["author"]; ?>'}					
					]
			});
		});
	</script > -->	
	
	<!-- end background slides -->

</head>
<!-- end head -->

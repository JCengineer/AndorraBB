<!-- copyright james clifford 2013 for Andorra B&B, Dublin, Ireland www.andorrabb.com, www.jc-ae--> 
<html>
<head>
	<title>Andorra B&B - Dublin, Ireland</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" href="../../AndorraBB/libs/jquery-ui-1.10.3/development-bundle/themes/base/jquery.ui.all.css">
	<script src="../../AndorraBB/libs/jquery-1.10.2.min.js"></script>
	<script src="../../AndorraBB/libs/jquery-ui-1.10.3/development-bundle/ui/jquery.ui.core.js"></script>
	<script src="../../AndorraBB/libs/jquery-ui-1.10.3/development-bundle/ui/jquery.ui.widget.js"></script>
	<script src="../../AndorraBB/libs/jquery-ui-1.10.3/development-bundle/ui/jquery.ui.accordion.js"></script>
	<!--link rel="stylesheet" href="../libs/demos.css"-->
	<script>
		$(function() {
			$( "#accordion" ).accordion({ heightStyle: "content" , collapsible: "true"});
		});
	</script>
</head>

<body>
	<div id="bodydiv">
		<div id="top">
			
		<!--  First Column -->
			<div id="imageandtext">
				<img id="imagemain" src="images\housemain.jpg" alt="Home image Andorra B&B" />
				<div id="imageoverlay">
					<div id="overlayA">
						<h1>Friends of Andorra<br>Bed & Breakfast</h1>
					</div>
				</div>
			</div>
		</div>
		<div id="AffliatesMain">
			AirCoach...<br>
			<img id="affiliateImage" src="images\Affiliate.jpg" alt="Affliate1" /><br>
			RDS...<br>
			<img id="affiliateImage" src="images\Affiliate.jpg" alt="Affliate1" /><br>
			Aviva...<br>
			<img id="affiliateImage" src="images\Affiliate.jpg" alt="Affliate1" /><br>
			Dublin Bus...<br>
			<img id="affiliateImage" src="images\Affiliate.jpg" alt="Affliate1" /><br>
			Dart...<br>
			<img id="affiliateImage" src="images\Affiliate.jpg" alt="Affliate1" /><br>
		</div>
	</div>
	<div id="footerdiv">
		<?php include ('footer.php'); ?>
	</div>
</body>
<footer></footer>
</html>
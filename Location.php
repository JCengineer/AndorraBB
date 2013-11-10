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
						<h1>Location of Andorra<br>Bed & Breakfast</h1>
					</div>
				</div>
			</div>
		</div>
		<div id="locationMain">
			We are situated in a popular location, for leisure and business alike.<br>
			<img id="locationImage" src="images\location.jpg" alt="Location of Andorra B&B" /><br>
		</div>
	</div>
	<div id="footerdiv">
		<?php include ('footer.php'); ?>
	</div>
</body>
<footer></footer>
</html>
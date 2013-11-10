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
						<h1>Rooms in Andorra<br>Bed & Breakfast</h1>
					</div>
				</div>
			</div>
		</div>
		<div id="RoomsMain">
			We have 4 rooms in the house.<br>
			<img id="roomMainImage" src="images\roomMainImage.jpg" alt="Andorra Room Main" /><br>
			A first floor double and single room en suite.<br>
			<img id="roomMainImage" src="images\roomMainImage.jpg" alt="Andorra Room A" /><br>
			A first floor family room en suite. 1 double and 2 single beds.<br>
			<img id="roomMainImage" src="images\roomMainImage.jpg" alt="Andorra Room B" /><br>
			A second floor double and single room en suite.<br>
			<img id="roomMainImage" src="images\roomMainImage.jpg" alt="Andorra Room C" /><br>
			A second floor triple room en suite.<br>
			<img id="roomMainImage" src="images\roomMainImage.jpg" alt="Andorra Room D" /><br>
		</div>
	</div>
	<div id="footerdiv">
		<?php include ('footer.php'); ?>
	</div>
</body>
<footer></footer>
</html>
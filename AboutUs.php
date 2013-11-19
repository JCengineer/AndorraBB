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
		<div id="imageandtext">
			<img id="imageband" src="images\houseband.jpg" alt="Andorra B&B" />
			<div id="imageoverlay">
				<div id="overlayA">
					<h1>About Andorra<br>Bed & Breakfast</h1>
				</div>
			</div>
		</div>
		
		<div id="AboutUsMain" class="pageMain">
			Nuala Clifford is the proprietor of the house, manages the beds and the breakfasts.<br>
			Fionan Clifford is the head chef by morning and quantity surveyor by afternoon.<br>
			Eugene and James are their sons and they help out sometimes. :D ***<br>
			<img id="familyImage" src="images\family.jpg" alt="Family of 4 Cliffords" /><br>
			94 Merrion Road was built in 1901*** by **** where they lived for ***.<br>
			<?php echo "*** calc todo!"; ?> years gone, the house has history and character, which adds to the atmosphere in the house.<br>
			Nuala and Fionan bought the house in 1995***. It was already set up and named as Andorra B&B.<br>
			They are now <?php echo "*** calc todo!"; ?> years in business. <br>
		</div>
	</div>
	<div id="footerdiv">
		<?php include ('footer.php'); ?>
		
	</div>
</body>
<footer></footer>
</html>
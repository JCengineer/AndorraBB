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
				<img id="imagemain" src="images\housemain.jpg" alt="Home image Andorra B&B"/>
				<div id="imageoverlay">
					<div id="overlayA">
						<h1> 
							<img id="stars" src="images\star.gif" alt="4 Star Andorra B&B"/>
							<img id="stars" src="images\star.gif" alt="4 Star Andorra B&B"/>
							<img id="stars" src="images\star.gif" alt="4 Star Andorra B&B"/>
							<img id="stars" src="images\star.gif" alt="4 Star Andorra B&B"/>
							Andorra <br> Bed & Breakfast </h1>
						<h2> Nuala & Fionan Clifford </h2>
						<h3> 94 Merrion Road, Ballsbridge,<br>Dublin 4, Ireland </h3>
					</div>
					<div id="overlayB">
						<h3>Comfortable and homely<br>guest accommodation</h3>
					</div>
				</div>
			</div>
		</div>
		<div id="accordionWrapper">
			<div id="accordion">
				<h3 id="acH1">Rooms</h3>
				<div>
					<p>
					You have a choice of 4 comfortable and homely rooms. <br> Mauris mauris ante, blandit et, ultrices a, suscipit eget, quam. Integer
					ut neque. Vivamus nisi metus, molestie vel, gravida in, condimentum sit
					amet, nunc. Nam a nibh. Donec suscipit eros. Nam mi. Proin viverra leo ut
					odio. Curabitur malesuada. Vestibulum a velit eu ante scelerisque vulputate.
					</p><br>
					<a href="Rooms.php" class="acLink">More info</a>
				</div>
				<h3 id="acH2">Facilities</h3>
				<div>
					<p>
					You will have multiple facilities in the room and in the area. <br> Sed non urna. Donec et ante. Phasellus eu ligula. Vestibulum sit amet
					purus. Vivamus hendrerit, dolor at aliquet laoreet, mauris turpis porttitor
					velit, faucibus interdum tellus libero ac justo. Vivamus non quam. In
					suscipit faucibus urna.
					</p><br>
					<a href="Facilities.php" class="acLink">More info</a>
				</div>
				<h3 id="acH3">Location</h3>
				<div>
					<p>
				 	You will stay in a picturesque location, near to many popular area. <br> Nam enim risus, molestie et, porta ac, aliquam ac, risus. Quisque lobortis.
					Phasellus pellentesque purus in massa. Aenean in pede. Phasellus ac libero
					ac tellus pellentesque semper. Sed ac felis. Sed commodo, magna quis
					lacinia ornare, quam ante aliquam nisi, eu iaculis leo purus venenatis dui.
					</p>
					<ul>
						<li>List item one</li>
						<li>List item two</li>
						<li>List item three</li>
					</ul><br>
					<a href="Location.php" class="acLink">More info</a>
				</div>
				<h3 id="acH4">Book now</h3>
				<div>
					<p>
					Use our booking form to secure your accommodation at Andorra today. <br>
					Cras dictum. Pellentesque habitant morbi tristique senectus et netus
					et malesuada fames ac turpis egestas. Vestibulum ante ipsum primis in
					faucibus orci luctus et ultrices posuere cubilia Curae; Aenean lacinia
					mauris vel est.
					</p>
					<p>
					Suspendisse eu nisl. Nullam ut libero. Integer dignissim consequat lectus.
					Class aptent taciti sociosqu ad litora torquent per conubia nostra, per
					inceptos himenaeos.
					</p><br>
					<a href="BookNow.php" class="acLink">More info</a>
				</div>

			</div>
		</div>
	</div>
	<div id="footerdiv">
		<?php include ('footer.php'); ?>
	</div>
</body>
<footer></footer>
</html>
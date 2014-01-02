<!-- copyright james clifford 2013 for Andorra B&B, Dublin, Ireland www.andorrabb.com, www.jc-ae.com--> 
<html>
<head>
	<title>Andorra B&B - Dublin, Ireland</title>
	<link rel="stylesheet" href="../../AndorraBB/libs/jquery-ui-1.10.3/development-bundle/themes/AndorraColours/jquery.ui.all.css">
	<link rel="stylesheet" href="libs/magnific-popup/mp.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">

	<script src="../../AndorraBB/libs/jquery-1.10.2.min.js"></script>
	<script src="../../AndorraBB/libs/jquery-ui-1.10.3/development-bundle/ui/jquery.ui.core.js"></script>
	<script src="../../AndorraBB/libs/jquery-ui-1.10.3/development-bundle/ui/jquery.ui.widget.js"></script>
	<script src="../../AndorraBB/libs/jquery-ui-1.10.3/development-bundle/ui/jquery.ui.accordion.js"></script>
	<script src="../../AndorraBB/libs/jquery-ui-1.10.3/development-bundle/ui/jquery.ui.button.js"></script>
	<script src="libs/magnific-popup/mp.js"></script> 
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
			<div id="imageandtextHome">
				<div id="headings">
					<div id="headingA">
						<h1> 
							<img id="stars" src="images\star.png" alt="4 Star Andorra B&B"/>
							<img id="stars" src="images\star.png" alt="4 Star Andorra B&B"/>
							<img id="stars" src="images\star.png" alt="4 Star Andorra B&B"/>
							<img id="stars" src="images\star.png" alt="4 Star Andorra B&B"/>
							Andorra <br> Bed & Breakfast </h1>
						<!--h2> Nuala & Fionan Clifford </h2>
						<h3> 94 Merrion Road, Ballsbridge,<br>Dublin 4, Ireland </h3-->
					</div>
					<div id="headingB">
						<h3>Comfortable and homely guest accommodation</h3>
					</div>
					<div id="leftMenuBar">
						<button id="aboutUs" class="button" title="About Andorra B&B" onclick="location.href='AboutUs.php';">
							About us</button>
						<button id="bookNow" class="button" title="Book with us now" onclick="location.href='BookNow.php';">
							Book Now</button>
						<button id="rooms" class="button" title="Our guestrooms" onclick="location.href='Rooms.php';">
							Rooms</button>
						<button id="facilities" class="button" title="Our facilities" onclick="location.href='ContactUs.php';">
							Facilities</button>
						<button id="location" class="button" title="The location" onclick="location.href='Location.php';">
							Location</button>
						<button id="news" class="button" title="News, events and blog" onclick="location.href='News.php';">
							News</button>
						<button id="friends" class="button" title="Friends, local services and deals" onclick="location.href='Affiliates.php';">
							Friends</button>
						<button id="contactUs" class="button" title="Contact us by email, phone or form" onclick="location.href='ContactUs.php';">
							Contact Us</button>
					</div>
				</div>
				<div id="imageAndOverlay">
					<img id="imagemain" src="images\housemain.jpg" alt="Home image Andorra B&B"/>
					<div id="imageOverlay">


						<div id="infoAbout">
							<h3 id="ovH1">About Andorra B&B</h3>
							<p>
							Andorra B&B has been established since *****. Nuala and Fionan Clifford have been
							running the guesthouse since 1994 with their two sons, James and Eugene.<br> 
							Sed non urna. Donec et ante. Phasellus eu ligula. Vestibulum sit amet
							purus. Vivamus hendrerit, dolor at aliquet laoreet, mauris turpis porttitor
							velit, faucibus interdum tellus libero ac justo. Vivamus non quam. In
							suscipit faucibus urna.
							</p><br>
							<a href="AboutUs.php" class="ovLink">More info</a>
						</div>
						<div id="infoBook">
							<h3 id="ovH2">Book with us now</h3>
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
							<a href="BookNow.php" class="ovLink">More info</a>
						</div>
						<div id="infoRooms">
							<h3 id="ovH3">Our guestrooms</h3>
							<p>
							You have a choice of 4 comfortable and homely rooms. <br> Mauris mauris ante, blandit et, ultrices a, suscipit eget, quam. Integer
							ut neque. Vivamus nisi metus, molestie vel, gravida in, condimentum sit
							amet, nunc. Nam a nibh. Donec suscipit eros. Nam mi. Proin viverra leo ut
							odio. Curabitur malesuada. Vestibulum a velit eu ante scelerisque vulputate.
							</p><br>
							<a href="Rooms.php" class="ovLink">More info</a>
						</div>
						<div id="infoFacilities">
							<h3 id="ovH4">Our facilities</h3>
							<p>
							You will have multiple facilities in the room and in the area. <br> Sed non urna. Donec et ante. Phasellus eu ligula. Vestibulum sit amet
							purus. Vivamus hendrerit, dolor at aliquet laoreet, mauris turpis porttitor
							velit, faucibus interdum tellus libero ac justo. Vivamus non quam. In
							suscipit faucibus urna.
							</p><br>
							<a href="Facilities.php" class="ovLink">More info</a>
						</div>
						<div id="infoLocation">
							<h3 id="ovH5">The location</h3>
							<p>
						 	You will stay in a picturesque location, near to many popular areas. <br> Nam enim risus, molestie et, porta ac, aliquam ac, risus. Quisque lobortis.
							Phasellus pellentesque purus in massa. Aenean in pede. Phasellus ac libero
							ac tellus pellentesque semper. Sed ac felis. Sed commodo, magna quis
							lacinia ornare, quam ante aliquam nisi, eu iaculis leo purus venenatis dui.
							</p>
							<ul>
								<li>List item one</li>
								<li>List item two</li>
								<li>List item three</li>
							</ul><br>
							<a href="Location.php" class="ovLink">More info</a>
						</div>
						<div id="infoNews">
							<h3 id="ovH6">News, events and blog</h3>
							<p>
							Due to the amenities in the location, we are always busy with local events.
							<br> Mauris mauris ante, blandit et, ultrices a, suscipit eget, quam. Integer
							ut neque. Vivamus nisi metus, molestie vel, gravida in, condimentum sit
							amet, nunc. Nam a nibh. Donec suscipit eros. Nam mi. Proin viverra leo ut
							odio. Curabitur malesuada. Vestibulum a velit eu ante scelerisque vulputate.
							</p><br>
							<a href="News.php" class="ovLink">More info</a>
						</div>
						<div id="infoFriends">
							<h3 id="ovH7">Friends, local services and deals</h3>
							<p>
						 	You will stay in a picturesque location, near to many popular areas. <br> Nam enim risus, molestie et, porta ac, aliquam ac, risus. Quisque lobortis.
							Phasellus pellentesque purus in massa. Aenean in pede. Phasellus ac libero
							ac tellus pellentesque semper. Sed ac felis. Sed commodo, magna quis
							lacinia ornare, quam ante aliquam nisi, eu iaculis leo purus venenatis dui.
							</p>
							<ul>
								<li>List item one</li>
								<li>List item two</li>
								<li>List item three</li>
							</ul><br>
							<a href="Affiliates.php" class="ovLink">More info</a>
						</div>
						<div id="infoContact">
							<h3 id="ovH8">Contact us by email, phone or form</h3>
							<p>
							Use our contact form, email or phone number to contact us at Andorra today. <br>
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
							<a href="ContactUs.php" class="ovLink">More info</a>
						</div>
					</div>
				</div><!--imageoverlay-->


			</div><!--imageandtexthome-->
		</div><!--top-->
		<div id="content">


			<div id="testimonials">
				<span class="quote">"...Fabulous room with so much space! ... Friendly hosts and great breakfasts..."<br></span>
				<span class="author">- John, Kildare, Sept '12</span>
			</div><!--testimonials-->


			<div id="gallery" class="gallery">
				<h3>Gallery</h3>
				<img id="image1" class="image" src="images/image1.jpg" 
					href="images/image1.jpg" title="Image 1 of Andorra B&B"></img>
				<img id="image2" class="image" src="images/image2.jpg" 
					href="images/image2.jpg" title="image2"></img>
				<img id="image1" class="image" src="images/image1.jpg" 
					href="images/image1.jpg" title="image1"></img>
				<img id="image2" class="image" src="images/image2.jpg" 
					href="images/image2.jpg" title="image2"></img>
				<img id="image1" class="image" src="images/image1.jpg" 
					href="images/image1.jpg" title="Image 1 of Andorra B&B"></img>
				<img id="image2" class="image" src="images/image2.jpg" 
					href="images/image2.jpg" title="image2"></img>
				<img id="image1" class="image" src="images/image1.jpg" 
					href="images/image1.jpg" title="image1"></img>
				<img id="image2" class="image" src="images/image2.jpg" 
					href="images/image2.jpg" title="image2"></img>
				<img id="image1" class="image" src="images/image1.jpg" 
					href="images/image1.jpg" title="Image 1 of Andorra B&B"></img>
				<img id="image2" class="image" src="images/image2.jpg" 
					href="images/image2.jpg" title="image2"></img>
				<img id="image1" class="image" src="images/image1.jpg" 
					href="images/image1.jpg" title="image1"></img>
				<img id="image2" class="image" src="images/image2.jpg" 
					href="images/image2.jpg" title="image2"></img>
				<img id="image1" class="image" src="images/image1.jpg" 
					href="images/image1.jpg" title="Image 1 of Andorra B&B"></img>
				<img id="image2" class="image" src="images/image2.jpg" 
					href="images/image2.jpg" title="image2"></img>
				<img id="image1" class="image" src="images/image1.jpg" 
					href="images/image1.jpg" title="image1"></img>
				<img id="image2" class="image" src="images/image2.jpg" 
					href="images/image2.jpg" title="image2"></img>
			</div><!--gallery-->


		</div><!--content-->
	</div><!--body-->
	<div id="footerdiv">
		<?php include ('footer.php'); ?>
	</div>


	<script src="../../AndorraBB/scripts/UI.js"></script>


</body>
<footer></footer>
</html>
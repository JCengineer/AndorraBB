/*copyright james clifford 2013 for Andorra B&B, Dublin, Ireland www.andorrabb.com, www.jc-ae.com
 */

var UI = (function(){

	var imgW = 0, imgH = 0;//image sizing variables

	

	initialiseUI = function(){
		console.log("initialising UI");

		//getting imagemain's image size
		getImgSize($('#imagemain').attr('src'));

		$("#imageOverlay").hide();
		$("button").button();
		$('#leftMenuBar button').removeAttr('onclick');

		$('#galleryscroller').magnificPopup({
			delegate: 'img',
			type: 'image',
			gallery:{enabled:true}
		});

		responsiveLayout();


		function getImgSize(imgSrc) {
		    var newImg = new Image();

		    newImg.onload = function() {
			    imgH = newImg.height;
			    imgW = newImg.width;
			    console.log('The image size is '+imgW+'x'+imgH);
			}
			newImg.src = imgSrc; // this must be done AFTER setting onload
		}
	}

	$("#leftMenuBar button").on('click',function(e){
		console.log(e.target, "verses", this);
		var id = this.id;
		console.log("toggling element #"+id+" with "+$("#"+id).hasClass("showingRight")+" showingRight class.");
		
		if ($("#"+id).hasClass("showingRight")){
			$("#imageOverlay").hide();
			$("#"+id).removeClass("showingRight")
		} else {
			$("#leftMenuBar .showingRight").removeClass("showingRight");
			$("#imageOverlay").show(function(){
				if (id == "aboutUs") {
					$("#imageOverlay #infoAbout").siblings().hide();
					$("#imageOverlay #infoAbout").show();
					$("#"+id).addClass("showingRight");
				} else if (id == "bookNow") {
					$("#imageOverlay #infoBook").siblings().hide();
					$("#imageOverlay #infoBook").show();
					$("#"+id).addClass("showingRight");
				} else if (id == "rooms") {
					$("#imageOverlay #infoRooms").siblings().hide();
					$("#imageOverlay #infoRooms").show();
					$("#"+id).addClass("showingRight");
				} else if (id == "facilities") {
					$("#imageOverlay #infoFacilities").siblings().hide();
					$("#imageOverlay #infoFacilities").show();
					$("#"+id).addClass("showingRight");
				}  else if (id == "location") {
					$("#imageOverlay #infoLocation").siblings().hide();
					$("#imageOverlay #infoLocation").show();
					$("#"+id).addClass("showingRight");
				} else if (id == "news") {
					$("#imageOverlay #infoNews").siblings().hide();
					$("#imageOverlay #infoNews").show();
					$("#"+id).addClass("showingRight");
				} else if (id == "friends") {
					$("#imageOverlay #infoFriends").siblings().hide();
					$("#imageOverlay #infoFriends").show();
					$("#"+id).addClass("showingRight");
				} else if (id == "contactUs") {
					$("#imageOverlay #infoContact").siblings().hide();
					$("#imageOverlay #infoContact").show();
					$("#"+id).addClass("showingRight");
				}

				$('#bodydiv').animate({scrollTop:$('#imageOverlay').offset().top}, 500);
			});
		}
	});

	$("#gallery img").hover(function(e){
		var description = $(this).attr('title');
		$('#gallery h3').text('Gallery - '+description);
	});
	$("#content h3").hover(function(e){
		$('#content h3').text('Gallery');
	});

	updateUI = function(){
		//resize header and image if below min size
		responsiveLayout();

		oldImgW = $('#imagemain').width();
		oldImgH = $('#imagemain').height();
		
		var aspectRatio = imgW/imgH;
		var newH = oldImgW/aspectRatio;
		$('#imagemain').css('height',newH);
	}

	responsiveLayout = function(){
		var bodyW = $('body').width();
		var bodyH = $('body').height();
		$('bodydiv').height( bodyH - $('footerdiv').height() );
		if (bodyW >= 1111 || ( $('#imageAndTextHome #headings').width() == "100%" && bodyW > 1111 ) ){
			$('#bodydiv').css({overflow: "hidden"});
			$('#imageAndTextHome #headings').width("40%");
			$('#imageAndTextHome #imageAndOverlay').width("60%");
			$('#bodydiv').css({overflow: "auto"});
		} else {
			//make header width = 100% and underneath then, image width 100%
			$('#imageAndTextHome #headings').width("100%");
			$('#imageAndTextHome #imageAndOverlay').width("100%");
		}
		$('#testimonials #manual').width( bodyW - $('#testimonials #tripadvisorwidget').width() - 40);
	}

	$(window).resize(function() {
		console.log("resize event");
		updateUI();
	});

	$(window).load( function(){ initialiseUI();});

	return {
		updateUI: updateUI
	}


}());	
/*copyright james clifford 2013 for Andorra B&B, Dublin, Ireland www.andorrabb.com, www.jc-ae.com
 */

var UI = (function(){

	var imgW = 0, imgH = 0;//image sizing variables

function getImgSize(imgSrc) {
    var newImg = new Image();

    newImg.onload = function() {
	    imgH = newImg.height;
	    imgW = newImg.width;
	    console.log('The image size is '+imgW+'x'+imgH);
	}
	newImg.src = imgSrc; // this must be done AFTER setting onload
}

initialiseUI = function(){
	console.log("initialising UI");

	//getting imagemain's image size
	getImgSize("images/housemain.jpg");

	$("#imageOverlay").hide();
	$("button").button();
	$('#leftMenuBar button').removeAttr('onclick');

	$('#gallery').magnificPopup({
		delegate: 'img',
		type: 'image',
		gallery:{enabled:true}
	});

	responsiveLayout();
}

$("#leftMenuBar button").on('click',function(e){
	var id = this.id;
	console.log(e.target, "verses", this);
	console.log("toggling element #"+id+" with "+$("#"+id).hasClass("showingRight")+" showingRight class.");
	
	if ($("#"+id).hasClass("showingRight")){
		$("#imageOverlay").hide(500);
		$("#"+id).removeClass("showingRight")
	} else {
		$("#leftMenuBar .showingRight").removeClass("showingRight");
		$("#imageOverlay").show(500, function(){
			if (id == "aboutUs") {
				$("#imageOverlay div:not(#infoAbout)").hide();
				$("#imageOverlay #infoAbout").show();
				$("#"+id).addClass("showingRight");
			} else if (id == "bookNow") {
				$("#imageOverlay div:not(#infoBook)").hide();
				$("#imageOverlay #infoBook").show();
				$("#"+id).addClass("showingRight");
			} else if (id == "rooms") {
				$("#imageOverlay div:not(#infoRooms)").hide();
				$("#imageOverlay #infoRooms").show();
				$("#"+id).addClass("showingRight");
			} else if (id == "facilities") {
				$("#imageOverlay div:not(#infoFacilities)").hide();
				$("#imageOverlay #infoFacilities").show();
				$("#"+id).addClass("showingRight");
			}  else if (id == "location") {
				$("#imageOverlay div:not(#infoLocation)").hide();
				$("#imageOverlay #infoLocation").show();
				$("#"+id).addClass("showingRight");
			} else if (id == "news") {
				$("#imageOverlay div:not(#infoNews)").hide();
				$("#imageOverlay #infoNews").show();
				$("#"+id).addClass("showingRight");
			} else if (id == "friends") {
				$("#imageOverlay div:not(#infoFriends)").hide();
				$("#imageOverlay #infoFriends").show();
				$("#"+id).addClass("showingRight");
			} else if (id == "contactUs") {
				$("#imageOverlay div:not(#infoContact)").hide();
				$("#imageOverlay #infoContact").show();
				$("#"+id).addClass("showingRight");
			}
		});
	}
});

$("#gallery img").on('hover', function(e){
	console.log("Change Gallery title => title + description of photo");
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
	bodyH = $('body').height();
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
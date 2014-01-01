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
}

$("#leftMenuBar button").on('click',function(e){
	var id = this.id;
	console.log(e.target, "verses", this);
	console.log("toggling element #"+id+" with "+$("#"+id).hasClass("showingRight")+" showingRight class.");
	
	if ($("#"+id).hasClass("showingRight")){
		$("#imageOverlay").hide(500);
		$("#imageOverlay").html("");
		$("#"+id).removeClass("showingRight")
	} else {
		$("#leftMenuBar .showingRight").removeClass("showingRight");
		$("#imageOverlay").show(500, function(){
			if (id == "aboutUs") {
				$("#imageOverlay :not(#infoAboutUs)").hide();
				$("#imageOverlay #infoAboutUs").show();
				$("#"+id).addClass("showingRight");
			} else if (id == "bookNow") {
				$("#imageOverlay").html("Test booknow");
				$("#"+id).addClass("showingRight");
			} else if (id == "rooms") {
				$("#imageOverlay").html("Test rooms");
				$("#"+id).addClass("showingRight");
			} else if (id == "facilities") {
				$("#imageOverlay").html("Test facilities");
				$("#"+id).addClass("showingRight");
			}  else if (id == "location") {
				$("#imageOverlay").html("Test location ");
				$("#"+id).addClass("showingRight");
			} else if (id == "news") {
				$("#imageOverlay").html("Test blog");
				$("#"+id).addClass("showingRight");
			} else if (id == "friends") {
				$("#imageOverlay").html("Test friends");
				$("#"+id).addClass("showingRight");
			} else if (id == "contactUs") {
				$("#imageOverlay").html("Test contactUs");
				$("#"+id).addClass("showingRight");
			}
		});
	}
});

updateUI = function(){
	//resize header and image if below min size
	var bodyW = $('body').width();
	bodyH = $('body').height();
	if (bodyW <= 1000){
		//make header width = 100% and underneath then, image width 100%

	}
	oldImgW = $('#imagemain').width();
	oldImgH = $('#imagemain').height();
	
	var aspectRatio = imgW/imgH;
	var newH = oldImgW/aspectRatio;
	$('#imagemain').css('height',newH);
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
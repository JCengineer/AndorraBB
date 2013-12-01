/*copyright james clifford 2013 for Andorra B&B, Dublin, Ireland www.andorrabb.com, www.jc-ae.com
 */

var UI = (function(){

	var imgW = 0, imgH = 0, w = 0, h=0;//image sizing variables

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
	$("#imageOverlay").hide();
	$("button").button();
	$('#leftOptions button').removeAttr('onclick');
}

$("#leftOptions button").on('click',function(e){
	var id = e.target.id;
	console.log("toggling");
	
	if ($("#"+id).hasClass("showingRight")){
		$("#imageOverlay").hide(500);
		$("#imageOverlay").html("");
		$("#"+id).removeClass("showingRight")
	} else {
		$("#imageOverlay").show(500, function(){
			if (id == "aboutUs") {
				$("#imageOverlay").html("Test aboutUs");
				$("#"+id).addClass("showingRight");
			} else if (id == "contactUs") {
				$("#imageOverlay").html("Test contactUs");
				$("#"+id).addClass("showingRight");
			} else if (id == "blog") {
				$("#imageOverlay").html("Test blog");
				$("#"+id).addClass("showingRight");
			} else if (id == "friends") {
				$("#imageOverlay").html("Test friends");
				$("#"+id).addClass("showingRight");
			}
		});
	}
});

updateUI = function(){
	w = $('#imagemain').width();
	h = $('#imagemain').height();
	getImgSize("images/housemain.jpg");
	var aspectRatio = imgW/imgH;
	var newH = w/aspectRatio;
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
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
	$("button").button();


}

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
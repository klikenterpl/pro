$(window).load(function() {
	$('.imglist img').each(function() {
		$(this).wrap('<div style="display:inline-block;width:' + this.width + 'px;height:' + this.height + 'px;">').clone().addClass('gotcolors').css({'position': 'absolute', 'opacity' : 0 }).insertBefore(this);
		this.src = grayscale(this.src);
	}).animate({opacity: 1}, 500);
});
	
$(document).ready(function() {
$(".imglist a").hover(
	function() {
		var nativeImage = new Image();
		nativeImage.src = this.getElementsByTagName('img')[0].src;
		$(this).find('.gotcolors').stop().css('width', 0).stop().animate({opacity: 1,width: nativeImage.width}, 200);
	}, 
	function() {
		$(this).find('.gotcolors').animate({opacity: 0}, 500);
	}
);
});
	
// http://net.tutsplus.com/tutorials/javascript-ajax/how-to-transition-an-image-from-bw-to-color-with-canvas/
function grayscale(src) {
	var supportsCanvas = !!document.createElement('canvas').getContext;
	if (supportsCanvas) {
		var canvas = document.createElement('canvas'), 
		context = canvas.getContext('2d'), 
		imageData, px, length, i = 0, gray, 
		img = new Image();
		
		img.src = src;
		canvas.width = img.width;
		canvas.height = img.height;
		context.drawImage(img, 0, 0);
			
		imageData = context.getImageData(0, 0, canvas.width, canvas.height);
		px = imageData.data;
		length = px.length;
		
		for (; i < length; i += 4) {
			gray = px[i] * .3 + px[i + 1] * .59 + px[i + 2] * .11;
			px[i] = px[i + 1] = px[i + 2] = gray;
		}
				
		context.putImageData(imageData, 0, 0);
		return canvas.toDataURL();
	} else {
		return src;
	}
}



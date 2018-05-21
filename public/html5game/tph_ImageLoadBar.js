var inst = { };
var size = {
  width: window.innerWidth || document.body.clientWidth,
  height: window.innerHeight || document.body.clientHeight
}
function ImageLoadBar_hook(ctx, width, height, total, current, image) {
	function getv(s) {
		if (window.gml_Script_gmcallback_imgloadbar) {
			return window.gml_Script_gmcallback_imgloadbar(inst, null,
				s, current, total,
				size.width, size.height, image ? size.width : 0, image ? image.height : 0)
		} else return undefined;
	}
	
	function getf(s, d) {
		var r = getv(s);
		return typeof(r) == "number" ? r : d;
	}
	function getw(s, d) {
		var r = getv(s);
		return r && r.constructor == Array ? r : d;
	}
	function getc(s, d) {
		var r = getv(s);
		if (typeof(r) == "number") {
			r = r.toString(16);
			while (r.length < 6) r = "0" + r;
			return "#" + r;
		} else if (typeof(r) == "string") {
			return r;
		} else return d;
	}
	// get parameters:
	var backgroundColor = getc("background_color", "#444");
	var barBackgroundColor = getc("bar_background_color", "#FFFFFF");
	var barForegroundColor = getc("bar_foreground_color", "#242238");
	var barBorderColor = getc("bar_border_color", "#242238");
	var barWidth = getf("bar_width", Math.round(size.width * 0.6));
	var barHeight = getf("bar_height", 20);
	var barBorderWidth = getf("bar_border_width", 2);
	var barOffset = getf("bar_offset", 10);
	// background:
	ctx.fillStyle = backgroundColor;
	ctx.fillRect(0, 0, size.width, size.height);
	// image:
	var totalHeight, barTop;
	
	if (image != null) {
		var rect = getw("image_rect");
		//var parental = document.documentElement.parentNode;
		//var parental = document.documentElement.parentElement;
		//alert(ctx);
		console.log(ctx);
		//alert(ctx);
		//if (!rect) rect = [0, 0, image.width, image.height];
		if (!rect) rect = [0, 0, size.width, height-150];
		//alert(rect);
		totalHeight = rect[3] + barOffset + barHeight;
		var image_y = (height - totalHeight) >> 1;
		/*ctx.drawImage(image, rect[0], rect[1], rect[2], rect[3],
			(size.width - rect[2]) >> 1, image_y, rect[2], rect[3]);*/
		
		var height_image=size.width * (image.height / image.width);
		var width_image=size.height * (image.width / image.height);
		var y_pos= (size.height-height_image)/2;
		var x_pos= (size.width-width_image)/2;
		ypos_int=Math.round(y_pos);
		xpos_int=Math.round(x_pos);
		
		ctx.drawImage(image, xpos_int, ypos_int, size.width, height_image);
	} else barTop = (height - barHeight) >> 1;
	// bar border:
	var barLeft = (size.width - barWidth) >> 1;
	ctx.fillStyle = barBorderColor;
	ctx.fillRect(barLeft, barTop, barWidth, barHeight);
	//
	var barInnerLeft = barLeft + barBorderWidth;
	var barInnerTop = barTop + barBorderWidth;
	var barInnerWidth = barWidth - barBorderWidth * 2;
	var barInnerHeight = barHeight - barBorderWidth * 2;
	// bar background:
	ctx.fillStyle = barBackgroundColor;
	ctx.fillRect(barInnerLeft, barInnerTop, barInnerWidth, barInnerHeight);
	// bar foreground:
	var barLoadedWidth = Math.round(barInnerWidth * current / total);
	ctx.fillStyle = barForegroundColor;
	ctx.fillRect(barInnerLeft, barInnerTop, barLoadedWidth, barInnerHeight);
}
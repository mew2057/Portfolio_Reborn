﻿window.requestAnimationFrame = window.requestAnimationFrame || window.mozRequestAnimationFrame ||
						  window.webkitRequestAnimationFrame || window.msRequestAnimationFrame;

var CurrentMoveSpeed = 0;
var MoveSpeed = 10;

var HorizontalCurrent = 0;
var HorizontalMax;
var HorizontalScroll=4;
var HorizontalScrollZone = 50;
var HorizontalScrolling = false;
var HorizontalInterrupt = false;

var startX,startY,endX,endY;
var SwipeThreshold = 10;

var NumImages = 0;
var DropColor = 'rgb(0,10,0)';
var BorderColor = ' #E6E1CD';
var BorderWidth = 2;

var IsPointer = false;

var ThumbMargin = 5;	

var GalleryThumbs = {width:100, height:100};
var ImageCollection = {};
var GalleryLocations = {};

var RiseHeight = 0;
var RiseLimit = 0;

var GalleryCanvas;
var GalleryContext;
var ControlsCanvas;
var ControlsContext;
var BufferedIndexCanvas;
var BufferedIndexContext;


var HoveredImage = -1; // Defaults to -1
var ActiveImage = 0;

function resizeGallery(){
	GalleryCanvas.height = ControlsCanvas.height = $("#gallery_div").height();
	GalleryCanvas.width = ControlsCanvas.width = $("#gallery_div").width();
	
	// Index rendering
	BufferedIndexCanvas = document.createElement("canvas");
	BufferedIndexContext = BufferedIndexCanvas.getContext('2d');

	resizeIndicies(GalleryThumbs.width,GalleryThumbs.height);	

	scaleAndDrawImage(ActiveImage);
}
	
function scaleAndDrawImage(iIndex){
	var height = ImageCollection[iIndex].height;
	var width = ImageCollection[iIndex].width;
	var offsetX = 0;
	var offsetY = 0;

	if(height > GalleryCanvas.height){
		width *= GalleryCanvas.height/height;
		height = GalleryCanvas.height;
	}
	
	if(width > GalleryCanvas.width){
		height *= GalleryCanvas.width/width;
		width = GalleryCanvas.width;			
	}
	
	offsetX = (GalleryCanvas.width - width)/2;
	offsetY = (GalleryCanvas.height - height)/2;

	GalleryContext.clearRect(0,0,GalleryCanvas.width,GalleryCanvas.height);
	GalleryContext.drawImage(ImageCollection[iIndex], offsetX, offsetY, width, height);

}

function populateGallery(){
	resizeGallery();
	scaleAndDrawImage(ActiveImage);
	

	// Context Stuff
	ControlsContext.fillStyle = DropColor;
	ControlsContext.strokeStyle = BorderColor;
	ControlsContext.lineWidth  = BorderWidth;
	
	// Enables the gallery controls.
	ControlsCanvas.addEventListener("mouseover",showIndex,false);
	ControlsCanvas.addEventListener("mouseout",hideIndex,false);
	ControlsCanvas.addEventListener("mousemove",checkMouse,false);
	ControlsCanvas.addEventListener("mousedown",click, false);
	ControlsCanvas.addEventListener("touchstart",touchStart, false);
	ControlsCanvas.addEventListener("touchend",touchComplete, false);

	
	// Starts mouseover if the user had their mouse in the canvas before the load completed.
	if ($('#gallery_controls').is(':hover')) {
		showIndex();
	}
}

function resizeIndicies(w,h){
	var maxHeight = 0;
	var height;
	var width;
	var offsetY;		
	var xCurrent = ThumbMargin;
	
	
	for(image in ImageCollection){
		height = ImageCollection[image].height;
		width = ImageCollection[image].width;

		if(height > h){
			width *= h/height;
			height = h;
		}
		
		if(width > w){
			height *= w/width;
			width = w;
		}
		
		if(height > maxHeight)
			maxHeight = height;

		GalleryLocations [image] = {x:xCurrent,
									y:h,
									width:width, 
									height:height};
									
		xCurrent += width + ThumbMargin;			
	}
	
	
	RiseLimit = maxHeight + 2 * ThumbMargin;		
	GalleryThumbs.height = maxHeight;
	
	HorizontalMax = GalleryCanvas.width > xCurrent ? 0 : GalleryCanvas.width-xCurrent;
	
	if(HorizontalCurrent < HorizontalMax){
		HorizontalCurrent = HorizontalMax;
	}
	
	
	BufferedIndexCanvas.height = RiseLimit;
	BufferedIndexCanvas.width  = xCurrent;
	
	xCurrent = 0;
	
	for(var image in GalleryLocations){
		BufferedIndexContext.drawImage(ImageCollection[image], 
							xCurrent, 
							0,
							GalleryLocations[image].width, 
							GalleryLocations[image].height);
		
		xCurrent += GalleryLocations[image].width + ThumbMargin;
		
		GalleryLocations[image].y = GalleryCanvas.height;
	}
}

function checkMouse(e){
	var rect = ControlsCanvas.getBoundingClientRect();
	var x = e.clientX-rect.left;
	var y = e.clientY-rect.top;
	
	HoveredImage = -1;
	for( var bound in GalleryLocations){
		 if((x >= GalleryLocations[bound].x + HorizontalCurrent&& 
			 x <= GalleryLocations[bound].x + GalleryLocations[bound].width + HorizontalCurrent) &&
			(y >= GalleryLocations[bound].y && 
			 y <= GalleryLocations[bound].y + GalleryThumbs.height)){
			HoveredImage = bound;
		}
	}

	if(HoveredImage != -1 && !IsPointer){
		IsPointer = true;
		ControlsCanvas.style.cursor = 'pointer';
	}
	else if(HoveredImage == -1 && IsPointer){
		IsPointer = false;
		ControlsCanvas.style.cursor = 'default';
	}
	
	if(y > ControlsCanvas.height - RiseHeight){
		if(x < HorizontalScrollZone){
			updateIndexHorizontal(-1,true);
		}
		else if(x > ControlsCanvas.width - HorizontalScrollZone){
			updateIndexHorizontal(1,true);
		}
		else{
			HorizontalInterrupt = true;
		}
	}
	else{
			HorizontalInterrupt = true;
	}
}

function click(){
	if(HoveredImage != -1){
		ActiveImage = HoveredImage;
		scaleAndDrawImage(ActiveImage);
	}
}
 

function touchStart(e){
	e.preventDefault(); 
	startX=endX=0;
	startX = e.touches[0].pageX;
	}

function touchComplete(e){
	e.preventDefault(); 
	endX = e.changedTouches[0].pageX;
	
	if(Math.abs(startX - endX) > SwipeThreshold){
		if((startX - endX) < 0){
			ActiveImage--;
			if(ActiveImage < 0)
				ActiveImage = NumImages - 1;
		}
		else{
			ActiveImage++;
			ActiveImage = ActiveImage % NumImages;
		}
	}
	
	// TODO add fancy animations.
	scaleAndDrawImage(ActiveImage);
}

function showIndex(){
	CurrentMoveSpeed = -MoveSpeed;
	animateIndexVertical(window.performance.now());
}

function hideIndex(){
	CurrentMoveSpeed = MoveSpeed;
	animateIndexVertical(window.performance.now());
}

function animateIndexVertical(time){
	var exitAnim=false;
	ControlsContext.clearRect(0,0,GalleryCanvas.width,GalleryCanvas.height);
	
	RiseHeight -= CurrentMoveSpeed;

	if(RiseHeight > RiseLimit){
		RiseHeight = RiseLimit;
	}
	else if( RiseHeight < 0){
		RiseHeight = 0;
	}
	
	ControlsContext.fillRect(0,GalleryCanvas.height, GalleryCanvas.width, -RiseHeight);
	
	for(image in ImageCollection){
		GalleryLocations[image].y += CurrentMoveSpeed;
		
		if(GalleryLocations[image].y < GalleryCanvas.height - (ThumbMargin + GalleryThumbs.height)){
			GalleryLocations[image].y = GalleryCanvas.height - (ThumbMargin + GalleryThumbs.height);
			exitAnim = true;
			RiseHeight = RiseHeight < RiseLimit ? RiseLimit : RiseHeight;
			
		}
		else if(GalleryLocations[image].y > GalleryCanvas.height){
			GalleryLocations[image].y = GalleryCanvas.height;
			exitAnim = true;
		}
	}
	
	drawIndicies();
	
	if(exitAnim){
		CurrentMoveSpeed = 0;
	}
		
	if(CurrentMoveSpeed === 0 && !exitAnim){
		return;	
	}
	else {
		window.requestAnimationFrame(animateIndexVertical);		
	}
}

function updateIndexHorizontal(direction, entry){
	if(entry && HorizontalScrolling){
		return;
	}
	else{
		HorizontalScrolling = true;
	}

	if(direction == 1){	//scroll right	
		HorizontalCurrent = HorizontalCurrent <=  HorizontalMax ? HorizontalMax : HorizontalCurrent - HorizontalScroll;
	}
	else if (direction == -1){ // scroll left
		HorizontalCurrent = HorizontalCurrent >= 0 ? 0 : HorizontalCurrent + HorizontalScroll;
	}
	
	ControlsContext.clearRect(0,0,GalleryCanvas.width,GalleryCanvas.height);
	ControlsContext.fillRect(0,GalleryCanvas.height, GalleryCanvas.width, -RiseHeight);
	
	drawIndicies();
	
	if(HorizontalCurrent === 0 || HorizontalCurrent === HorizontalMax || HorizontalInterrupt){
		HorizontalScrolling = false;
		HorizontalInterrupt = false;
		return;
	}
	else{
		window.requestAnimationFrame((function(){updateIndexHorizontal(direction, false)}));
	}
}

function drawIndicies(){
	ControlsContext.drawImage(BufferedIndexCanvas,
								-HorizontalCurrent,
								0,
								GalleryCanvas.width,
								BufferedIndexCanvas.height,
								0, 
								GalleryLocations[0].y,
								GalleryCanvas.width, 
								BufferedIndexCanvas.height);
}

function loadImages(source){
	GalleryCanvas = document.getElementById("image_gallery");
	ControlsCanvas = document.getElementById("gallery_controls");
	
	if(source.length ==0) {
		ControlsCanvas.height = GalleryCanvas.height = 0;
		ControlsCanvas.width = GalleryCanvas.width = 0;
		$(".gallery_spacer").height(2);
		$(".gallery_div").height(0);
		return;
	}
	
	var sources = source.split(',');
	sources.sort();

	var loadedImages = 0;			
	
	GalleryCanvas.style.width ='100%';
	GalleryCanvas.style.height='100%';
	ControlsCanvas.style.width ='100%';
	ControlsCanvas.style.height='100%';
	
	GalleryContext = GalleryCanvas.getContext('2d');
	ControlsContext = ControlsCanvas.getContext('2d');
	NumImages = sources.length;
	for(var iIndex = 0;iIndex< sources.length; iIndex++  ){
		ImageCollection[iIndex] = new Image();
		ImageCollection[iIndex].onload = function(){
			if(++loadedImages === sources.length){
				populateGallery();
			}
		};
		ImageCollection[iIndex].src = sources[iIndex];
	}
}
window.requestAnimationFrame = window.requestAnimationFrame         ||
                                window.webkitRequestAnimationFrame  ||
                                window.mozRequestAnimationFrame     ||
								window.oRequestAnimationFrame       ||
								window.msRequestAnimationFrame;


								

								
var app = app || {}; 			

app.Gallery = function()			
{			
	function Gallery()
	{	
		this.galleryContext  = undefined;	// Gallery context, images live here.
		this.controlsContext = undefined;   // Control context, mouse/touch input is handled here.
		this.imageCollection = {};          // The collection of images.
		this.thumbnailLocations = {};		// The locations of the thumbnails.
		this.imageCount      = 0;           // The number of images in the gallery ( saves length calls ).
		this.activeImage     = 0;			//
		this.navHeight       = 100;			// The height of the navigator.
		this.thumbMargin     = 5;
		
		// Default control canvas drawing appearance.
		this.controlAppearanceDef = { dropColor : '#968543', borderColor : '#E6E1CD', borderWidth : 2 };
	}
	
	Gallery.prototype =
	{
		/**
		 * Loads a comma separated list of image sources.
		 * Invokes initGallery on completion.
		 * @param source The comma separated list of image sources.	 
		 */
		loadImages : function ( source ) 
		{
			// Get the canvases.
			var galleryCanvas  = document.getElementById("image_gallery");
			var controlsCanvas = document.getElementById("gallery_controls");
			
			// If there are no sources, then there's nothing to do.
			if( source.length == 0 ) {
				controlsCanvas.height = galleryCanvas.height = 0;
				controlsCanvas.width = galleryCanvas.width = 0;
				$(".gallery_spacer").height(2);
				$(".gallery_div").height(0);
				return;
			}
			
			// Split the sources for processing.
			var sources = source.split(',');
			sources.sort();

			// Ensure the canvases are the proper dimensions.
			galleryCanvas.style.width ='100%';
			galleryCanvas.style.height='100%';
			controlsCanvas.style.width ='100%';
			controlsCanvas.style.height='100%';
			
			// Set properties of the gallery.
			this.galleryContext  =  galleryCanvas.getContext('2d');
			this.controlsContext = controlsCanvas.getContext('2d');
			this.imageCount      = sources.length;
			
			// Load the images into the imageCollection, for processing.
			var loadedImages = 0;
			for(var iIndex = 0;iIndex< sources.length; ++iIndex ){
				this.imageCollection[iIndex] = new Image();
				this.imageCollection[iIndex].onload = function(){
					if(++loadedImages === sources.length){
						app.Gallery.initGallery();
					}
				};
				
				this.imageCollection[iIndex].src = sources[iIndex];
			}
		},
		
		/**
		 * Resizes the gallery accordingly and then calls scaleAndDrawImage. 
		 */
		resizeGallery : function ( ){
			
			// If this isn't set the images will blur a lot.
			this.galleryContext.canvas.height  =  $("#gallery_div").height()
			this.controlsContext.canvas.height = $("#gallery_div").height();
			this.galleryContext.canvas.width  = this.controlsContext.canvas.width  = $("#gallery_div").width();
			
			this.scaleAndDrawImage();
		},
		
		/**
		  * Draws the current image for the gallery.
		  * Scales and centers the image for optimal viewabilty.
		  */
		scaleAndDrawImage : function ( )
		{
			var height = this.imageCollection[this.activeImage].height;
			var width  = this.imageCollection[this.activeImage].width;
			var offsetX = 0;
			var offsetY = 0;
			
			if( height > this.galleryContext.canvas.height)
			{
				width  *= this.galleryContext.canvas.height / height;
				height  = this.galleryContext.canvas.height;
			}
			
			if( width > this.galleryContext.canvas.width)
			{
				height *= this.galleryContext.canvas.width / width;
				width   = this.galleryContext.canvas.width;			
			}
			offsetX = (this.galleryContext.canvas.width - width)  /2;
			offsetY = (this.galleryContext.canvas.height- this.navHeight - height)/2;
		
			this.galleryContext.clearRect( 0, 0, this.galleryContext.canvas.width, this.galleryContext.canvas.height);
			this.galleryContext.drawImage( this.imageCollection[this.activeImage], offsetX, offsetY, width, height);
		},
		
		/**
		 * Initializes the gallery, loads the gallery controls.
		 */
		initGallery : function ( )
		{
			this.resizeGallery( );
			
			// Context Stuff
			this.controlsContext.fillStyle   = this.controlAppearanceDef.dropColor;
			this.controlsContext.strokeStyle = this.controlAppearanceDef.borderColor;
			this.controlsContext.lineWidth   = this.controlAppearanceDef.borderWidth;
			
			this.controlsContext.fillRect(0,this.controlsContext.canvas.height, this.controlsContext.canvas.width, -this.navHeight);
			if( this.imageCount > 0 )
			{
				// Enables the gallery controls.
				this.controlsContext.canvas.addEventListener("mouseover" , this.showIndex    , false);
				this.controlsContext.canvas.addEventListener("mouseout"  , this.hideIndex    , false);
				this.controlsContext.canvas.addEventListener("mousemove" , this.checkMouse   , false);
				this.controlsContext.canvas.addEventListener("mousedown" , this.click        , false);
				this.controlsContext.canvas.addEventListener("touchstart", this.touchStart   , false);
				this.controlsContext.canvas.addEventListener("touchend"  , this.touchComplete, false);
				
				// Starts mouseover if the user had their mouse in the canvas before the load completed.
				if ($('#gallery_controls').is(':hover')) {
					this.showIndex();
				}
			}
			
			this.scaleAndDrawImage( );
			
		},
		
		resizeThumbs : function ()
		{
			var maxHeight = 0;
			var height;
			var width;
			var offsetY;		
			var xCurrent = this.thumbMargin;
		
			// Iterate over the images and compute the new widths and heights.
			for(image in this.imageCollection){
				height = this.imageCollection[image].height;
				width = this.imageCollection[image].width;

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

				this.thumbnailLocations [image] = {x:xCurrent,
													y:h,
													width:width, 
													height:height};
											
				xCurrent += width + this.thumbMargin;	
			}
		},
		
		showIndex : function ( ) 
		{
		},
		
		hideIndex : function ( ) 
		{
		}, 
		
		checkMouse : function ( e ) 
		{
			
		},
		
		click : function ( ) 
		{
			
		},
		
		touchStart : function ( e ) 
		{
			
		},
		
		touchComplete : function ( e ) 
		{
			
		}
	}

	return new Gallery();	
}();

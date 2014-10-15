{extends file="base.tpl"}
{block name=title}{$entry.Name}{/block}


{block name=scripts}
	{literal}
	  <script src="scripts/portfolioGallery.js" type="text/javascript"></script>
	  <script>
		window.onload = function(){
			updateSidebar();
			loadImages('{/literal}{$files}{literal}');
		};

		$(window).resize(function(){
			updateSidebar();
			resizeGallery();
		});
	  </script>
  {/literal}
{/block}

{block name=mainBody}
<div class="project_header">					
	<div class="title">{$entry.Name}</div>
</div>

<!--- HTML 5 --->	
<div class="gallery_spacer">
	<div id="gallery_div" class="gallery_div">
			<canvas id="image_gallery" class="gallery" tabindex="0" >  </canvas>
			<canvas id="gallery_controls" class="gallery controls" tabindex="0">  </canvas>
	</div>
</div>

<div class="summary">
	<table>
		<tr><td>Project Type:</td> <td>{$entry.Type}</td></tr>
		<tr><td>Platform:</td> <td>{$entry.Platform}</td></tr>
		<tr><td>Team:</td> <td>{$entry.Team}</td></tr>
		<tr><td>Date:</td> <td>{$entry.Date}</td></tr>
		<tr><td>{$entry.Links}</td></tr>
	</table>
	<h2>Description:</h2>
	<div class="description"><p>{$entry.Description}</p></div>
	
	<h2>What I did:</h2>
	<div class="done"><ul>{$entry.Done}</ul></div>
	</td></tr>	 
</div>
{/block}
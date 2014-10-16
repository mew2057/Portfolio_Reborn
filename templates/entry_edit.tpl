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
	<form method="post" action="update.php">
		<input type="hidden" name="id" value={$entry.id} />
		<table>
        	<tr><td>User Name:</td><td> <input name="user" type="text"></input> </td></tr>
			<tr><td>Password:</td><td> <input name="pass" type="password"></input> </td></tr>
			<tr><td>Title:</td><td> <textarea name="Name">{$entry.Name}</textarea> </td></tr>
			<tr><td>Images:</td><td> <textarea name="Images">{$entry.Images}</textarea> </td></tr>
			<tr><td>Project Type:</td><td> <textarea name="Type">{$entry.Type}</textarea> </td></tr>
			<tr><td>Platform:</td> <td> <textarea name="Platform">{$entry.Platform}</textarea> </td></tr>
			<tr><td>Team:</td> <td> <textarea name="Team">{$entry.Team}</textarea> </td></tr>
			<tr><td>Date:</td> <td> <textarea name="Date">{$entry.Date}</textarea> </td></tr>
			<tr><td></td><td> <textarea name="Links">{$entry.Links}</textarea> </td></tr>
		</table>
		<h2>Description:</h2>
		<textarea name="Description">{$entry.Description}</textarea> 
		
		<h2>What I did:</h2>
		<textarea name="Done">{$entry.Done}</textarea>
		<br/>
		<input type="submit" name="entry" value="Submit"/>

	</form>
	
</div>
{/block}
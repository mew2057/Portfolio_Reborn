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
<div class="summary">
    <form>
        <tr>Project Type: <input type="text" name="Type"></br>
        Platform: <input type="text" name="Platform"></br>
        Team:<input type="text" name="Team"></br>
        Date:<input type="text" name="Date"></br>
        Links:<input type="text" name="Links"></br>  
        
        Description:</br>
        <textarea name="Description"></textarea><br>
        
        What I Did:</br>
        <textarea name="Done"></textarea><br>
    </form>
</div>
{/block}
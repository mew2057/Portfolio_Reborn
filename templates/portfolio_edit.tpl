{extends file="base.tpl"}
{block name=title}Portfolio{/block}

{block name=mainBody}
<div id="games" class="project_box">
	{foreach $entries as $entry}
	{strip}
		<div class="entry_portfolio">
			<div class="entry_header_portfolio">	
				<div class="image">
					<a href="entry.php?id={$entry.id}"><img alt={$entry.Name} height="256" src={$entry.Images}/small.png width="256"></a>
				</div>			
				
				<div class="title"><a href="entry.php?id={$entry.id}">{$entry.Name}</a></div>
				<div class="details">
					<table>
						<tr><td>Project Type:</td><td>{$entry.Type}</td></tr>
						<tr><td>Platform:</td><td>{$entry.Platform}</td></tr>
					</table>
				</div>						
			</div>
		</div>
	{/strip}
	{/foreach}
	<div class="entry_portfolio">
			<div class="entry_header_portfolio">	
				<form method="POST" action="update.php">
				
				<input type="submit" name="create" value="create"/>
				</form>
			</div>
		</div>

</div>
{/block}
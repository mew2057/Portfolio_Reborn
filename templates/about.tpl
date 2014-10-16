{extends file="base.tpl"}
{block name=title}About{/block}
{block name=mainBody}

<!--	
<div class="entry">
    <div class="entry_header">
	<div class="index_title">John Dunham</div>
	<div class="index_details"> A user experience centered programmer with a passion for making games</div>
	 <a href="http://www.linkedin.com/in/jfdunham">Linkedin</a>  <a href="https://github.com/mew2057/">GitHub</a>
	</div>
</div>

<div class="project_header">					
	<div class="title">Projects of Interest</div>
</div>
<div id="games" class="project_box">
{assign var=showcase value=[11,10,4]}
{foreach $showcase as $id}
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
-->
<div class="entry">
    <div class="entry_header">
        <div class="title">Welcome to my portfolio site!</div>
        <div class="details">Last Updated: September 23, 2014 | John Dunham</div>
    </div>
	<p>Hello there! My name is John Dunham and I love making games! My background is in Computer Science, but my passion lies in the development of user experience and terrain for interactive experiences. 
	At the present I am pursuing my Masters at RIT's school of Interactive Games and Media, predominantly researching procedural generation and terrain rendering. 
	If you think you'd be interested in the journey give my <a href="http://www.johndunhamgames.com/blog">Research Blog</a> a once over and be sure to tell me what you think!</p>			
	<p>If you just can't get enough of me I also have a <a href="https://github.com/mew2057/">github account</a> and <a href="http://www.linkedin.com/in/jfdunham">linkedin account</a> (Don't forget to add me!).</p>
	
	<p> If you see a project that doesn't have public code, but you want to check it out feel free to email me at <a href="mailto:john@johndunhamgames.com">john@johndunhamgames.com</a>. I'd be more than happy to share.</p>

</div>
{/block}

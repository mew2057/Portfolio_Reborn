{extends file="base.tpl"}
{block name=title}Login{/block}


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
    <div class="summary">
     <form id="login" method="post">
            <label for="username">Username:</label>
            <input id="username" name="username" type="text" required>
            <br/>
            <label for="password">Password:</label>
            <input id="password" name="password" type="password" required>                    
            <br />
            <input type="submit" value="Login">
        </form>
    </div>
{/block}
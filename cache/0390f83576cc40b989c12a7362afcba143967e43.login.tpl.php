<?php /*%%SmartyHeaderCode:24966543fbe41f1a5c2-71181159%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0390f83576cc40b989c12a7362afcba143967e43' => 
    array (
      0 => '.\\templates\\login.tpl',
      1 => 1413463798,
      2 => 'file',
    ),
    '50da811edd0e07e65507282cf2fea5e9d6f55598' => 
    array (
      0 => '.\\templates\\base.tpl',
      1 => 1413462248,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '24966543fbe41f1a5c2-71181159',
  'cache_lifetime' => 3600,
  'version' => 'Smarty-3.1.17',
  'unifunc' => 'content_543fbefb71b901_97407239',
  'has_nocache_code' => false,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_543fbefb71b901_97407239')) {function content_543fbefb71b901_97407239($_smarty_tpl) {?><!DOCTYPE html>
<html>
<head>
  <meta http-equiv="Content-Type" content="text/html;charset=utf-8">
  <meta name="author" content="John F. Dunham">  
  <link href="styles/portfolio.css" rel="stylesheet" type="text/css">
  <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
  <script src="scripts/portfolioBase.js" type="text/javascript"></script>
  
	
	  <script src="scripts/portfolioGallery.js" type="text/javascript"></script>
	  <script>
		window.onload = function(){
			updateSidebar();
			loadImages('<br />
<b>Notice</b>:  Undefined index: files in <b>C:\xampp\smarty\libs\sysplugins\smarty_internal_templatebase.php(165) : eval()'d code</b> on line <b>43</b><br />
<br />
<b>Notice</b>:  Trying to get property of non-object in <b>C:\xampp\smarty\libs\sysplugins\smarty_internal_templatebase.php(165) : eval()'d code</b> on line <b>43</b><br />
');
		};

		$(window).resize(function(){
			updateSidebar();
			resizeGallery();
		});
	  </script>
  

  <title>Login</title> 
  <link rel="icon" 
      type="image/png" 
      href="favicon.ico">
</head>  
<body>
	<div id="header">        
        <ul>
            <li id="home"><a href ="index.php">About</a></li>
            <li id="portfolio"><a href ="portfolio.php">Portfolio</a></li>
            <li id="blog"><a href="http://www.johndunhamgames.com/blog">Blog</a></li>
        </ul>       
    </div>
	<div id= "content_area">
		<div id = "left_sidebar" class = "sidebar">
		</div>
		<div id = "right_sidebar" class = "sidebar">			
		</div>	
		<div id="mainBody" class="content">
			<div id="content_box">
				
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
				
			</div>		
			<div class="footer">
				Copyright &#169; 2014 All Rights Reserved - John Dunham
			</div>
		</div>		
	</div>		
</body>
</html>
<?php }} ?>

<?php /* Smarty version Smarty-3.1.17, created on 2014-09-23 09:00:25
         compiled from "./templates/index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:20140318895327d244da53e9-78492275%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c0360d049dff10f364dfc53ba2cc3958abf6ee6d' => 
    array (
      0 => './templates/index.tpl',
      1 => 1411483283,
      2 => 'file',
    ),
    'd727a2f7c0bda098bc7da6c28169b69f69e5ee74' => 
    array (
      0 => './templates/base.tpl',
      1 => 1411483282,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '20140318895327d244da53e9-78492275',
  'function' => 
  array (
  ),
  'cache_lifetime' => 3600,
  'version' => 'Smarty-3.1.17',
  'unifunc' => 'content_5327d245169c51_69563536',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5327d245169c51_69563536')) {function content_5327d245169c51_69563536($_smarty_tpl) {?><!DOCTYPE html>
<html>
<head>
  <meta http-equiv="Content-Type" content="text/html;charset=utf-8">
  <meta name="author" content="John F. Dunham">  
  <link href="styles/portfolio.css" rel="stylesheet" type="text/css">
  <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
  <script src="scripts/portfolioBase.js" type="text/javascript"></script>
  <script></script>
  <title>About</title> 
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
		<div id = "left_sidebar" class = "sidebar"></div>
		<div id = "right_sidebar" class = "sidebar"> </div>	
		<div id="mainBody" class="content">
			<div id="content_box">
				
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
				
			</div>		
			<div class="footer">
				Copyright &#169; 2014 All Rights Reserved - John Dunham
			</div>
		</div>		
	</div>		
</body>
</html>
<?php }} ?>

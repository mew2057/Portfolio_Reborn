<?php /* Smarty version Smarty-3.1.17, created on 2014-09-24 09:17:43
         compiled from "./templates/entry.tpl" */ ?>
<?php /*%%SmartyHeaderCode:17751333825327d2d5ccd440-30444912%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a30db792207d335384c03d167f90c2a3ecfe56cf' => 
    array (
      0 => './templates/entry.tpl',
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
  'nocache_hash' => '17751333825327d2d5ccd440-30444912',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.17',
  'unifunc' => 'content_5327d2d6485506_84529144',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5327d2d6485506_84529144')) {function content_5327d2d6485506_84529144($_smarty_tpl) {?><!DOCTYPE html>
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
			loadImages('<?php echo $_smarty_tpl->tpl_vars['files']->value;?>
');
		};

		$(window).resize(function(){
			updateSidebar();
			resizeGallery();
		});
	  </script>
  

  <title><?php echo $_smarty_tpl->tpl_vars['entry']->value['Name'];?>
</title> 
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
				
<div class="project_header">					
	<div class="title"><?php echo $_smarty_tpl->tpl_vars['entry']->value['Name'];?>
</div>
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
		<tr><td>Project Type:</td> <td><?php echo $_smarty_tpl->tpl_vars['entry']->value['Type'];?>
</td></tr>
		<tr><td>Platform:</td> <td><?php echo $_smarty_tpl->tpl_vars['entry']->value['Platform'];?>
</td></tr>
		<tr><td>Team:</td> <td><?php echo $_smarty_tpl->tpl_vars['entry']->value['Team'];?>
</td></tr>
		<tr><td>Date:</td> <td><?php echo $_smarty_tpl->tpl_vars['entry']->value['Date'];?>
</td></tr>
		<tr><td><?php echo $_smarty_tpl->tpl_vars['entry']->value['Links'];?>
</td></tr>
	</table>
	<h2>Description:</h2>
	<div class="description"><p><?php echo $_smarty_tpl->tpl_vars['entry']->value['Description'];?>
</p></div>
	
	<h2>What I did:</h2>
	<div class="done"><ul><?php echo $_smarty_tpl->tpl_vars['entry']->value['Done'];?>
</ul></div>
	</td></tr>	 
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

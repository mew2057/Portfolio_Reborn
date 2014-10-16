<?php /* Smarty version Smarty-3.1.17, created on 2014-10-16 04:57:25
         compiled from ".\templates\entry.tpl" */ ?>
<?php /*%%SmartyHeaderCode:429543f341536bd78-06887024%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '33aa97b514c86b03ed5ca70e5711bd5cb24098f2' => 
    array (
      0 => '.\\templates\\entry.tpl',
      1 => 1413418789,
      2 => 'file',
    ),
    '50da811edd0e07e65507282cf2fea5e9d6f55598' => 
    array (
      0 => '.\\templates\\base.tpl',
      1 => 1413415511,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '429543f341536bd78-06887024',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.17',
  'unifunc' => 'content_543f3415433c57_71070713',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_543f3415433c57_71070713')) {function content_543f3415433c57_71070713($_smarty_tpl) {?><!DOCTYPE html>
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

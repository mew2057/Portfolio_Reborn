<?php /* Smarty version Smarty-3.1.17, created on 2014-10-17 16:46:16
         compiled from ".\templates\entry_edit.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1341054412bb81f3355-19367855%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4249f0a4e97916e6163a905f622981f06c14463c' => 
    array (
      0 => '.\\templates\\entry_edit.tpl',
      1 => 1413555754,
      2 => 'file',
    ),
    '50da811edd0e07e65507282cf2fea5e9d6f55598' => 
    array (
      0 => '.\\templates\\base.tpl',
      1 => 1413555754,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1341054412bb81f3355-19367855',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.17',
  'unifunc' => 'content_54412bb826f599_50362373',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54412bb826f599_50362373')) {function content_54412bb826f599_50362373($_smarty_tpl) {?><!DOCTYPE html>
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
            <li id="home"><a href ="about.php">About</a></li>
            <li id="portfolio"><a href ="index.php">Portfolio</a></li>
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
	<form method="post" action="update.php">
		<input type="hidden" name="id" value=<?php echo $_smarty_tpl->tpl_vars['entry']->value['id'];?>
 />
		<table>
        	<tr><td>User Name:</td><td> <input name="user" type="text"></input> </td></tr>
			<tr><td>Password:</td><td> <input name="pass" type="password"></input> </td></tr>
			<tr><td>Title:</td><td> <textarea name="Name"><?php echo $_smarty_tpl->tpl_vars['entry']->value['Name'];?>
</textarea> </td></tr>
			<tr><td>Images:</td><td> <textarea name="Images"><?php echo $_smarty_tpl->tpl_vars['entry']->value['Images'];?>
</textarea> </td></tr>
			<tr><td>Project Type:</td><td> <textarea name="Type"><?php echo $_smarty_tpl->tpl_vars['entry']->value['Type'];?>
</textarea> </td></tr>
			<tr><td>Platform:</td> <td> <textarea name="Platform"><?php echo $_smarty_tpl->tpl_vars['entry']->value['Platform'];?>
</textarea> </td></tr>
			<tr><td>Team:</td> <td> <textarea name="Team"><?php echo $_smarty_tpl->tpl_vars['entry']->value['Team'];?>
</textarea> </td></tr>
			<tr><td>Date:</td> <td> <textarea name="Date"><?php echo $_smarty_tpl->tpl_vars['entry']->value['Date'];?>
</textarea> </td></tr>
			<tr><td></td><td> <textarea name="Links"><?php echo $_smarty_tpl->tpl_vars['entry']->value['Links'];?>
</textarea> </td></tr>
		</table>
		<h2>Description:</h2>
		<textarea name="Description"><?php echo $_smarty_tpl->tpl_vars['entry']->value['Description'];?>
</textarea> 
		
		<h2>What I did:</h2>
		<textarea name="Done"><?php echo $_smarty_tpl->tpl_vars['entry']->value['Done'];?>
</textarea>
		<br/>
		<input type="submit" name="entry" value="Submit"/>

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

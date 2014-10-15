<?php /* Smarty version Smarty-3.1.17, created on 2014-09-23 09:00:26
         compiled from "./templates/portfolio.tpl" */ ?>
<?php /*%%SmartyHeaderCode:16414984145327d2d1810c32-30203783%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '66be3f05849dcad25f53f2720701b6386b99b74d' => 
    array (
      0 => './templates/portfolio.tpl',
      1 => 1411483284,
      2 => 'file',
    ),
    'd727a2f7c0bda098bc7da6c28169b69f69e5ee74' => 
    array (
      0 => './templates/base.tpl',
      1 => 1411483282,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '16414984145327d2d1810c32-30203783',
  'function' => 
  array (
  ),
  'cache_lifetime' => 3600,
  'version' => 'Smarty-3.1.17',
  'unifunc' => 'content_5327d2d1bf6ae8_78954747',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5327d2d1bf6ae8_78954747')) {function content_5327d2d1bf6ae8_78954747($_smarty_tpl) {?><!DOCTYPE html>
<html>
<head>
  <meta http-equiv="Content-Type" content="text/html;charset=utf-8">
  <meta name="author" content="John F. Dunham">  
  <link href="styles/portfolio.css" rel="stylesheet" type="text/css">
  <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
  <script src="scripts/portfolioBase.js" type="text/javascript"></script>
  <script></script>
  <title>Portfolio</title> 
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
				
<div id="games" class="project_box">
	<?php  $_smarty_tpl->tpl_vars['entry'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['entry']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['entries']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['entry']->key => $_smarty_tpl->tpl_vars['entry']->value) {
$_smarty_tpl->tpl_vars['entry']->_loop = true;
?>
	<div class="entry_portfolio"><div class="entry_header_portfolio"><div class="image"><a href="entry.php?id=<?php echo $_smarty_tpl->tpl_vars['entry']->value['id'];?>
"><img alt=<?php echo $_smarty_tpl->tpl_vars['entry']->value['Name'];?>
 height="256" src=<?php echo $_smarty_tpl->tpl_vars['entry']->value['Images'];?>
/small.png width="256"></a></div><div class="title"><a href="entry.php?id=<?php echo $_smarty_tpl->tpl_vars['entry']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['entry']->value['Name'];?>
</a></div><div class="details"><table><tr><td>Project Type:</td><td><?php echo $_smarty_tpl->tpl_vars['entry']->value['Type'];?>
</td></tr><tr><td>Platform:</td><td><?php echo $_smarty_tpl->tpl_vars['entry']->value['Platform'];?>
</td></tr></table></div></div></div>
	<?php } ?>
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

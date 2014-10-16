<?php /* Smarty version Smarty-3.1.17, created on 2014-10-16 14:32:20
         compiled from ".\templates\index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:31703543f361c150d69-89529340%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '749422d4cfc3eb5677cf499730392b6accd4d1c7' => 
    array (
      0 => '.\\templates\\index.tpl',
      1 => 1413462248,
      2 => 'file',
    ),
    '50da811edd0e07e65507282cf2fea5e9d6f55598' => 
    array (
      0 => '.\\templates\\base.tpl',
      1 => 1413462248,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '31703543f361c150d69-89529340',
  'function' => 
  array (
  ),
  'cache_lifetime' => 3600,
  'version' => 'Smarty-3.1.17',
  'unifunc' => 'content_543f361c1bcd31_33861676',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_543f361c1bcd31_33861676')) {function content_543f361c1bcd31_33861676($_smarty_tpl) {?><!DOCTYPE html>
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
		<div id = "left_sidebar" class = "sidebar">
		</div>
		<div id = "right_sidebar" class = "sidebar">			
		</div>	
		<div id="mainBody" class="content">
			<div id="content_box">
				
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
<?php $_smarty_tpl->tpl_vars['showcase'] = new Smarty_variable(array(11,10,4), null, 0);?>
<?php  $_smarty_tpl->tpl_vars['id'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['id']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['showcase']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['id']->key => $_smarty_tpl->tpl_vars['id']->value) {
$_smarty_tpl->tpl_vars['id']->_loop = true;
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

<!--	
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

</div>-->
				
			</div>		
			<div class="footer">
				Copyright &#169; 2014 All Rights Reserved - John Dunham
			</div>
		</div>		
	</div>		
</body>
</html>
<?php }} ?>

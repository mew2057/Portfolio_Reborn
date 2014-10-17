<?php /* Smarty version Smarty-3.1.17, created on 2014-10-17 19:47:35
         compiled from ".\templates\portfolio.tpl" */ ?>
<?php /*%%SmartyHeaderCode:19609544125e73e8672-21001345%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4bcb6a997dd897f6a9b49bb23951f24b380161bc' => 
    array (
      0 => '.\\templates\\portfolio.tpl',
      1 => 1413555753,
      2 => 'file',
    ),
    '50da811edd0e07e65507282cf2fea5e9d6f55598' => 
    array (
      0 => '.\\templates\\base.tpl',
      1 => 1413568003,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '19609544125e73e8672-21001345',
  'function' => 
  array (
  ),
  'cache_lifetime' => 3600,
  'version' => 'Smarty-3.1.17',
  'unifunc' => 'content_544125e7458ef3_61987668',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_544125e7458ef3_61987668')) {function content_544125e7458ef3_61987668($_smarty_tpl) {?><!DOCTYPE html>
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
	<div id="web_name">John Dunham <div>A gameplay programmer with a passion for user experience</div></div>

	<div id="header">       

        <nav>
			<a href ="index.php">Portfolio</a> |
			<a href ="mailto:john@johndunhamgames.com">Email</a> |
			<a href ="http://johndunhamgames.com/other/Resume.pdf">Resume</a> |
			<a href ="https://bitbucket.org/mew2057">BitBucket</a> |
			<a href ="https://www.linkedin.com/in/jfdunham">LinkedIn</a> |
            <a href ="http://www.johndunhamgames.com/blog">Blog</a> 
		</nav> 
    </div>
	<div id= "content_area">
		<div id = "left_sidebar" class = "sidebar">		
		</div>
		<div id = "right_sidebar" class = "sidebar">			
		</div>	
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

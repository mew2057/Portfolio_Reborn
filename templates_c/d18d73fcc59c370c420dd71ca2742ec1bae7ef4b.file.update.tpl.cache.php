<?php /* Smarty version Smarty-3.1.17, created on 2014-09-23 08:43:38
         compiled from "./templates/update.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1431436873542185ed465111-14703196%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd18d73fcc59c370c420dd71ca2742ec1bae7ef4b' => 
    array (
      0 => './templates/update.tpl',
      1 => 1411483411,
      2 => 'file',
    ),
    'd727a2f7c0bda098bc7da6c28169b69f69e5ee74' => 
    array (
      0 => './templates/base.tpl',
      1 => 1411483282,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1431436873542185ed465111-14703196',
  'function' => 
  array (
  ),
  'cache_lifetime' => 3600,
  'version' => 'Smarty-3.1.17',
  'unifunc' => 'content_542185ed574d05_46499769',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_542185ed574d05_46499769')) {function content_542185ed574d05_46499769($_smarty_tpl) {?><!DOCTYPE html>
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
<div class="summary">
    <form>
        <tr>Project Type: <input type="text" name="Type"></br>
        Platform: <input type="text" name="Platform"></br>
        Team:<input type="text" name="Team"></br>
        Date:<input type="text" name="Date"></br>
        Links:<input type="text" name="Links"></br>  
        
        Description:</br>
        <textarea name="Description"></textarea><br>
        
        What I Did:</br>
        <textarea name="Done"></textarea><br>
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

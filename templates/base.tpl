<!DOCTYPE html>
<html>
<head>
  <meta http-equiv="Content-Type" content="text/html;charset=utf-8">
  <meta name="author" content="John F. Dunham">  
  <link href="styles/portfolio.css" rel="stylesheet" type="text/css">
  <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
  <script src="scripts/portfolioBase.js" type="text/javascript"></script>
  {block name=scripts}<script></script>{/block}
  <title>{block name=title}Default Title{/block}</title> 
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
				{block name=mainBody}Default Body{/block}				
			</div>		
			<div class="footer">
				Copyright &#169; 2014 All Rights Reserved - John Dunham
			</div>
		</div>		
	</div>		
</body>
</html>

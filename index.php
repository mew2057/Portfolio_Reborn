<?php
include('Smarty.class.php');

$entries = array();

mysql_connect("localhost", "johndunh_generic", "password1234");
mysql_select_db("johndunh_portfolio");
$ret = mysql_query('SELECT * FROM portfolio');

while($row = mysql_fetch_assoc($ret)){
     $entries[] = $row;
}
// create object
$smarty = new Smarty;
$smarty->compile_check = true;
$smarty->debugging = false;
$smarty->caching = true; 

$smarty->assign('entries', $entries);

// display it
	if( isset( $_GET["edit"] ) )
	{
		$smarty->display('portfolio_edit.tpl');
		
	}
	else
	{
		$smarty->display('portfolio.tpl');
	}	

mysql_close();
?>
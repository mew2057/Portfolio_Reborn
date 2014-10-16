<?php
include('Smarty.class.php');

$entries = array();
$db = new SQLite3('db/portfolioEntries.sqlite3');

$ret = $db->query('SELECT * FROM portfolio');

while($row = $ret->fetchArray(SQLITE3_ASSOC) ){
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

$db->close();
?>
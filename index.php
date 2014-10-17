<?php
	include('Smarty.class.php');

	$features = array();
	$others   = array();

	mysql_connect("localhost", "johndunh_generic", "password1234");
	mysql_select_db("johndunh_portfolio");
	$ret = mysql_query('SELECT * FROM portfolio');

	while($row = mysql_fetch_assoc($ret)){
		if($row['Featured'] == 1)
			$features[] = $row;
		else
			$others[] = $row;
	}
	// create object
	$smarty = new Smarty;
	$smarty->compile_check = true;
	$smarty->debugging = false;
	$smarty->caching = true; 

	$smarty->assign('features', $features);
	$smarty->assign('others', $others);

	// display it
	if( isset( $_GET["edit"] ) )
		$smarty->display('portfolio_edit.tpl');
	else
		$smarty->display('portfolio.tpl');

	mysql_close();
?>
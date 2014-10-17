<?php
include('Smarty.class.php');

$id = $_GET["id"];
mysql_connect("localhost", "johndunh_generic", "password1234");
mysql_select_db("johndunh_portfolio");
$ret = mysql_fetch_array(mysql_query('SELECT * FROM portfolio WHERE id="' . $id . '"'));

// create object
$smarty = new Smarty;
$smarty->compile_check = true;
$smarty->debugging = false;
$smarty->assign('entry', $ret);

// display it
if($ret == NULL){
  header('HTTP/1.1 404 Not Found'); //This may be put inside err.php instead
  $_GET['e'] = 404; //Set the variable for the error code (you cannot have a
                    // querystring in an include directive).
  $smarty->display('404.tpl');
  exit; //Do not do any more work in this script.
}
else{
	$files = glob($ret['Images'] . '/[0-9]*.{PNG,png,jpeg,jpg,gif}',GLOB_BRACE );
	$smarty->assign('files', implode(",",$files));
	
	if( isset( $_GET["edit"] ) )
	{
		$smarty->display('entry_edit.tpl');
	}
	else
	{
		$smarty->display('entry.tpl');
	}
}

mysql_close();
?>
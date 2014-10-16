<?php
include('Smarty.class.php');

// create object
$smarty = new Smarty;
$smarty->compile_check = true;
$smarty->debugging = false;
$smarty->caching = true; 
// display it
$smarty->display('about.tpl');
?>

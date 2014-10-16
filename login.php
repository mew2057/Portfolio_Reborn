<?php
include('Smarty.class.php');

// create object
$smarty = new Smarty;
$smarty->compile_check = true;
$smarty->debugging = false;
$smarty->caching = true; 
// display it
echo password_hash("Wodahs17", PASSWORD_DEFAULT)."\n";

$smarty->display('login.tpl');

?>
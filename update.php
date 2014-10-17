<?php
$db = mysql_connect(localhost);


include('Smarty.class.php');
$smarty = new Smarty;
$smarty->clearAllCache();

mysql_connect("localhost", "johndunh_" . $_POST['user'], $_POST['pass'] );
mysql_select_db("johndunh_portfolio");

if(!mysql_ping ())
{
    echo "failed";
}
if(isset($_POST['entry']))
{
	$id = mysql_real_escape_string ($_POST['id']);
	$Name = mysql_real_escape_string ($_POST['Name']);
	$Images = mysql_real_escape_string ($_POST['Images']);
	$Team = mysql_real_escape_string ($_POST['Team']);
	$Type = mysql_real_escape_string ($_POST['Type']);
	$Platform = mysql_real_escape_string ($_POST['Platform']);
	$Date = mysql_real_escape_string ($_POST['Date']);
	$Links = mysql_real_escape_string ($_POST['Links']);
	$Description = mysql_real_escape_string ($_POST['Description']);
	$Done = mysql_real_escape_string ($_POST['Done']);
	
	
	$setQuery = 
	'UPDATE portfolio 
	SET Name=\'' . $Name . '\', Images=\'' . $Images . '\', Team=\'' . $Team . '\', Type=\'' . $Type . '\', Platform=\'' . $Platform . '\', Date=\'' . 
		$Date . '\', Links=\'' . $Links . '\', Description=\'' . $Description . '\', Done=\'' . $Done . '\' 
	WHERE id="' . $id . '"';
	mysql_query($setQuery);
	header('Location:entry.php?id='.$id.'&edit');
}
else if(isset($_POST['create']))
{
	$Name = '*Insert Content Here*';
	$Images = '*Insert Content Here*';
	$Type = '*Insert Content Here*';
	$Platform = '*Insert Content Here*';
	$Date = '*Insert Content Here*';
	$Links ='*Insert Content Here*';
	$Description = '*Insert Content Here*';
	$Done = '*Insert Content Here*';
	
	$setQuery = 'INSERT INTO portfolio ( Name, Images, Type, Platform, Date, Links, Description, Done )'.
	'VALUES (\'' . $Name . '\',\'' . $Images . '\',\'' . $Type . '\',\'' . $Platform . '\',\'' . 
		$Date . '\',\'' . $Links . '\',\'' . $Description . '\',\'' . $Done . '\') ';
		echo $setQuery;
	mysql_query($setQuery);
	
	$ret = $db->querySingle('SELECT * FROM portfolio WHERE Name="' . $Name . '"', true);
	header('Location:entry.php?id='.$ret['id'].'&edit');
}
else if (isset($_POST['index']))
{

}
?>
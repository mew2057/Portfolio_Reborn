<?php
$db = new SQLite3('db/portfolioEntries.sqlite3');
include('Smarty.class.php');
$smarty = new Smarty;
$smarty->clearAllCache();

if(isset($_POST['entry']))
{
	$id = SQLite3::escapeString($_POST['id']);
	$Name = SQLite3::escapeString($_POST['Name']);
	$Images = SQLite3::escapeString($_POST['Images']);
	$Team = SQLite3::escapeString($_POST['Team']);
	$Type = SQLite3::escapeString($_POST['Type']);
	$Platform = SQLite3::escapeString($_POST['Platform']);
	$Date = SQLite3::escapeString($_POST['Date']);
	$Links = SQLite3::escapeString($_POST['Links']);
	$Description = SQLite3::escapeString($_POST['Description']);
	$Done = SQLite3::escapeString($_POST['Done']);
	
	
	$setQuery = 
	'UPDATE portfolio 
	SET Name=\'' . $Name . '\', Images=\'' . $Images . '\', Team=\'' . $Team . '\', Type=\'' . $Type . '\', Platform=\'' . $Platform . '\', Date=\'' . 
		$Date . '\', Links=\'' . $Links . '\', Description=\'' . $Description . '\', Done=\'' . $Done . '\' 
	WHERE id="' . $id . '"';
	$entry = $db->querySingle($setQuery);
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
	$db->querySingle($setQuery);
	
	$ret = $db->querySingle('SELECT * FROM portfolio WHERE Name="' . $Name . '"', true);
	header('Location:entry.php?id='.$ret['id'].'&edit');
}
else if (isset($_POST['index']))
{

}
?>
<?php
$db = new SQLite3('db/portfolioEntries.sqlite3');

if(isset($_POST['entry']))
{
	$id = SQLite3::escapeString($_POST['id']);
	$Name = SQLite3::escapeString($_POST['Name']);
	$Images = SQLite3::escapeString($_POST['Images']);
	$Type = SQLite3::escapeString($_POST['Type']);
	$Platform = SQLite3::escapeString($_POST['Platform']);
	$Date = SQLite3::escapeString($_POST['Date']);
	$Links = SQLite3::escapeString($_POST['Links']);
	$Description = SQLite3::escapeString($_POST['Description']);
	$Done = SQLite3::escapeString($_POST['Done']);
	
	
	$setQuery = 
	'UPDATE portfolio 
	SET Name=\'' . $Name . '\', Images=\'' . $Images . '\', Type=\'' . $Type . '\', Platform=\'' . $Platform . '\', Date=\'' . 
		$Date . '\', Links=\'' . $Links . '\', Description=\'' . $Description . '\', Done=\'' . $Done . '\' 
	WHERE id="' . $id . '"';
	//$setQuery = str_replace("/","\/",$setQuery);
	echo $setQuery;
	$entry = $db->querySingle($setQuery);
	
	header('Location:entry.php?id='.$id.'&edit');
}

if(isset($_POST['create']))
{
	//$id = 0;//SQLite3::escapeString(htmlspecialchars($_POST['id']));
	$Name = '*Insert Content Here*';
	$Images = '*Insert Content Here*';
	$Type = '*Insert Content Here*';
	$Platform = '*Insert Content Here*';
	$Date = '*Insert Content Here*';
	$Links ='*Insert Content Here*';
	$Description = '*Insert Content Here*';
	$Done = '*Insert Content Here*';
	
	$setQuery = 'INSERT INTO portfolio ( Name, Images, Type, Platform, Date, Links, Description, Done )'.
	'VALUES (\',\'' . $Name . '\',\'' . $Images . '\',\'' . $Type . '\',\'' . $Platform . '\',\'' . 
		$Date . '\',\'' . $Links . '\',\'' . $Description . '\',\'' . $Done . '\') ';
	echo $setQuery;
	
	$alterKey = 'ALTER TABLE portfolio MODIFY COLUMN id INTEGER PRIMARY KEY'
	 $db->querySingle($alterKey);
}



?>
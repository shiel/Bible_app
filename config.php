<?php
$conn= array(
	'host' =>'localhost',
	'username' => 'root',
	'password' => '',
	'database' => 'Bible'
	);
 $db = new mysqli(
 	$conn['host'],
 	$conn['username'],
 	$conn['password'],
 	$conn['database']
	);
if(mysqli_connect_errno()){
	echo 'Could not connect to the Database.';
	exit;
}
?>

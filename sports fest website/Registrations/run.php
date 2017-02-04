<?php
	
	define("DB_NAME", "");
	define("DB_USER", "");
	define("DB_PASSWORD", "");
	define("DB_HOST", "localhost");
	
$link = @mysql_connect(DB_HOST , DB_USER , DB_PASSWORD);
	if(!$link) {
	die('Could not connect:'.mysql_error());
	}
	
$db_selected = mysql_select_db (DB_NAME, $link);
	if(!$db_selected) {
	die('cant use'.DB_NAME.':'.mysql_error());
	}
$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$sex = $_POST['sex'];
$sport = $_POST['sport'];
$college = $_POST['college'];
$contact = $_POST['contact'];
$email = $_POST['email'];
$header1 = 'Successfuly Rrgistered for Pearl 15';

$sql = "INSERT INTO registration (firstname , lastname , sex , sport , college , contact , email) VALUE ('$firstname' , '$lastname' , '$sex' , '$sport' , '$college' , '$contact' , '$email')";
if(!mysql_query($sql)) {
die ('Error :'.mysql_error());
}
header('Location: thankyou.php');
mysql_close();
?>
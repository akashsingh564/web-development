<?php
	
	define("DB_NAME", "site");
	define("DB_USER", "root");
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
$message = <<<EMAIL
Thankyou $firstname $lastname for registering for $sport for Arena 15.
Following are the details for the registration:
First Name: $firstname
Last name: $lastname
Sport: $sport
College: $college
Contact No.:$contact.
https://docs.google.com/forms/d/1EtZZAKWV_8_00TsU43l7Qn1z26HjYOveTVvCIbTmUAw/viewform
Arena Team.
EMAIL;
$header1 = 'Successfuly Rrgistered for Arena 15';

$sql = "INSERT INTO registration (firstname , lastname , sex , sport , college , contact , email) VALUE ('$firstname' , '$lastname' , '$sex' , '$sport' , '$college' , '$contact' , '$email')";
if(!mysql_query($sql)) {
die ('Error :'.mysql_error());
}
mail ($email, 'Aerena Registratuon',$message,$header1);
header('Location: form2.php');
mysql_close();
?>
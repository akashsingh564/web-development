<?php
// A class file to connect to database
class DB_CONNECT{
	// Constructor
	//Notes abt constructor and destructor at last	
	function __construct(){
		//Connecting to database
		//Opening database
		$this->connect();
	}

	// Destructor
	function __destruct(){
		//Closing database
		$this->close();
	}

	// Function to connect with database

	function connect(){
		// import database connection variables
		require_once __DIR__.'/db_config.php';

		//Connecting to mysql server
		 $con = mysql_connect(DB_SERVER, DB_USER, DB_PASSWORD)  or die(mysql_error());

		// Selecting database
		$db = mysql_select_db(DB_DATABASE)  or die(mysql_error()) or die(mysql_error());

		//returning connection curser

		return $con;

	}

	//Function to close db_connection
	function close(){
		mysql_close();
	}

}

/* Whenever u want to connect to my_sql database and do some operations use the db_connect.php class like this

$db = new DB_CONNECT();  // Creating class object will open database connection

CONSTRUCTORS AND DESTRUCTORS

A Constructor and destructors are special functions which are automatically called when an object is created and desroyed

A Destructor is called when the object is destroyed In some programming languages we have to manually dispose the objects
that we created but in PHP it is handled by Garbage Collector which keeps an eye on the objects and automatically destroyes 
when they are no longer needed 

*/

?>




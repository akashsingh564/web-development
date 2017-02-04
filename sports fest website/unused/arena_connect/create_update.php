<?php
// create_product.php
/* in this code we read product data via POST and store then 
in updates table and at the end we echo  appropriate JSON as 
response*/

//All product details are read from HTTP POST request

//array for JSON response

$response = array();

//check for the required fields
if( isset($_POST['main_title']) && isset($_POST['sub_title']) && isset($_POST['message']) ){
	$main_title = $_POST['main_title'];
	$sub_title =$_POST['sub_title'];
	$message = $_POST['message'];

	//include db_connect class
	require_once __DIR__ . '/db_connect.php';
	//connecting to db

	$db = new DB_CONNECT();

	//MySQL inserting new row 

	$result = mysql_query("INSERT INTO updates(main_title,sub_title,message) VALUES('$main_title','$sub_title','$message')");

	//check if row is inserted or not

	if ($result) {
		// sucessfully inserted into database
		$response["success"] = 1;
		$response["message"] = "Update successfully created";

		//echoing json response

		echo json_encode($response);
	}else{
		// failed to insert new row
		$response["success"] = 0;
		$response["message"] = "Oops ! an error occured";

		// echoing json response

		echo json_encode($response);
	}
}else{
	// required field is missing
	$response["success"] = 0;
	$response["message"] = "Required field(s) is missing";	

	// echoing json response

	echo json_encode($response);

}

?>
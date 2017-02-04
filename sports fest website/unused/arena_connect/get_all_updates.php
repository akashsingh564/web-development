<?php
// this is to list all the updates

// array for json responses 

$response = array();

// include db_connect class
require_once __DIR__.'/db_connect.php';


//connecting to db

$db = new DB_CONNECT();

//get all the updates from updates table

$result = mysql_query("SELECT * FROM updates") or die(mysql_error());


// check for empty result

if (mysql_num_rows($result)>0) {
	// looping through all results
	// updates node

	$response["updates"] = array();

	while ($row = mysql_fetch_array($result)) {
		// temp user array
		$update = array();
		$update["uid"] = $row["uid"];
        $update["main_title"] = $row["main_title"];
        $update["sub_title"] = $row["sub_title"];
        $update["message"] = $row["message"];
        $update["created_at"] = $row["created_at"];
        $update["updated_at"] = $row["updated_at"];
 
        // push single update into final response array
        array_push($response["updates"], $update);

	}
	// success
	$response["success"] = 1;

	// echoing json response
	echo json_encode($response);


}else{
	// no updates found
	$response["success"] = 0;
	$response["message"] = "No updates found";
	// echo no users JSON
	echo json_encode($response);
}
?>
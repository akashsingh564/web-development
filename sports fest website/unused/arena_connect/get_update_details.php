<?php
 
/*
 * Following code will get single update details
 * A update is uidentified by update uid (uid)
 */
 
// array for JSON response
$response = array();
 
// include db connect class
require_once __DIR__ . '/db_connect.php';
 
// connecting to db
$db = new DB_CONNECT();
 
// check for post data
if (isset($_GET["uid"])) {
    $uid = $_GET['uid'];
 
    // get a update from updates table
    $result = mysql_query("SELECT *FROM updates WHERE uid = $uid");
 
    if (!empty($result)) {
        // check for empty result
        if (mysql_num_rows($result) > 0) {
 
            $result = mysql_fetch_array($result);
 
            $update = array();
            $update["uid"] = $result["uid"];
            $update["main_title"] = $result["main_title"];
            $update["sub_title"] = $result["sub_title"];
            $update["message"] = $result["message"];
            $update["created_at"] = $result["created_at"];
            $update["updated_at"] = $result["updated_at"];
            // success
            $response["success"] = 1;
 
            // user node
            $response["update"] = array();
 
            array_push($response["update"], $update);
 
            // echoing JSON response
            echo json_encode($response);
        } else {
            // no update found
            $response["success"] = 0;
            $response["message"] = "No update found";
 
            // echo no users JSON
            echo json_encode($response);
        }
    } else {
        // no update found
        $response["success"] = 0;
        $response["message"] = "No update found";
 
        // echo no users JSON
        echo json_encode($response);
    }
} else {
    // required field is missing
    $response["success"] = 0;
    $response["message"] = "Required field(s) is missing";
 
    // echoing JSON response
    echo json_encode($response);
}
?>
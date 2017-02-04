<?php
 
/*
 * Following code will update a update information
 * A update is uidentified by update uid (uid)
 */
 
// array for JSON response
$response = array();
 
// check for required fields
if (isset($_POST['uid']) && isset($_POST['main_title']) && isset($_POST['sub_title']) && isset($_POST['message'])) {
 
    $uid = $_POST['uid'];
    $main_title = $_POST['main_title'];
    $sub_title = $_POST['sub_title'];
    $message = $_POST['message'];
 
    // include db connect class
    require_once __DIR__ .'/db_connect.php';
 
    // connecting to db
    $db = new DB_CONNECT();
 
    // mysql update row with matched uid
    $result = mysql_query("UPDATE updates SET main_title = '$main_title', sub_title = '$sub_title', message = '$message' WHERE uid = $uid");
 
    // check if row inserted or not
    if ($result) {
        // successfully updated
        $response["success"] = 1;
        $response["message"] = "update successfully updated.";
 
        // echoing JSON response
        echo json_encode($response);
    } else {
 
    }
} else {
    // required field is missing
    $response["success"] = 0;
    $response["message"] = "Required field(s) is missing";
 
    // echoing JSON response
    echo json_encode($response);
}
?>
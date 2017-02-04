<?php
 
/*
 * Following code will delete a update from table
 * A update is uidentified by update uid (uid)
 */
 
// array for JSON response
$response = array();
 
// check for required fields
if (isset($_POST['uid'])) {
    $uid = $_POST['uid'];
 
    // include db connect class
    require_once __DIR__ . '/db_connect.php';
 
    // connecting to db
    $db = new DB_CONNECT();
 
    // mysql update row with matched uid
    $result = mysql_query("DELETE FROM updates WHERE uid = $uid");
 
    // check if row deleted or not
    if (mysql_affected_rows() > 0) {
        // successfully updated
        $response["success"] = 1;
        $response["message"] = "update successfully deleted";
 
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
    // required field is missing
    $response["success"] = 0;
    $response["message"] = "Required field(s) is missing";
 
    // echoing JSON response
    echo json_encode($response);
}
?>
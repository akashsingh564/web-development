<!DOCTYPE HTML5>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<title>ATMOS - 2015 | Registration</title>   
    <link rel="shortcut icon" href="favicon.ico">
	<meta name="description" content="ATMOS is the annual techno management fest of BITS Pilani Hyderabad Campus" /> 
    <meta name="keywords" content="ATMOS,techno management fest, BITS Pilani">
    <meta name="author" content="Akash Singh">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="HandheldFriendly" content="true"/>
	<meta name="MobileOptimized" content="320"/>  
	<script type="text/javascript" src="http://code.jquery.com/jquery-1.11.1.js"></script>
	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="style1.css">
</head>	

<body>
	<div class="outer">
		<p>Welcome to the Frontier, your registration id is :</p>
		<?php
			$servername = "localhost";
			$username = "root";
			$password = "";
			$dbname = "ATMOS-offline_registration";

			$conn = new mysqli($servername, $username, $password, $dbname);
			if ($conn->connect_error) {
				 die("Connection failed: " . $conn->connect_error);
			} 

			$sql = "SELECT * FROM registrations ORDER BY id DESC LIMIT 1;";
			$result = $conn->query($sql);

			if ($result->num_rows > 0) {
				 while($row = $result->fetch_array()) {
					 echo "<p class='id'>atm15" . " " . $row['ambassador'] . " " . $row['id'] ."<br></p>";
				 }
			} else {
				 echo "0 results";
			}

			$conn->close();
		?>
		<a href="index.php" class="back_link">Make another registration</a>
	</div>
</body>
</html>
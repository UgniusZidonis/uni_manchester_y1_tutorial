<html>
<head>
</head>
<body>
<?php
include 'config.inc.php';
$found = false;

$conn = new mysqli($database_host, $database_user, $database_pass, $database_name);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Select from table by Name
if($stmt = $conn->prepare("SELECT * FROM 101_Z7 WHERE Name=?")) {
	$stmt->bind_param("s", $_POST["name"]); 
	$stmt->execute();
	// If in db
	if ($stmt->fetch()){
		$found = true;
        	echo "Welcome, comrade ", $_POST["name"], "<br>";
        	echo "Your email: ", $_POST["email"], "<br>";
	}
}

// If not in db
if($found == false){
        echo "Welcome, stranger ", $_POST["name"], "<br>";
	// Insert into table
	if($stmt = $conn->prepare("INSERT INTO 101_Z7(Name, Email) Values(?,?)")) {
		$stmt->bind_param("ss", $_POST["name"], $_POST["email"]); 
		$stmt->execute(); 
		echo "You have been added to the database. Enjoy<br>";
	}
}

$conn->close();
?>
</body>
</html>

<html>
<head>
</head>
<body>
<?php
$group = array("Alex", "Carmen", "Jack", "Oana", "Sam", "Smitha", "Ugnius");

if(in_array($_POST["name"], $group)){
	echo "Welcome, comrade ", $_POST["name"], "<br>";
	echo "Your email: ", $_POST["email"];
}
else{
	echo "Welcome, stranger ", $_POST["name"], "<br>";
	echo "I will not show you your email. Mom said 'don't talk to strangers'.";
}
?>
</body>
</html>

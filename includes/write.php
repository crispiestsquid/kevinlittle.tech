<?php

include_once('db_connect.php'); // connect to our database

// get the user input from the url
$username = $_POST['username'];
$text = $_POST['text'];

// escaping is important to avoid php injections
$nameEscaped = htmlentities(mysqli_real_escape_string($mysqli, $username));
$textEscaped = htmlentities(mysqli_real_escape_string($mysqli, $text));

$query = "INSERT INTO chat (username, text) VALUES ('$nameEscaped', '$textEscaped')";

if ($mysqli->real_query($query)){
	// if successful
	echo("Wrote message to db!");
}
else {
	echo("Unsuccessful");
}

$mysqli->close();

?>
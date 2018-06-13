<?php

include_once('db_connect.php'); // connect to our database

$query = "SELECT * FROM chat ORDER BY id ASC";

if ($mysqli->real_query($query)){
	// query was successful
	$result = $mysqli->use_result();
	
	while ($row = $result->fetch_assoc()){
		$username = $row['username'];
		$text = $row['text'];
		$time = date('h:i a', strtotime($row['time']));
		
		echo('<p class="message"><span class="time">' . "$time | " . '</span><span class="username">' . "$username: " . '</span><span class="msgCont">' . "$text" . '</span></p>');
	}
}
else {
	echo('unsuccessful');
}

$mysqli->close();

?>
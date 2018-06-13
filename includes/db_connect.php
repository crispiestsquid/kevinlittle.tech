<?php
include_once 'psl-config.php'; // as functions.php is not included
$mysqli = new MySQLi(HOST, USER, PASSWORD, DATABASE);

if ($mysqli->connect_error) {
	die("Connection Failure: " . $mysqli->connect_error);
}
<?php

require 'config.php';

# mysql_connect('localhost', 'username', 'password');

try {
	$conn = new PDO('mysql:host=localhost;dbname=register', $config['DB_USERNAME'], $config['DB_PASSWORD']);
} catch(PDOException $e) {
	echo 'ERROR: ' . $e->getMessage();
}

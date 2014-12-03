<?php namespace Blog\DB;

require 'config.php';

# mysql_connect('localhost', 'username', 'password');

function connect($config) {
   try {
      $conn = new \PDO('mysql:host=localhost;dbname=' . $config['DB'], $config['DB_USERNAME'], $config['DB_PASSWORD']);
      $conn->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);


      return $conn;
   } catch (PDOException $e) {
      echo 'ERROR: ' . $e->getMessage();
   }
}

function query($query, $bindings, $conn) 
{
	$stmt = $conn->prepare($query);
	$stmt->excute(array($bindings));
	$stmt->fetchAll();
}

function get($tableName, $conn, $limit = 10) {
   try {
      $result = $conn->query("SELECT * FROM $tableName LIMIT $limit");

      return ($result->rowCount() > 0)
      ? $result
      : false;
   } catch (PDOException $e) {
      echo 'ERROR: ' . $e->getMessage();
   }
}

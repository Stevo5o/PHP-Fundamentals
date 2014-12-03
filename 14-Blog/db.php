<?php

namespace Blog\DB;

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

function query($query, $bindings, $conn) {
   $stmt = $conn->prepare($query);
   $stmt->execute($bindings);
   return $stmt;
}

function get($tableName, $conn, $limit = 10) {
   try {
      $result = $conn->query("SELECT * FROM $tableName LIMIT $limit");

      return ($result->rowCount() > 0) ? $result : false;
   } catch (PDOException $e) {
      echo 'ERROR: ' . $e->getMessage();
   }
}

function get_by_id($post_id, $conn) {
   try {
     $query = query(
      'SELECT * FROM posts WHERE post_id = :post_id LIMIT 1', 
      array('post_id' => $post_id),
      $conn
      ); 
     
      return $query->fetchAll();
   } catch (PDOException $e) {
      echo 'ERROR: ' . $e->getMessage();
   }
}

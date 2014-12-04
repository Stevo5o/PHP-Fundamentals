<?php

/* 
 * Basic DB class to access DB 
 */

class Database {
   protected $conn;
   protected $table;
   
   public function __construct() 
   {
      // connect to the db
      $this->conn = 'connected';
   }

   public function set_table($table) 
   {
      $this->table = $table;
   }
   
   public function insert() 
   {
      // echo $this->conn;
      return 'iserted rows';
   }

   public function get($limit = 10) 
   {
      return 'get rows from ' . $this->table . ' table.';
   }

   public function where($key, $value) 
   {
      return "Return where the $key equals $value.";
   }
}

$db = new Database();
// $db->insert();
// echo '<br>';
$posts = $db->get('posts');
echo $posts;
echo '<br>';
$posts = $db->where('id', 5);
echo $posts;
echo '<br>';
$db->set_table('users');
$rows = $db->get(5);
echo $rows;
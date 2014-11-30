<?php

require 'functions.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
   $name =  trim($_POST['name']);
   $email = trim($_POST['email']);

   if(empty($name) || empty($email)) {
   	$status = 'Please provide a name and valid email address.';
   } else {
   	add_registered_user($name, $email);
   }
}

require 'index.tmpl.php';

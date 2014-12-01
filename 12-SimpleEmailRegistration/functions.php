<?php

define('MAILING_LIST', $_SERVER['DOCUMENT_ROOT'] . 'PHPfundamentals/mailing_list.php');


/*
 * Add a new item to the registered uers list.
 */
function add_registered_user($name, $email) {
   file_put_contents(MAILING_LIST, "$name: $email\n", FILE_APPEND);
}


/*
 * Returns an array of all registered users.
 */
function get_registered_users($path = MAILING_LIST) {
   $users = file($path);

   if (count($users)) {
      return array_map(function($user) {
         return explode(': ', htmlspecialchars($user));         
      }, $users);
   }
   
   return false;
}


/*
 * Preserve form state.
 */
function old($key) {
   if (!empty($_REQUEST[$key])) {
      return htmlspecialchars($_REQUEST[$key]);
   }

   return '';
}


/*
 * Determines whether an email address is valid.
 */
function valid_email($email) {
   return filter_var($email, FILTER_VALIDATE_EMAIL);
}



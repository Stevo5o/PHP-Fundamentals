<?php
session_start();

define('USERNAME', 'stephen.oconnor');
define('PASSWORD', '1234');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
   $username = $_POST['username'];
   $password = $_POST['password'];

   // validate 
   if ($username === USERNAME && $password === PASSWORD) {
      // credentials are correct
      // login & set session
      $_SESSION['username'] = $username;
      header('location: admin.php');
   } else {
      $status = "Incorrect Login";
   }
}
?>
<!DOCTYPE html>
<!-- @author Stephen O'Connor -->
<html>
   <head>
      <meta charset="UTF-8">
      <title>Login</title>
   </head>
   <body>
      <h1>Login</h1>
      <form action="login.php" method="post">
         <ul>
            <li>
               <label for="username" id="login">Username: </label>
               <input type="text" name="username"></input>
            </li>
            <li>
               <label for="password" id="login">Password: </label>
               <input type="password" name="password"></input>
            </li>
            <li>
               <input type="submit" value="Login">
            </li>
         </ul> 
         <?php
         if ( isset($status)) : ?>
         <p><?= $status; ?></p>
      <?php endif; ?>             
      </form>         
   </body>
</html>

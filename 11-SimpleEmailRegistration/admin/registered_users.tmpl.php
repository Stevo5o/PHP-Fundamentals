<!DOCTYPE html>
<!-- @author Stephen O'Connor -->
<html>
   <head>
      <meta charset="UTF-8">
      <title></title>     
      <link href="../../style2.css" rel="stylesheet" type="text/css"/>
   </head>
   <body>
      <div id ="contentMail">
      <h1>Lads on my Mailing List</h1>
      <?php
      if ($registered_users) {
         foreach($registered_users as $user) {
            list($name, $email) = $user;
            echo "<li>$name: <a href='mailto:$email'>$email</a></li> ";
         }
      } else {
         echo '<li>No registered Members.</li>';
      }      
      ?>
      </div>
   </body>
</html>

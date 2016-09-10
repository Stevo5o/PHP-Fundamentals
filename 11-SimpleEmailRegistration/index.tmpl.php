<!DOCTYPE html>
<!-- @author Stephen O'Connor -->
<html>
   <head>
      <meta charset="UTF-8">
      <title></title>
      <link href="../style2.css" rel="stylesheet" type="text/css"/>
   </head>
   <body>
      <div id ="contentMail">
      <h1>Join the mailing list</h1>
      <form id="formMailing" action="" method="post">
         <?php
         if (isset($status)) : ?>
         <p class="notice"><?php echo $status; ?></p>
         <?php endif; ?>        
         <ul>
            <li>
               <label for="name">Your name: </label>
               <input type="text" name="name" value="<?php echo old('name'); ?>">
            </li>
            <li>
               <label for="email">Your email: </label>
               <input type="text" name="email" value="<?php echo old('email'); ?>">
            </li>
            <li>
               <input type="submit" name="submitButton" value="Sign up!">
            </li>
         </ul>         
      </form>
      </div>
   </body>
</html>

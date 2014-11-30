<!DOCTYPE html>
<!-- @author Stephen O'Connor -->
<html>
   <head>
      <meta charset="UTF-8">
      <title>Mailing List</title>
      <link href="../style.css" rel="stylesheet" type="text/css"/>
      <style>
         li { list-style: none; margin:4px;}
         .notice { color: red; font-style: italic;}
      </style>
   </head>
   <body>
      <h1>Join the mailing list</h1>
      <div id="content">
         <form id="formMailing" action="" method="post">
            <?php if (isset($status)) : ?>
               <p class="notice"><?php echo $status; ?></p>
            <?php endif; ?>
            <ul>
               <li>
                  <label for="name">Your Name: </label>
                  <input type="text" name="name">
               </li>
               <li>
                  <label for="name">Your Email Address: </label>
                  <input type="text" name="email">
               </li>
               <li>
                  <input type="submit" name="signUp" value="Sign Up!">
               </li>
            </ul>
         </form>
      </div>
   </body>
</html>

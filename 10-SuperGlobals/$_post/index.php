<!DOCTYPE html>
<!-- @author Stephen O'Connor -->
<html>
   <head>
      <link href="../../style.css" rel="stylesheet" type="text/css"/>
      <meta charset="UTF-8">
      <title>Post</title>
   </head>
   <body>	
      <h1>Contact Form</h1> 
      <div id="content"> 
      <article class="panel">
         	<header></header>
         </article>            
         <form id="formContact" action="post.php" method="post">
            <ul>
               <li>
                  <label for="name">Name: </label>
                  <input type="text" name="name" id="name">
               </li>
               <li>
                  <label for="email">Email: </label>
                  <input type="text" name="email" id="email">
               </li>
               <li>
                  <label for="message">Your Message: </label>
                  <textarea name="message" id="message"></textarea>
               </li>
               <li>
                  <input type="submit" value="Go!">
               </li>
            </ul>
         </form>         
        	 <article class="panel">
         	<header></header>
         </article>
      </div>
<?php
// put your code here
?>
   </body>
</html>

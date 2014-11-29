<?php
// if (!empty($_POST)) {
// 	print_r($_POST);
// }

//if ($_SERVER['REQUEST_METHOD'] == 'POST') {
//   if ( mail('stevo.joc@gmail.com', 'New Website Message', htmlspecialchars($_POST['message']))) {
//   	$status = "Thank you for your message";
//   }
//}
?>
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
         <form action="post.php" method="post">
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
         <?php if (isset($tatus)) {
         	echo "$status";
         }?>
      </div>
<?php
// put your code here
?>
   </body>
</html>

<?php
// if (!empty($_POST)) {
// 	print_r($_POST);
// }

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
   if ( mail('stevo.joc@gmail.com', 'New Website Message', htmlspecialchars($_POST['message']))) {
   	$status = "Thank you for your message";
   }
}
?>
<!DOCTYPE html>
<!-- @author Stephen O'Connor -->
<html>
   <head>
      <meta charset="UTF-8">
      <title>Post</title>
      <style type="text/css">
         #content {border:1px solid blue;height:16em; width:600px; margin: 0 auto; padding:.3%;}
         .panel{height:100%;width:33%;float:left; background-color: silver;margin-left:.3%;}
         form { height:100%;width:33.1%; background-color: #e6bfd9;float:left;margin-left:.3%;}
         form ul { margin: 0; padding: 2%}
         form li { list-style: none; margin-bottom: 1em;}
         #message{width:97%}
         h1 {width:600px; margin: 0 auto;text-align: center;padding:.3%; background-color: gold; border:1px solid blue;}
      </style>
   </head>
   <body>	
      <h1>Contact Form</h1> 
      <div id="content"> 
      <article class="panel">
         	<header>Please Fill Out 1</header>
         </article>            
         <form action="" method="post">
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
         	<header>Please Fill Out 2</header>
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

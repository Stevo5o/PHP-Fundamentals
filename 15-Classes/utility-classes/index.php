<?php 
require '/html.php';
?>
<!DOCTYPE html>
<!-- @author Stephen O'Connor -->
<html>
   <head>
      <meta charset="UTF-8">
      <title></title>
   </head>
   <body>
      <?= 
      HTML::link('stephenoconnor/', 'Stephen O\'Connor'), 
      HTML::ul(['item1', 'item2', 'item3', 'item4']),     
      HTML::image('https://avatars3.githubusercontent.com/u/3177131?v=3&s=460', 'GitHub');
        ?>
   </body>
</html>

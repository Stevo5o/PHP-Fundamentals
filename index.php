<?php
$fav_sites = [
    'stephen o\'Connor' => 'http://stephenoconnor.azurewebsites.net',
    'imdb' => 'http://imdb.com',
    'metacritic' => 'http://metacritic.com'
];
?>
<!DOCTYPE html>
<!-- @author Stephen O'Connor -->
<html>
   <head>
      <meta charset="UTF-8">
      <title>Arrays</title>
   </head>
   <body>
      <h1>My Sites</h1>   
      <?php
      foreach ($fav_sites as $site => $url) {
         echo "<li><a href='$url' target=_blank>" . ucwords($site) . "</a></li>";
      }
      ?> 
   </body>
</html>

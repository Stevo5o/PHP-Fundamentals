<?php
$fav_sites = [
    'stephen o\'Connor' => 'http://stephenoconnor.azurewebsites.net',
    'imdb' => 'http://imdb.com',
    'metacritic' => 'http://metacritic.com'
];

$months = ['jan', 'feb', 'mar', 'april', 'may'];

//$month[0] = 'jan';
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
      <?php foreach ($fav_sites as $site => $url) : ?>
      <li>
         <a href="<?= $url; ?>"target=_blank><?= ucwords($site); ?></a> // new echo assoc array
      </li>
   <?php
   endforeach;
   echo "<br />";
   
   // echo first second and last months
   echo reset($months);
   echo "<br />";
   echo next($months);
   echo "<br />";
   echo end($months);

   // print specific month and array of months
   echo '<pre>';
   echo "This is the 3rd month: ";
   print_r(ucwords($months[2]));
   echo "</pre><pre>";
   print_r($months);
   echo '</pre>';
   ?>

</body>
</html>

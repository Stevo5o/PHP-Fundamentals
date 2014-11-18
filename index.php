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
      foreach ($fav_sites as $site => $url) : ?>
         <li>
            <a href="<?php echo $url; ?>"target=_blank><?php echo ucwords($site); ?></a>
                </li>
                <?php endforeach ?>
   </body>
</html>

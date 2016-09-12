<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Stephen J</title>
</head>
<body>
<h1>The Games of Thrones Fan Website</h1>
<p>Counted <?php echo $count ?> visits</p>
<p>Name of txt file <?php print_r($files); ?></p>
<p>Files in img folder <?php print "<pre>";
    print_r($filesExt);
    print '</pre>'; ?></p>
<p>Names of GoT characters <?php print "<pre>";
    print_r($charList);
    print '</pre>'; ?></p>
<p>File extensions <?php get_ext($filesExt); ?></p>
<p><?php get_images(); ?></p>

</body>
</html>

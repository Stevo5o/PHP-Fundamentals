<?php
$fav_sites = [
    'stephen o\'Connor' => 'http://stephenoconnor.azurewebsites.net',
    'imdb' => 'http://imdb.com',
    'metacritic' => 'http://metacritic.com',
    'write/test PHP' => 'http://writecodeonline.com/php/'
];

$fav_sitesOldArray = array(
    'stephen o\'Connor' => 'http://stephenoconnor.azurewebsites.net',
    'imdb' => 'http://imdb.com',
    'metacritic' => 'http://metacritic.com',
    'write/test PHP' => 'http://writecodeonline.com/php/');

$months = ['jan', 'feb', 'mar', 'april', 'may'];

$months[] = 'june'; // array_push
$months[] = 'july'; // array_push

$month1 = array_shift($months); // remove first 
array_unshift($months, 'jan'); // unremove first

$month = array_pop($months); // remove last item from array - store pop in month

$monthsSlice = array_slice($months, 2); // slice out after 2

$monthsSliceFebMar = array_slice($months, 1, 2); // slice out after 1 and take 2

$month3Char = array_filter($months, function ($item) {
    return strlen($item) == 3;
}); // filter with lamda function

?>
<!DOCTYPE html>
<!-- @author Stephen O'Connor -->
<html>
<head>
    <meta charset="UTF-8">
    <title>Arrays</title>
</head>
<body>
<h2>Arrays</h2>

<!-- new way php 5 -->
<?php foreach ($fav_sites as $site => $url) : ?>
    <li>
        <a href="<?= $url; ?>" target=_blank><?= ucwords($site); ?></a> <!-- new echo assoc -->
    </li>
    <?php
endforeach;
echo "<br />";

// standard way php 5
foreach ($fav_sitesOldArray as $site => $url) {
    echo "<li><a href=$url>" . ucwords($site) . "</a>"
        . "</li>";
}
echo "<br />";

// echo first second and last months
echo "Months in months array <br /> First: " . reset($months);
echo "<br />";
echo "Second: " . next($months);
echo "<br />";
echo "Pushed & Last: " . end($months);

// print specific month and array of months
echo '<pre>';
echo "This is the 3rd month: ";
print_r(ucwords($months[2]));
echo "</pre><pre>";
echo "Months ";
print_r($months);
echo '</pre>';
echo "This last month: <b>" . ucwords($month) . "</b> has been removed <br />";
echo "This first month: <b>" . ucwords($month1) . "</b> has been removed <br />";
echo "This first month: <b>" . ucwords($months[0]) . "</b> has been unremoved <br />";
echo "<pre>";
echo "Slice after 2, Months ";
print_r($monthsSlice);
echo '</pre>';
echo "<pre>";
echo "Slice out months <b>Feb & Mar</b> ";
print_r($monthsSliceFebMar);
echo '</pre>';
echo "<pre>";
echo "Filter months with only <b>3 chars </b>";
print_r($month3Char);
echo '</pre>';
$h = 'Hello';
$w = 'World';
echo "$h $w";
?>
</body>
</html>

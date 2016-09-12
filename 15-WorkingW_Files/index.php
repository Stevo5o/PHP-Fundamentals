<?php

function set_count($file_name = 'counter.txt')
{
    if (file_exists($file_name)) {
        $count = file_get_contents($file_name) + 1;
        file_put_contents($file_name, $count);
//        print_r(file($file_name)); // returns an array
    } else {
        // create file
        $handle = fopen($file_name, 'w+');
        $count = 1;

        // set a default value
        fwrite($handle, $count);
        fclose($handle);
    }
    return $count;
}

$count = set_count();

$files = glob('c*.txt');
$filesExt = glob('img/*.{png,jpg,jpeg,csv}', GLOB_BRACE);

function get_ext($filesExt)
{
    foreach ($filesExt as $ext) {
        echo "<pre>";
        echo substr($ext, -3);
        echo "</pre>";
    }
}

$charList = file_get_contents('img/GotCharacterList.csv');

function get_images()
{
    $dirName = "img/";
    $images = glob($dirName . "*.{png,jpg}", GLOB_BRACE);
    foreach ($images as $image) {
        echo '<img src="' . $image . '" />';
    }
    return $images;
}

require 'index.tmpl.php';


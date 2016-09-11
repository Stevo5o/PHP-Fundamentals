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

require 'index.tmpl.php';
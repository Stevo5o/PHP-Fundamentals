<?php

function set_count($file_name = 'counter.txt')
{
    if (file_exists($file_name)) {
        $handle = fopen($file_name, 'r');
        $count = (int) fread($handle, 20) + 1;

        $handle = fopen($file_name, 'w');
        fwrite($handle, $count);


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

echo set_count();
die();

require 'index.tmpl.php';
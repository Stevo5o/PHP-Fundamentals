<?php

function set_count($file_name = 'counter.txt')
{
    if (file_exists($file_name)) {
        $handle = fopen($file_name, 'r');
        $count = (int) fread($handle, 20) + 1;


    } else {
        // create file
        $handle = fopen($file_name, 'w+');

        // set a default value
        fwrite($handle, 1);

        fclose($handle);
    }
}

set_count();

require 'index.tmpl.php';
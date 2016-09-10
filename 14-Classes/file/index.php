<?php

/* 
 * Testing File Class
 */

require 'file.php';

echo File::exists('file.php') ? 'The file does exist' : 'The file does not exist';

echo '<br>';

echo "File Size: ", File::size('file.php');

echo '<br>';

echo "File name: ", File::name('file.php');

echo '<br>';

echo "File Extension: ", File::extension('file.php');

echo '<br>';

echo "No. Files Deleted: ", File::delete('sample2.txt');

echo '<br>';

echo "Contents: ", File::get('sample.txt', 'A default value');

echo '<br>';

echo File::append('sample.txt', 'Appending this content');

echo '<br>';

echo File::truncate('sample.txt');

echo '<br>';

echo File::copy('sample3.txt', 'sampleCopy.txt');

echo '<br>';

echo File::move('sample.txt', '../sampleCopyMove.txt');
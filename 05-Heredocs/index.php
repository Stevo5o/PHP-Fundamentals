<?php

$post = array(
    'author' 		=> 'Stephen O\'Connor',
    'title' 		=> 'My Epic Post',
    'body' 			=> 'Here is the body.',
    'publishDate' 	=> '22-11-2014',
    'category' 		=> 'Personal'
);

// MVC
extract($post);

$email = <<<EOT
<h1>$title</h1>
<p>Pulish Date: $publishDate</p>
<p>By: $author within the $category category.</p>
<div>$body</div>
EOT;

echo $email;

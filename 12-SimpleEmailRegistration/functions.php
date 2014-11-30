<?php

function add_registered_user($name, $email) {
	# REALLY IMPORTANT: SECURE FILE
	file_put_contents('mail_list.php',"$name: $email\n", FILE_APPEND);
}
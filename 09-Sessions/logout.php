<?php

session_start();

session_destroy();
$_SESSION = [];

// delete cookie

header('Location: login.php');
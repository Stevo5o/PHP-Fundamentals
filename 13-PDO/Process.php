<?php

// print_r($_POST);
require 'functions.php';

use Blog\DB;

$conn = DB\connect($config);

if ($conn) {
   $users = DB\get('users', $conn);
} else {
   die('could not connect');
}

 if (isset($_POST['submit'])) { 
$stmt = $conn->prepare("INSERT INTO users (first_name,last_name,email_address) VALUES (?,?,?)");
        $stmt->bindParam(1, $fname);
        $stmt->bindParam(2, $lname);
        $stmt->bindParam(3, $email);

 





                                if (empty($_POST["fname"])) {
                                    
                                } else {
                                    $name = $_POST["fname"];
                                } 
                                if (empty($_POST["lname"])) {
                                    
                                } else {
                                    $lame = $_POST["lname"];
                                }
                                if (empty($_POST["email"])) {
                                    
                                } else {
                                    $email = $_POST["email"];
                                }
                               
                       
                            $stmt->execute();
                            echo'<b><p><font color="green">Thank you, I will contact you soon!</font></p></b>';

}


// if($conn->query(INSERT) > 0) {

// }

/**
 *
 * @author Stephen
 */
class Process {
   //put your code here
}

<?php

// Credentials
$dbhost = 'sql310.epizy.com';
$dbuser = 'epiz_27521057';
$dbpass = 'krwn7zd6';
$dbname = 'epiz_27521057_users';

// Create a database connection
$connection = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);

// Check connection
if (!$connection) {
    die("Connection failed: " . mysqli_connect_error());
    exit();
} else echo ('Sucess!')
?>


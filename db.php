<?php
$dbhost = 'localhost';
$dbuser = 'root';
$dbpass = '';
$dbname = 'homteq';

//CReate db connection
$conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);

if(!$conn){
    die('Could not connect:'. mysqli_error($conn));
}
else{
    mysqli_select_db($conn, $dbname);
    echo "Connected";
}
?>
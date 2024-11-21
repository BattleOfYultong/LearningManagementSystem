<?php

$localhost = "localhost";
$root = "root";
$password= "";
$database = "Learningdb";

$connections = mysqli_connect($localhost, $root, $password, $database);

if($connections->connect_errno){
    echo "Error:" .$connections->errno;
}

<?php
//DB details
$dbHost 	= 'localhost';           //servermu
$dbUsername = 'root';                //username kamuh
$dbPassword = '';                    //password kamuh
$dbName 	= 'ruangprogrammer';     //your name database

//Create connection and select DB
$db = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);

if($db->connect_error){
    die("Unable to connect database: " . $db->connect_error);
}
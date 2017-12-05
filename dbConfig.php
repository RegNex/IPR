<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


 $dbhost = "sql204.byethost13.com";
 $dbuser = "b13_20386934";
 $dbpass = "Airtour4";
 $dbname = "b13_20386934_ipra";
 
 // Create connection
$conn = new mysqli($dbhost, $dbuser, $dbpass, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
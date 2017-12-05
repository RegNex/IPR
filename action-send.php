<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

include 'dbConfig.php';

if (null !== (filter_input(INPUT_POST, 'submit'))) {
	$uemail = htmlspecialchars($_POST['uemail']);
        $usubject = htmlspecialchars($_POST['usubject']);
        $umessage = htmlspecialchars($_POST['umessage']);
	$sql = "INSERT INTO `contactus` (`uemail`, `usubject`, `umessage`) values('$name','$usubject','$umessage')";
	$val = $conn->query($sql);

	if ($val) {
		header('location:contact.php');
	}
}



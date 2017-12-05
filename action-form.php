<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
ob_start();
session_start();
include 'dbConfig.php';

$res = $conn->query("SELECT * FROM applicants WHERE id=" . $_SESSION['users']);
$userRow = mysqli_fetch_array($res, MYSQLI_ASSOC);

if (null !== (filter_input(INPUT_POST, 'submit'))) {
    $person = htmlspecialchars($_POST['person']);
    $email = htmlspecialchars($_POST['email']);
        $proname = htmlspecialchars($_POST['proname']);
        $procategory = htmlspecialchars($_POST['procategory']);
        $prodescribe = htmlspecialchars($_POST['prodescribe']);
	$sql = "INSERT INTO `applications` (`person`, `email`, `proname`,`procategory`,`prodescribe`) values('$person','$email','$proname','$procategory','$prodescribe')";
	$val = $conn->query($sql);

	if ($val) {
		header('location:index.php');
	}
}





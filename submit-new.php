<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

 if (null !== (filter_input(INPUT_POST, 'submit_password')) && filter_input(INPUT_POST, 'key') && filter_input(INPUT_POST, 'reset'))
{

$email = filter_input(INPUT_POST, 'email');
$pass = filter_input(INPUT_POST, 'password');
 include_once 'dbConfig.php';
 
  $select=mysql_query("update applicants set password='$pass' where email='$email'");
}


<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


if (null !== (filter_input(INPUT_GET, 'key')) && filter_input(INPUT_GET, 'reset'))
{
  $email=filter_input(INPUT_GET, 'key');
  $pass=filter_input(INPUT_GET, 'reset');
    include_once 'dbConfig.php';
  $select=mysql_query("select email,password from applicants where email='$email' and sha256(password)='$pass'");
  if(mysql_num_rows($select)==1)
  {
    ?>
    <form method="post" action="submit-new.php">
    <input type="hidden" name="email" value="<?php echo $email;?>">
    <p>Enter New password</p>
    <input type="password" name='password'>
    <input type="submit" name="submit_password">
    </form>
    <?php
  }
}

<?php
session_start();
// remove all session variables
session_unset(); 
 
// destroy the session 
session_destroy();
echo "<div class='alert alert-success alert-dismissable fade id'><a href='#' class='close' data-dismiss='alert'><i class='fa fa-window-close' aria-hidden='true'></i><a>Thank you, you have successfully logged out.</div>";

header( "refresh:1; url=../index.php" );
exit;
?>
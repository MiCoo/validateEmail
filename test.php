<?php
require('validateEmail.php');
error_reporting(0);
// the email to validate  

// an optional sender  
$sender = 'micoo8316@gmail.com';
// instantiate the class  
$SMTP_Valid = new SMTP_validateEmail();  

//$SMTP_Valid->debug = true;

$result = $SMTP_Valid->validate(array('emailAddress@domail.com'), $sender);

echo 'result: '.$result;

// view results  
// var_dump($result);

?>  
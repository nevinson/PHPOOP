
<?php

include_once("class.emailer.php");

$emailerobject=new Emailer("nevinson@outlook.com");
$emailerobject->addRecipients("nevinson23@gmail.com");
$emailerobject->setSubject("Testing PHP Emailer");
$emailerobject->setBody("This is the test of the emailer");
$emailerobject->sendEmail();

?>
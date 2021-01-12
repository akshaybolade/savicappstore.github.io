<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
/*
Tested working with PHP5.4 and above (including PHP 7 )

 */
require_once './vendor/autoload.php';

use FormGuide\Handlx\FormHandler;


$pp = new FormHandler(); 

$validator = $pp->getValidator();
$validator->fields(['Name','Email'])->areRequired()->maxLength(50);
$validator->field('Email')->isEmail();
$validator->field('Message')->maxLength(6000);



//$mailer = $pp->getMailer();
//$mailer->setFrom('prathamesh.bolade@savictech.com','Form',false);


$pp->sendEmailTo('prathameshbolade@gmail.com'); // ← Your email here

//$fh->sendEmailTo(['someone@gmail.com', 'someone.else@gmail.com']);

echo $pp->process($_POST);
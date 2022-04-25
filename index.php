<?php

require_once 'MailSender.php';

$mailSender = new MailSender();


$mailSender->setsubject("FreBoon AutoMail");


$mess='This Mail is from freeBoon';

$mailSender->setMessage($mess);
$mailSender->setrecipient("veenasvastrad4@gmail.com");

$mailSender->sendMail();
echo $mailSender->getresult();
<?php
/**
 * If the webroot folder is pointed to the root folder by mistake.This script will
 * point the execution to the correct script and to the correct fie. 
 * This file is neccesary if the htaccess is not running.
 */
//require_once dirname(__FILE__) . DIRECTORY_SEPARATOR . "web" . DIRECTORY_SEPARATOR . "index.php";
$msg = "Dude, its really a wrong place (" . $_SERVER['DOCUMENT_ROOT'] .  ") to define your document root. ";
$msg.= "Please define it at your 'web' (" .  $_SERVER['DOCUMENT_ROOT'] . "/web) folder";
die($msg);
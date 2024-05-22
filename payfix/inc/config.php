<?php
ob_start();
session_start();
error_reporting(0);
date_default_timezone_set('Europe/Istanbul');
const DB_HOST = "localhost";
const DB_LOGIN = "admin_pyaa";
const DB_PASS = "R2t21*3sk";
const DB_NAME = "admin_pyaa";

$db = new Mysqli(DB_HOST, DB_LOGIN, DB_PASS, DB_NAME);
if ($db->connect_errno) {
  die('Mysql connection is incorrect');
}
$db->set_charset("utf8");

global $db;

$user_id = intval($_SESSION['user_id']);
if (!empty($user_id)) {
  $us = $db->query("SELECT * from users where id='$user_id'")->fetch_assoc();
}

$site = $db->query("SELECT * FROM `site` WHERE '1'")->fetch_assoc();
?>
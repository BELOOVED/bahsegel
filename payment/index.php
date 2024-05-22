<?php
include "../inc/config.php";
include "../inc/functions.php";
$q=explode("/", $_GET['q']);
$page='main';
$qpage=$q[0];
if(!empty($qpage) && file_exists('view/'.$qpage.'.php')){$page=$qpage;}
include "view/".$page.".php";
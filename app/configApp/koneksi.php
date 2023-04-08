<?php 
$host = "localhost";
$dbname = "zakat1";
$dbuser = "root";
$dbpass = "";
$opts = [PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION];
$zkt = "mysql:host=$host;charset=utf8;dbname=$dbname;";
$db = new PDO($zkt, $dbuser, $dbpass, $opts);
?>
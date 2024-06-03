<?php

$hostname='database-chu-01.crqmemsomjjy.ap-northeast-1.rds.amazonaws.com';
$database='db_chu_01';
$username='chuqc';
$password='cqz123456';

try{
	$dsn="mysql:host=$hostname;dbname=$database";
	$pdo = new pdo($dsn,$username,$password);
        echo'success';
	$sql ="select * from site_view_history limit 1";
	$stmt = $pdo->prepare($sql);
	$stmt->execute();
	$result = $stmt ->fetchall();
	print_r($result);

} catch (pdoexception $e){
	   die('failed:'.$e);
   }




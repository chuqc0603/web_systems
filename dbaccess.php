<?php
$dsn = 'mysql:host=database-chu-01.crqmemsomjjy.ap-northeast-1.rds.amazonaws.com;dbname=db_chu_01';
$username = 'chuqc';
$password = 'cqz123456';


try{
	$pdo = new PDO($dsn,$username,$password);

	$sql = "select created_at,info from site_view_history order by created_at desc limit 1";

	$stmt = $pdo->prepare($sql);

	$stmt -> execute();

	$rec = $stmt->fetch(PDO::FETCH_ASSOC);

	$sqlins = "insert into site_view_history(info) values ('insert test from ".exec(hostname)."')";

	$stmtins = $pdo->prepare($sqlins);

	$stmtins -> execute();

}catch (PDOException $e) {
}

function escape2($str)
{
	return htmlspecialchars($str,ENT_QU0TES,'UTF-8');
}

?>
<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="utf-8">
<title>test page for database access</title>
</head>
<body>
Last Acess Time<br><br>
<?php foreach ($rec as $a):?>
         <?=escape2($a)?><br>
<?php endforeach; ?>
</body>
</html>

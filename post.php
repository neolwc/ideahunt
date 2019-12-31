<?php
session_start();

$dbh = new PDO('mysql:host=localhost;dbname=;charset=utf8', '', '');
$dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$dbh->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);

if (isset($_POST['twitter'])) {
	$_SESSION['ideahunt_twitter'] = $_POST['twitter'];
}

if(isset($_POST['twitter'])) {

	$sth = $dbh->prepare('SELECT `uid` FROM `users` WHERE `twitter` = :twitter');
	$sth->bindParam(':twitter', $_POST['twitter']);

	$sth->execute();
	$result = $sth->fetchAll();

	if ($result) {
		$uid =  $result[0][0];
	} else {
		$sth = $dbh->prepare('INSERT INTO `users`(`twitter`) VALUES (:twitter)');
		$sth->bindParam(':twitter', $_POST['twitter']);
		$sth->execute();
		$uid = $dbh->lastInsertId();
	}

	if (isset($_POST['idea'])) {
		$sth = $dbh->prepare("INSERT INTO `posts`(`idea`, `uid`) VALUES (:idea, $uid)");
		$sth->bindParam(':idea', $_POST['idea']);
		$sth->execute();
	}

}

if (isset($_POST['vote'])) {
	$dbh->query("UPDATE `posts` SET `vote`=`vote`+1 WHERE `pid` = {$_POST['vote']}");
}

if (isset($_POST['unvote'])) {
	$dbh->query("UPDATE `posts` SET `vote`=`vote`-1 WHERE `pid` = {$_POST['unvote']}");
}

header('Location: .');
exit();
?>

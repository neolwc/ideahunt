<?php

$url = parse_url(getenv("CLEARDB_DATABASE_URL"));

$dbh = new PDO('mysql:host='.$url["host"].';dbname='.substr($url["path"], 1).';charset=utf8', $url["user"], $url["pass"]);
$dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$dbh->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);

<?php
$loadArray = [
	'total' => 'SELECT * FROM `posts` ORDER BY `vote` DESC, `time`',
	'thisw' => 'SELECT * FROM `posts` WHERE WEEK(DATE(`time`)) = WEEK(CURDATE()) ORDER BY `vote` DESC, `time`',
	'today' => 'SELECT * FROM `posts` WHERE DATE(`time`) = CURDATE() ORDER BY `vote` DESC, `time`',
];

// $dbh->query("SET time_zone = 'America/Toronto'");
$dbh->query("SET time_zone = '-05:00'");

foreach ($loadArray as $key => $sql) {
	print "\t\t<div class=\"tab-pane fade\" id=\"".$key."\" role=\"tabpanel\">\r\n";
	foreach ($dbh->query($sql) as $item) {
		$idea = ucfirst($item['idea']);
		print "\t\t\t<div class=\"item\">\r\n";
		print "\t\t\t\t<div class=\"vote\" data-id=\"{$item['pid']}\">{$item['vote']}</div>\r\n";
		print "\t\t\t\t<div class=\"text\">$idea</div>\r\n";
		print "\t\t\t</div>\r\n";
	}
	print "\t\t</div>\r\n";
}
?>
<?php
$d = mysqli_connect("localhost", "root", "1234") or die("接続失敗");
mysqli_select_db($d, "db");
$r = $d->query("SELECT * FROM tb");

while ($row = mysqli_fetch_array($r)){
	print "{$row['cd']}{$row['nm']}{$row['pr']}<br>";
}

mysqli_close($d);
?>
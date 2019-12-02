<?php
$d = mysqli_connect("localhost", "root", "1234") or die("接続失敗");
print "接続成功<br>";

mysqli_select_db($d, "db");
$d->query("INSERT INTO tb VALUES('xxxx7', '付箋', 175)");

mysqli_close($d) or die("切断失敗");
print "切断成功";
?>
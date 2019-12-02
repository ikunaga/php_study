<?php

$d = mysqli_connect("localhost","root","1234") or die("接続失敗");
mysqli_select_db("db", $d);

$k = mysqli_query("ALTER TABLE tb ADD ima DATETIME");
if ($k){
	print "ADD成功<br>";
}else{
	print "ADD失敗<br>";
}

$k = mysqli_query("INSERT INTO tb (nm,ima) VALUES('マウス',NOW())");
if ($k){
	print "INSERT成功<br>";
}else{
	print "INSERT失敗<br>";
}

mysqli_close($d) or die("切断失敗<br>");
print "切断成功";

?>
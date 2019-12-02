<?php
$t = $_POST["a"];
print $t;
print "<br>.....<br>";
$d = mysqli_connect("localhost","root","1234");
mysqli_select_db("db", $d);
$r = mysqli_query("SELECT * from REPLY WHERE '$t' LIKE CONCAT('%', tubuyaki, '%')");

$n = 1;
while ($row = mysqli_fetch_array($r)){
	print $row['henzi']. "<br>";
	$n++;
}
print ($n == 1)? "なんかおもろいことないかな？" : "";
mysqli_close($d);
?>
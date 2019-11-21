<?php
$r = 16;
while ($r <= 250){
	$rh = dechex($r);
	print "<font color = #{$rh}0000>赤色の変化</font><br>";
	$r += 10;
}
?>
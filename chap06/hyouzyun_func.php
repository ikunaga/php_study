<?php
for ($a = 140; $a <= 200; $a++){
	print $a . "cmならば";
	hyouzyun($a);
	print "<br>";
}

function hyouzyun($s){
	$sc = $s/100;
	$sb = round($sc * $sc * 22, 1);
	print $sb . "kgが適正体重です";
}
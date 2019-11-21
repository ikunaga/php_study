<?php

turu(5, 14);
kame(5, 14);


/*つるの数を返す関数*/
function turu($A, $B){
	$t = ($A * 4 - $B) / 2;
	print "つるの数は" . $t . "匹";
}

/*亀の数を返す関数*/
function kame($A, $B){
	$k = ($B - $A * 2) / 2;
	print "かめの数は" . $k . "匹";
}

?>
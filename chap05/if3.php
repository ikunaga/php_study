<?php
$t = date("G");
if ($t < 6 or $t >= 18) {
	print "<P>夜です</P>";
}else{
	print "<P>昼間です</P>";
}

print $t
?>
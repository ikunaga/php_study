<?php

print "<table border=1><tr><td>キー</td><td>要素</td></tr>";

foreach ($_SERVER as $k => $v){
	print "<tr><td>$k</td><td>$v</td></tr>";
}

print "</table>";
?>
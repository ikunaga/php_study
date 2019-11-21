<?php

$a = "本マグロ500g:1000円　千葉県産獲れたて!";

$count = mb_strpos($a, ":");
$yen = mb_strpos($a, "円");

print mb_substr($a, $count + 1, $yen - $count - 1);

?>
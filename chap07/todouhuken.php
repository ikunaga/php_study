<?php
$a = "大阪府大阪市旭区...";

if (mb_strpos("都道府県", mb_substr($a,2,1)) !== FALSE){
	print mb_substr($a,0,3);
}elseif (mb_substr($a,3,1) == "県"){
	print mb_substr($a,0,4);
}
else {
	print "都道府県がありません。";
}
?>
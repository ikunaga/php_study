<?php
switch (PHP_OS){
	case "WINNT":
		print "WINNT用の処理";
		break;
	case "Linux":
		print "Linux用の処理";
		break;
	default:
		print "WINNTまたはLINUX以外の処理";
}
?>
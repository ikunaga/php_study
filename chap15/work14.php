<?php
$obj = new hito3();
$obj->namae = "生長　真尚";

print $obj->sei();
print "<br>";
print $obj->na();

class hito3{
	public $namae;

	function sei(){
		return mb_strrchr($this->namae,"　",TRUE);
	}

	function na(){
		$str = mb_strrchr($this->namae,"　",FALSE);
		return mb_substr($str, 1);
	}
}

?>


<?php
$obj = new hito();
$obj->namae = "西澤";
$obj->sintyo = 175;

print $obj->namae . "さんの標準体重は<br>";
print $obj->hyozyun();

class hito{
	public $namae;
	public $sintyo;

	function hyozyun(){
		$s = $this->sintyo / 100;
		return $s * $s * 22;
	}
}
?>
<?php
$t = date("G");
if ($t < 6 or $t >= 18){
?>
<body bgcolor = gray>夜</body>

<?php }elseif ($t >= 9){ ?>
<body bgcolor = lime>昼</body>

<?php }elseif ($t >= 6){ ?>
<body bgcolor = blue>朝</body>

<?php } ?>
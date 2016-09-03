<!DOCTYPE html>
<html>
<head>
<title></title>
<meta charset="utf-8"/>
<style>

</style>
</head>

<body>

<div id="page">
	<div id="header">
		
	</div>
	<div id="content">
		<?php
        $in = file_get_contents ('./stat.txt');

        $mb = "Male:Born";
        $fb = "Female:Born";
        $md = "Male:Died";
        $fd = "Female:Died";

        $m = substr_count($in, $mb) - substr_count($in, $md);
        $f = substr_count($in, $fb) - substr_count($in, $fd);

        echo "Female: " . $f . "; " . "Male: " . $m . ";\n";
        ?>
	</div>
  	<br>
  	<a href="./clean.php"><button>Очитстить статистику</button></a>
  	<a href="./"><button>Обновить</button></a>
	<div id="footer">
		
	</div>
</div>

</body>

</html>
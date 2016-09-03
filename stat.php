<?php
$in = file_get_contents ('http://api.lod-misis.ru/testassignment');
file_put_contents('stat.txt', $in . "\n", FILE_APPEND);
?>
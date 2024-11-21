<?php
$a = 5;
$b = '05';
var_dump($a == $b);
var_dump((int)'012345');
var_dump((float)123.0 === (int)123.0);
var_dump(0 == 'hello, world');
?>

<!-- // docker run --rm -v ${pwd}/php-cli/:/cli php:8.2-cli php /cli/start.php -->
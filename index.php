<?php
$file = 'f.txt';
$ip = $_SERVER['REMOTE_ADDR'] . "\n";
$f = file_put_contents($file,$ip, FILE_APPEND);
$views = count(file($f));
echo $views;

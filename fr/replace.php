<?php

$inhalt = file_get_contents($argv[1]);

$arr  = array('/�/',      '/�/',      '/�/',     '/�/',      '/�/',      '/�/',      '/�/',     '/�/',     '/�/',      '/�/',     '/�/');
$arr2 = array('&Agrave;', '&agrave;', '&acirc;', '&ccedil;', '&egrave;', '&eacute;', '&icirc;', '&ocirc;', '&ugrave;', '&ucirc;', '&ecirc;');

$inhalt = preg_replace($arr, $arr2, $inhalt);

@unlink($argv[1]);
$fp = fopen($argv[1], 'w+');
fputs($fp, $inhalt);
fclose($fp);
echo "\n\n".$inhalt."\n\n";

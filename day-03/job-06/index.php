<?php

$str = "Les choses que l'on Possède finissent par nous posséder.";

$array = str_split($str);

$reverse_array = array_reverse($array);

$res = implode($reverse_array);

echo $res;

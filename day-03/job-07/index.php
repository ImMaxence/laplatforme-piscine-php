<?php
$str = "Certaines choses changent, et d'autres ne changeront jamais.";

$arr_str = str_split($str);
$first_char = $arr_str[0];

$length = count($arr_str);

for ($i = 0; $i < $length - 1; $i++) {
    $arr_str[$i] = $arr_str[$i + 1];
}

$arr_str[$length - 1] = $first_char;

$res = implode($arr_str);

echo $res;

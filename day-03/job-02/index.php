<?php
$str = "Tous ces instants seront perdus dans le temps comme les larmes sous la pluie.";

for ($i = 0; strlen($str) > $i; $i = $i + 2) {
    echo $str[$i];
}

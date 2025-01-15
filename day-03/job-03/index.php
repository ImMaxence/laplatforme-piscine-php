<?php
$str = "I'm sorry Dave I'm afraid I can't do that";

function getVowels($str)
{
    $vowels = [];
    $vowelSet = ['a', 'e', 'i', 'o', 'u', 'y', 'A', 'E', 'I', 'O', 'U', 'Y']; // Liste voyelles

    for ($i = 0; $i < strlen($str); $i++) {
        $char = $str[$i];

        if (in_array($char, $vowelSet)) {
            $vowels[] = $char;
        }
    }
    return $vowels; // return array
}

$res = getVowels($str);

foreach ($res as $vowel) {
    echo $vowel . "<br>";
}

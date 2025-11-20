<?php
//Note: Assuming english language
//Todo: generalize to other langueages

define('VOWELS',['a','e','i','o','u']);

function getVowelsCount(string $word): array {
    $vowelsCount = [
        "a" => 0,
        "e" => 0,
        "i" => 0,
        "o" => 0,
        "u" => 0
    ];

    $word = strtolower($word);
    $word = str_split($word);


    foreach($word as $char) {
        if(in_array($char, VOWELS)) ++$vowelsCount[$char];
    }

    return $vowelsCount;
}

function printVowelsCount(array $vowelsCount): void {
    foreach($vowelsCount as $vowel => $vowelCount) {
        echo "We have ".$vowelCount." ".$vowel."(s)".PHP_EOL;
    }
}

$vowelsCount = getVowelsCount("hoooouioolaaaaa");
printVowelsCount($vowelsCount);


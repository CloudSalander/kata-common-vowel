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
        echo $char;
    }

    return $vowelsCount;
}

function printVowelsCount(array $vowelsCount): void {

}

//var_dump(VOWELS);
var_dump(getVowelsCount("hola"));
//var_dump(printVowelsCount([]));


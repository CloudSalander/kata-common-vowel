<?php
//Note: Assuming english language
//Todo: generalize to other langueages

define('VOWELS',['a','e','i','o','u']);

function getVowelsCount(string $text): array {
    $vowelsCount = [
        "a" => 0,
        "e" => 0,
        "i" => 0,
        "o" => 0,
        "u" => 0
    ];

    $sanitizedText = sanitizeText($text);

    foreach($sanitizedText as $char) {
        if(in_array($char, VOWELS)) ++$vowelsCount[$char];
    }
    
    return $vowelsCount;
}

function sanitizeText(string $text): array {
    return str_split(strtolower($text));
}

function printVowelsCount(array $vowelsCount): void {
    foreach($vowelsCount as $vowel => $vowelCount) {
        echo "We have ".$vowelCount." ".$vowel."(s)".PHP_EOL;
    }
}

$vowelsCount = getVowelsCount("hoooouioolaaaaa");
printVowelsCount($vowelsCount);


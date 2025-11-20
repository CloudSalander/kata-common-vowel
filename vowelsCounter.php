<?php

class vowelsCounter {
    const VOWELS = ['a','e','i','o','u'];
    
    private string $text;

    public function __construct(string $text) {
        $this->text = $text;
    }

    public function setText(string $text): void {
        $this->text = $text;
    }

    public function getVowelsCount(string $text): array {
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
    
    private function sanitizeText(string $text): array {
        return str_split(strtolower($text));
    }
    
    private function printVowelsCount(array $vowelsCount): void {
        foreach($vowelsCount as $vowel => $vowelCount) {
            echo "We have ".$vowelCount." ".$vowel."(s)".PHP_EOL;
        }
    }
}
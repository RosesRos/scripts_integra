<?php

interface WordsCount {
    public function wordsCount(string $data);
}

class WordCount implements WordsCount {
    public $str;

    public function wordsCount(string $str) {
        $this->str = $str;
        $wordsCount = array_reduce(str_word_count($this->str, 1), function($result, $word) {
            if (!isset($result[$word])) {
                $result[$word] = 1;
            } else {
                $result[$word]++;
            }
            return $result; 
        }, []);

        foreach($wordsCount as $word => $count) {
            print_r($word . ' ' . $count . PHP_EOL);
        }
    }
}

$str = 'apple banana mango apple banana apple';

$wordCount = new WordCount();
$wordCount->wordsCount($str);

?>

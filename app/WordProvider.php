<?php

namespace App;

use Illuminate\Support\Collection;

class WordProvider
{
    /**
     * @var Collection
     */
    private $assWords;

    public function __construct()
    {

    }

    public function getAssWords()
    {
        if ($this->assWords) {

            return $this->assWords;
        }

        $assWordsFile = config('asswords.asswords-file');

        $this->assWords = collect(file($assWordsFile))->map(function($assWord, $key) {
            return trim($assWord);
        });

        return $this->assWords;
    }
}

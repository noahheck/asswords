<?php

namespace App;

class WordFinder
{
    public function __construct()
    {

    }

    public function randomAssWord()
    {
        $asswordsFile = config('asswords.asswords-file');

        $words = file($asswordsFile);

        return collect($words)->random();
    }
}

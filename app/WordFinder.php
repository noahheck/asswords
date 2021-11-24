<?php

namespace App;

class WordFinder
{
    /**
     * @var WordProvider
     */
    private $wordProvider;

    public function __construct(WordProvider $wordProvider)
    {
        $this->wordProvider = $wordProvider;
    }

    public function randomAssWord()
    {
        $assWords = $this->wordProvider->getAssWords();

        return $assWords->random();
    }
}

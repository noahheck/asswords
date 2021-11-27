<?php

namespace App;

class WordValidator
{
    /**
     * @var WordProvider
     */
    private $wordProvider;

    public function __construct(WordProvider $wordProvider)
    {
        $this->wordProvider = $wordProvider;
    }

    public function validate($potentialAssWord)
    {
        $result = new ValidationResult($potentialAssWord);

        $result->setTestResults(
            $this->checkStringLength($potentialAssWord),
            $this->checkStringContainsAss($potentialAssWord),
            $this->checkStringIsValidAssWord($potentialAssWord)
        );

        return $result;
    }

    private function checkStringLength($potentialAssWord)
    {
        return \Str::length($potentialAssWord) >= 3;
    }

    private function checkStringContainsAss($potentialAssWord)
    {
        return \Str::contains(\Str::upper($potentialAssWord), 'ASS');
    }

    private function checkStringIsValidAssWord($potentialAssWord)
    {
        return $this->wordProvider->getAssWords()->contains($potentialAssWord)
            || $this->wordProvider->getAssWords()->contains(\Str::lower($potentialAssWord));
    }
}

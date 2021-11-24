<?php

namespace App;

class ValidationResult
{
    /**
     * @var string
     */
    private $word;

    /**
     * @var \Carbon\Carbon
     */
    private $testTime;

    /**
     * @var boolean
     */
    private $stringLengthValid;

    /**
     * @var boolean
     */
    private $stringContainsAss;

    /**
     * @var boolean
     */
    private $stringIsValidAssWord;

    public function __construct($word)
    {
        $this->word = $word;
        $this->testTime = now();
    }

    public function getWord(): string
    {
        return $this->word;
    }

    public function getTestTime(): \Carbon\Carbon
    {
        return $this->testTime;
    }

    public function setTestResults(bool $stringLengthValid, bool $stringContainsAss, bool $stringIsValidAssWord)
    {
        $this->stringLengthValid = $stringLengthValid;
        $this->stringContainsAss = $stringContainsAss;
        $this->stringIsValidAssWord = $stringIsValidAssWord;
    }

    public function isStringLengthValid(): bool
    {
        return $this->stringLengthValid;
    }

    public function doesWordContainAss(): bool
    {
        return $this->stringContainsAss;
    }

    public function isWordValidAssWord(): bool
    {
        return $this->stringIsValidAssWord;
    }
}

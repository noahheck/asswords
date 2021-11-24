<?php

namespace App\Http\Controllers;

use App\WordFinder;
use App\WordValidator;
use Illuminate\Http\Request;

class AssController extends Controller
{
    /**
     * @var WordFinder
     */
    private $wordFinder;

    public function __construct(WordFinder $wordFinder)
    {
        $this->wordFinder = $wordFinder;
    }

    public function ass(Request $request)
    {
        $word = $this->wordFinder->randomAssWord();

        $dailyWord = $this->getDailyWord($request);

        return view('ass', compact('word', 'dailyWord'));
    }

    public function validator(Request $request, WordValidator $wordValidator)
    {
        $dailyWord = $this->getDailyWord($request);

        $validationResult = false;

        if ($potentialAssWord = $request->query('potentialAssWord')) {
            $validationResult = $wordValidator->validate($potentialAssWord);
        }

        return view('validate', compact('dailyWord', 'validationResult', 'potentialAssWord'));
    }



    private function getDailyWord(Request $request)
    {
        $dailyWord = $request->cookie('daily');

        if (!$dailyWord) {
            $dailyWord = $this->wordFinder->randomAssWord();
            \Cookie::queue('daily', $dailyWord, 24 * 60);
        }

        return $dailyWord;
    }
}

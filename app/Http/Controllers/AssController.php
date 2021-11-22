<?php

namespace App\Http\Controllers;

use App\WordFinder;
use Illuminate\Http\Request;

class AssController extends Controller
{
    public function ass(Request $request, WordFinder $wordFinder)
    {
        $word = $wordFinder->randomAssWord();

        $dailyWord = $request->cookie('daily');

        if (!$dailyWord) {
            $dailyWord = $wordFinder->randomAssWord();
            \Cookie::queue('daily', $dailyWord, 24 * 60);
        }

        return  view('ass', compact('word', 'dailyWord'));
    }
}

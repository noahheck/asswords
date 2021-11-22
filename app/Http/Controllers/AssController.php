<?php

namespace App\Http\Controllers;

use App\WordFinder;
use Illuminate\Http\Request;

class AssController extends Controller
{
    public function ass(Request $request, WordFinder $wordFinder)
    {
        $word = $wordFinder->randomAssWord();

        return view('ass', compact('word'));
    }
}

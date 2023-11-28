<?php

namespace App\Http\Controllers;

use App\Models\Text;
use Illuminate\Http\Request;
use Illuminate\View\View;
class TextController extends Controller
{
    public function index()
    {
    $ = Text::all();
    return view('texts.index', compact('texts'));
    }

}

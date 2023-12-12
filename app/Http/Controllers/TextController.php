<?php

namespace App\Http\Controllers;

use App\Models\Text;
use Illuminate\Http\Request;
use Illuminate\View\View;
use Illuminate\Http\Response;
use Illuminate\Http\RedirectResponse;

class TextController extends Controller
{
    public function index()
    {
    $texts= Text::all();
    return view('texts.index', compact('texts'));
    }

    public function create()
    {
        //
    }

    public function store(Request $request): RedirectResponse
    {
        $validated = $request->validate([
            'message' => 'required|string|max:255',
        ]);

        Text::create($validated);

        return redirect(route('texts.index'));
    }
}

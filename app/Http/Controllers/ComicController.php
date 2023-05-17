<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comic;

class ComicController extends Controller
{
    public function index()
    {
        $comics = Comic::all();
        return view('comics.index', ['comics' => $comics]);
    }

    public function create()
    {
        return view('comics.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'ComicName' => 'required|max:255',
            'Description' => 'nullable',
            'AuthorID' => 'required',
            'Genre' => 'nullable',
            'Status' => 'nullable',
            'ThumbnailImage' => 'nullable|image',
        ]);

        $comic = new Comic;
        $comic->ComicName = $request->input('ComicName');
        $comic->Description = $request->input('Description');
        $comic->AuthorID = $request->input('AuthorID');
        $comic->Genre = $request->input('Genre');
        $comic->Status = $request->input('Status');

        if($request->hasFile('ThumbnailImage')) {
            $comic->ThumbnailImage = $request->file('ThumbnailImage')->store('images');
        }

        $comic->save();

        return redirect()->route('comics.index');
    }

    public function show($id)
    {
        $comic = Comic::findOrFail($id);
        return view('comics.show', ['comic' => $comic]);
    }

    public function edit($id)
    {
        $comic = Comic::findOrFail($id);
        return view('comics.edit', ['comic' => $comic]);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'ComicName' => 'required|max:255',
            'Description' => 'nullable',
            'AuthorID' => 'required',
            'Genre' => 'nullable',
            'Status' => 'nullable',
            'ThumbnailImage' => 'nullable|image',
        ]);

        $comic = Comic::findOrFail($id);
        $comic->ComicName = $request->input('ComicName');
        $comic->Description = $request->input('Description');
        $comic->AuthorID = $request->input('AuthorID');
        $comic->Genre = $request->input('Genre');
        $comic->Status = $request->input('Status');

        if($request->hasFile('ThumbnailImage')) {
            $comic->ThumbnailImage = $request->file('ThumbnailImage')->store('images');
        }

        $comic->save();

        return redirect()->route('comics.index');
    }

    public function destroy($id)
    {
        $comic = Comic::findOrFail($id);
        $comic->delete();

        return redirect()->route('comics.index');
    }
}

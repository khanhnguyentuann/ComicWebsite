<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Author;

class AuthorController extends Controller
{
    /**
     * Display a listing of the authors.
     */
    public function index()
    {
        // Get all authors from the database
        $authors = Author::all();

        // Return the index view with the list of authors
        return view('authors.index', ['authors' => $authors]);
    }

    /**
     * Show the form for creating a new author.
     */
    public function create()
    {
        // Return the create view (form to create a new author)
        return view('authors.create');
    }

    /**
     * Store a newly created author in the database.
     */
    public function store(Request $request)
    {
        // Validate request data
        $request->validate([
            'AuthorName' => 'required|max:255',
        ]);

        // Create a new author
        $author = new Author;
        $author->AuthorName = $request->AuthorName;

        // Save the author to the database
        $author->save();

        // Redirect to the show view with the author details
        // return redirect()->route('authors.show', ['id' => $author->AuthorID]);
        return redirect()->route('authors.index', ['id' => $author->AuthorID]);

    }

    /**
     * Display the specified author.
     */
    public function show($id)
    {
        // Get the author from the database
        $author = Author::findOrFail($id);

        // Return the show view with the author
        return view('authors.show', ['author' => $author]);
    }

    /**
     * Show the form for editing the specified author.
     */
    public function edit($id)
    {
        // Get the author from the database
        $author = Author::findOrFail($id);

        // Return the edit view with the author
        return view('authors.edit', ['author' => $author]);
    }

    /**
     * Update the specified author in the database.
     */
    public function update(Request $request, $id)
    {
        // Validate request data
        $request->validate([
            'AuthorName' => 'required|max:255',
        ]);

        // Get the author from the database
        $author = Author::findOrFail($id);

        // Update author data
        $author->AuthorName = $request->AuthorName;

        // Save the author to the database
        $author->save();

        // Redirect to the list of authors
        return redirect()->route('authors.index');
    }

    /**
     * Remove the specified author from the database.
     */
    public function destroy($id)
    {
        // Get the author from the database
        $author = Author::findOrFail($id);

        // Delete the author
        $author->delete();

        // Redirect to the list of authors
        return redirect()->route('authors.index');
    }
}
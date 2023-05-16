<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comic; // dòng mới thêm vào

class ComicController extends Controller
{
    public function index()
    {
        // Lấy danh sách truyện tranh từ cơ sở dữ liệu
        $comics = Comic::all();

        // Trả về view home và truyền dữ liệu truyện tranh
        return view('home', ['comics' => $comics]);
    }

    public function create()
    {
        return view('comics.create');
    }

    public function store(Request $request)
    {
        $comic = new Comic;
        $comic->title = $request->input('title');
        // Set the other fields...
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
        $comic = Comic::findOrFail($id);
        $comic->title = $request->input('title');
        // Update the other fields...
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
<!-- resources/views/comics/index.blade.php -->

<h1>Comics</h1>

<a href="{{ route('comics.create') }}">Create New Comic</a>

<ul>
    @forelse ($comics as $comic)
        <li>
            <a href="{{ route('comics.show', $comic->id) }}">{{ $comic->ComicName }}</a>
        </li>
    @empty
        <li>No comics found.</li>
    @endforelse
</ul>

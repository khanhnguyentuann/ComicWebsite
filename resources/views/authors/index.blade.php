<!-- resources/views/authors/index.blade.php -->

<h1>Authors</h1>

<a href="{{ route('authors.create') }}">Create New Author</a>

<ul>
    @forelse ($authors as $author)
        <li>
            <a href="{{ route('authors.show', ['id' => $author->AuthorID]) }}">{{ $author->AuthorName }}</a>
        </li>
    @empty
        <li>No authors found.</li>
    @endforelse
</ul>

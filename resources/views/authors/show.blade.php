<!-- resources/views/authors/show.blade.php -->

<h1>Author Details</h1>

<p><strong>Author Name:</strong> {{ $author->AuthorName }}</p>

<a href="{{ route('authors.edit', $author->AuthorID) }}">Edit</a>

<form action="{{ route('authors.destroy', $author->AuthorID) }}" method="POST">
    @csrf
    @method('DELETE')
    
    <button type="submit">Delete</button>
</form>

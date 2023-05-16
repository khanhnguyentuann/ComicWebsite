<!-- resources/views/comics/show.blade.php -->

<h1>Comic Details</h1>

<p><strong>Comic Name:</strong> {{ $comic->ComicName }}</p>
<p><strong>Description:</strong> {{ $comic->Description }}</p>
<p><strong>Author:</strong> {{ $comic->author->AuthorName }}</p>
<p><strong>Genre:</strong> {{ $comic->Genre }}</p>
<p><strong>Status:</strong> {{ $comic->Status }}</p>
<p><strong>Upload Date:</strong> {{ $comic->UploadDate }}</p>
<p><strong>Thumbnail Image:</strong> {{ $comic->ThumbnailImage }}</p>

<a href="{{ route('comics.edit', $comic->ComicID) }}">Edit</a>

<form action="{{ route('comics.destroy', $comic->ComicID) }}" method="POST">
    @csrf
    @method('DELETE')
    
    <button type="submit">Delete</button>
</form>

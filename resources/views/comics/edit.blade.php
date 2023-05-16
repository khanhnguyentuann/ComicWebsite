<!-- resources/views/comics/edit.blade.php -->

<h1>Edit Comic</h1>

<form action="{{ route('comics.update', $comic->ComicID) }}" method="POST">
    @csrf
    @method('PUT')

    <label for="comicName">Comic Name:</label>
    <input type="text" id="comicName" name="ComicName" value="{{ $comic->ComicName }}" required>

    <label for="description">Description:</label>
    <textarea id="description" name="Description" rows="3">{{ $comic->Description }}</textarea>

    <label for="author">Author:</label>
    <select id="author" name="AuthorID">
        @foreach ($authors as $author)
            <option value="{{ $author->AuthorID }}" {{ $author->AuthorID == $comic->AuthorID ? 'selected' : '' }}>
                {{ $author->AuthorName }}
            </option>
        @endforeach
    </select>

    <label for="genre">Genre:</label>
    <input type="text" id="genre" name="Genre" value="{{ $comic->Genre }}">

    <label for="status">Status:</label>
    <input type="text" id="status" name="Status" value="{{ $comic->Status }}">

    <label for="uploadDate">Upload Date:</label>
    <input type="text" id="uploadDate" name="UploadDate" value="{{ $comic->UploadDate }}">

    <label for="thumbnailImage">Thumbnail Image:</label>
    <input type="text" id="thumbnailImage" name="ThumbnailImage" value="{{ $comic->ThumbnailImage }}">

    <button type="submit">Update</button>
</form>

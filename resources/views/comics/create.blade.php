<!-- resources/views/comics/create.blade.php -->

<h1>Create New Comic</h1>

<form action="{{ route('comics.store') }}" method="POST">
    @csrf

    <div>
        <label for="comicName">Comic Name:</label>
        <input type="text" id="comicName" name="ComicName" required>
    </div>

    <div>
        <label for="description">Description:</label>
        <textarea id="description" name="Description"></textarea>
    </div>

    <div>
        <label for="authorID">Author ID:</label>
        <input type="text" id="authorID" name="AuthorID" required>
    </div>

    <div>
        <label for="genre">Genre:</label>
        <input type="text" id="genre" name="Genre">
    </div>

    <div>
        <label for="status">Status:</label>
        <input type="text" id="status" name="Status">
    </div>

    <div>
        <label for="uploadDate">Upload Date:</label>
        <input type="text" id="uploadDate" name="UploadDate">
    </div>

    <div>
        <label for="thumbnailImage">Thumbnail Image:</label>
        <input type="text" id="thumbnailImage" name="ThumbnailImage">
    </div>

    <button type="submit">Create</button>
</form>

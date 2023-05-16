<!-- resources/views/authors/edit.blade.php -->

<h1>Edit Author</h1>

<form action="{{ route('authors.update', $author->AuthorID) }}" method="POST">
    @csrf
    @method('PUT')

    <label for="authorName">Author Name:</label>
    <input type="text" id="authorName" name="AuthorName" value="{{ $author->AuthorName }}" required>

    <button type="submit">Update</button>
</form>

<!-- resources/views/authors/create.blade.php -->

<h1>Create New Author</h1>

<form action="{{ route('authors.store') }}" method="POST">
    @csrf

    <label for="authorName">Author Name:</label>
    <input type="text" id="authorName" name="AuthorName" required>

    <button type="submit">Create</button>
</form>


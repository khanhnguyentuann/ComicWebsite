<!-- resources/views/comics/edit.blade.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chỉnh sửa truyện tranh</title>
</head>
<body>
    <h1>Chỉnh sửa truyện tranh: {{ $comic->ComicName }}</h1>

    <form action="{{ route('comics.update', $comic->ComicID) }}" method="post" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <div>
            <label for="ComicName">Tên truyện:</label>
            <input type="text" id="ComicName" name="ComicName" value="{{ $comic->ComicName }}" required>
        </div>

        <div>
            <label for="Description">Mô tả:</label>
            <textarea id="Description" name="Description">{{ $comic->Description }}</textarea>
        </div>

        <div>
            <label for="AuthorID">ID Tác giả:</label>
            <input type="text" id="AuthorID" name="AuthorID" value="{{ $comic->AuthorID }}" required>
        </div>

        <div>
            <label for="Genre">Thể loại:</label>
            <input type="text" id="Genre" name="Genre" value="{{ $comic->Genre }}">
        </div>

        <div>
            <label for="Status">Trạng thái:</label>
            <input type="text" id="Status" name="Status" value="{{ $comic->Status }}">
        </div>

        <div>
            <label for="ThumbnailImage">Ảnh bìa:</label>
            <input type="file" id="ThumbnailImage" name="ThumbnailImage">
            <img src="{{ $comic->ThumbnailImage }}" alt="Current Thumbnail">
        </div>

        <div>
            <button type="submit">Cập nhật</button>
        </div>
    </form>

    <a href="{{ route('comics.show', $comic->ComicID) }}">Quay lại</a>
</body>
</html>

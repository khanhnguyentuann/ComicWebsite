<!-- resources/views/comics/create.blade.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thêm mới truyện tranh</title>
</head>
<body>
    <h1>Thêm mới truyện tranh</h1>

    <form action="{{ route('comics.store') }}" method="post" enctype="multipart/form-data">
        @csrf

        <div>
            <label for="ComicName">Tên truyện:</label>
            <input type="text" id="ComicName" name="ComicName" required>
        </div>

        <div>
            <label for="Description">Mô tả:</label>
            <textarea id="Description" name="Description"></textarea>
        </div>

        <div>
            <label for="AuthorID">ID Tác giả:</label>
            <input type="text" id="AuthorID" name="AuthorID" required>
        </div>

        <div>
            <label for="Genre">Thể loại:</label>
            <input type="text" id="Genre" name="Genre">
        </div>

        <div>
            <label for="Status">Trạng thái:</label>
            <input type="text" id="Status" name="Status">
        </div>

        <div>
            <label for="ThumbnailImage">Ảnh bìa:</label>
            <input type="file" id="ThumbnailImage" name="ThumbnailImage">
        </div>

        <div>
            <button type="submit">Lưu</button>
        </div>
    </form>

    <a href="{{ route('home') }}">Quay lại</a>
</body>
</html>

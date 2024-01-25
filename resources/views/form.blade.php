<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog Posts</title>
</head>
<body>
    <form action="{{ route('processForm') }}" method="POST">
        @csrf

        <label for="bookid">Id:</label>
        <input type="text" id="bookid" name="bookid" value="{{ old('bookid') }}">
        @error('id')
            <div style="color: red;">{{ $message }}</div>
        @enderror
        <br>

        <label for="title">Title:</label>
        <input type="text" id="title" name="title" value="{{ old('title') }}">
        @error('title')
            <div style="color: red;">{{ $message }}</div>
        @enderror
        <br>

        <label for="summary">Summary:</label>
        <input type="text" id="summary" name="summary" value="{{ old('summary') }}" required><br>

        <label for="author">Author:</label>
        <input type="text" id="author" name="author" value="{{ old('author') }}">
        @error('author')
            <div style="color: red;">{{ $message }}</div>
        @enderror
        <br>

        <label for="creationDate">Date of Creation:</label>
        <input type="date" id="creationDate" name="creationDate" value="{{ old('creationDate') }}" required><br>

        <label for="updateDate">Date of Update:</label>
        <input type="date" id="updateDate" name="updateDate" value="{{ old('updateDate') }}" required><br>

        <label for="tags">Tags:</label>
        <input type="text" id="tags" name="tags" value="{{ old('tags') }}" required><br>

        <label for="commentsCount">No. of Comments:</label>
        <input type="text" id="commentsCount" name="commentsCount" value="{{ old('commentsCount') }}">
        @error('commentsCount')
            <div style="color: red;">{{ $message }}</div>
        @enderror
        <br>

        <button type="submit">Submit</button>
    </form>
</body>
</html>

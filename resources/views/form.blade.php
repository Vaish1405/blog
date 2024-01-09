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
        <label for="id">Id:</label>
        <input type="text" id="id" name="id" required><br>

        <label for="title">Title:</label>
        <input type="text" id="title" name="title" required><br>

        <label for="summary">Summary:</label>
        <input type="text" id="summary" name="summary" required><br>

        <label for="author">Author:</label>
        <input type="text" id="author" name="author" required><br>

        <label for="creationDate">Date of Creation:</label>
        <input type="date" id="creationDate" name="creationDate" required><br>

        <label for="updateDate">Date of Update:</label>
        <input type="date" id="updateDate" name="updateDate" required><br>

        <label for="tags">Tags:</label>
        <input type="text" id="tags" name="tags" required><br>

        <label for="commentsCount">No. of Comments:</label>
        <input type="number" id="commentsCount" name="commentsCount" required><br>

        <button type="submit">Submit</button>
    </form>
</body>
</html>
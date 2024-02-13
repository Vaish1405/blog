<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your Blog Title</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }

        header {
            background-color: #333;
            color: #fff;
            padding: 10px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        #logo {
            width: 50px; 
            height: 50px; 
        }

        #userAndSearch {
            display: flex;
            align-items: center;
        }

        #user {
            margin-right: 10px;
            cursor: pointer;
        }

        input[type="text"] {
            padding: 5px;
            border: 1px solid #ccc;
            border-radius: 3px;
            margin-right: 10px;
        }

        main {
            /* padding: 20px; */
            display: flex;
        }

        .blog-box {
            background-color: rgba(255, 192, 203, 0.8); 
            padding: 10px;
            margin: 50px;
            border-radius: 10px;
            width: 300px;
            box-sizing: border-box;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); 
        }

        .blog-box h2 {
            font-size: 1.5em;
            margin-bottom: 10px;
        }

        .blog-box p {
            font-size: 1em;
            margin-bottom: 5px;
        }
    </style>
</head>
<body>

<header>
    <img src="company_logo.png" alt="Company Logo" id="logo">
    <div id="userAndSearch">
        <form action="#" method="get">
            <input type="text" name="search" placeholder="Search...">
        </form>
        <div id="user">User Icon</div>
    </div>
</header>

<main>
    @foreach ($blogs as $blog)
        <div class="blog-box">
            <h2>{{ $blog->heading }}</h2>
            <p>{{ $blog->description }}</p>
            <p>{{ $blog->creationDate }}</p>
            <p>{{ $blog->author_id }}</p>
        </div>
    @endforeach
</main>

</body>
</html>

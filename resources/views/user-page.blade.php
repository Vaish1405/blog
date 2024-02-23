<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Homepage</title>
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
        input[type="text"] {
            padding: 5px;
            border: 1px solid #ccc;
            border-radius: 3px;
            margin-right: 10px;
        }
        #userAndSearch {
            display: flex;
            align-items: center;
        }

        #user {
            margin-right: 10px;
            cursor: pointer;
        }
        #container {
            display: flex;
            max-width: 1200px;
            margin: 20px auto;
        }
        a{
            color: white;
        }
        #user-info {
            flex: 1;
            padding: 20px;
            background-color: #fff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            border-radius: 5px;
        }

        #user-info img {
            width: 100px;
            height: 100px;
            border-radius: 50%;
            object-fit: cover;
            margin-bottom: 10px;
        }

        #posts {
            flex: 2;
            margin-left: 20px;
            padding: 20px;
            background-color: #fff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            border-radius: 5px;
            overflow-y: auto;
            max-height: 500px;
        }

        .post {
            margin-bottom: 20px;
            border-bottom: 1px solid #ddd;
            padding-bottom: 10px;
        }

        .post:last-child {
            border-bottom: none;
        }

        .post h2 {
            margin-bottom: 5px;
        }

        .post p {
            margin: 0;
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
            @auth 
                <form action="{{ route('logout') }}" method="POST">
                    @csrf
                    <button type="submit">Logout</button>
                </form>
            @else
                <a href="{{ url('login') }}">
                    <div id="user">Login</div>
                </a>
                <a href="{{ url('register') }}">
                    <div id="user">Register</div>
                </a>
            @endauth 
        </div>
    </header>

    <div id="container">
        <div id="user-info">
            <img src="path/to/profile-pic.jpg" alt="Profile Picture">
            <h1>User Name</h1>
            <p>Email: user@example.com</p>
            <p>Contact: +1234567890</p>
        </div>

        <div id="posts">
            <div class="post">
                <h2>Post Title 1</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. ...</p>
            </div>
            <div class="post">
                <h2>Post Title 2</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. ...</p>
            </div>
        </div>
    </div>

</body>
</html>

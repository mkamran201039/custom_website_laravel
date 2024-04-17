<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        h1 {
            text-align: center;
            color: #333;
        }
        .buttons {
            text-align: center;
        }
        .buttons a {
            text-decoration: none;
            margin: 10px;
        }
        .buttons button {
            padding: 10px 20px;
            background-color: #007bff;
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }
        .buttons button:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
<h1>Welcome to Custom Website</h1> <br><br>
<div class="buttons">
    <a href="login"><button>Login</button></a>
    <a href="{{ url('/registration') }}"><button>Registration</button></a>
</div>
</body>
</html>


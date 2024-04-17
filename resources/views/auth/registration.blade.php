<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        /* Center the form */
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        .login-form {
            width: 300px;
        }
    </style>
</head>
<body>
<div class="login-form">
    <h2 class="text-center mb-4">Registration</h2>
    <form method="POST"  action={{route("register-user")}} >
        @csrf

        <div class="form-group"  >

            <input type="text" class="form-control" id="name" name="name" placeholder="Enter Full Name" required>
        </div>

        <div class="form-group">

            <input type="email" class="form-control" id="email" name="email" placeholder="Enter email" required>
        </div>
        <div class="form-group">

            <input type="password" class="form-control" id="password" name="password" placeholder="Password" required>
        </div>
        <button type="submit" class="btn btn-primary btn-block">Registration</button>
    </form>
</div>
<!-- Bootstrap JS (optional, if you need any Bootstrap JS features) -->
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>

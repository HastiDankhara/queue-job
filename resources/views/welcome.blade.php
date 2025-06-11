<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome Page</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
            text-align: center;
            padding: 50px;
        }
        .container {
            background: white;
            padding: 30px;
            border-radius: 10px;
            display: inline-block;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }
        .success {
            color: green;
            margin-bottom: 20px;
        }
    </style>
</head>
<body>

    <div class="container">
        @if(session('success'))
            <h2 class="success">{{ session('success') }}</h2>
        @endif

        <h1>Welcome to Our Website!</h1>
        <p>Your registration was successful.</p>
        <a href="{{ route('register') }}">Go back to Registration</a>
    </div>

</body>
</html>

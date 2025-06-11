<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>registration status</title>
</head>
<body>
    <h1>Registration Successful</h1>
    <p>Thank you for registering. Your registration was successful.</p>
    <p>Here are your registration details:</p>
    <ul>
        <li><strong>Username:</strong> {{ $maildata['name'] }}</li>
        <li><strong>Email:</strong> {{ $maildata['email'] }}</li>
        {{-- <li><strong>Registration Date:</strong> {{ $registrationDate }}</li> --}}
</body>
</html>
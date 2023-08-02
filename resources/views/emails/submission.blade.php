<!DOCTYPE html>
<html>
<head>
    <title>New Contact Form Submission</title>
</head>
<body>
    <h1>Reservation Form</h1>
    <p>Name: {{ $submission['name'] }}</p>
    <p>Email: {{ $submission['email'] }}</p>
    <p>Phone: {{ $submission['phone'] }}</p>
    <p>Guest: {{ $submission['guest'] }}</p>
    <p>Date: {{ $submission['date'] }}</p>
    <p>Time: {{ $submission['time'] }}</p>
    <p>Message: {{ $submission['message'] }}</p>
</body>
</html>

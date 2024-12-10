<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <title>Show CV</title>
</head>
<body>
<div class="container mt-5">
    <h1>{{ $cv->name }}</h1>
    <p>Email: {{ $cv->email }}</p>
    <h2>Profile</h2>
    <p>{{ $cv->profile }}</p>
    <h2>Education</h2>
    <p>{{ $cv->education }}</p>
    <h2>Experience</h2>
    <p>{{ $cv->experience }}</p>
    <h2>Skills</h2>
    <p>{{ $cv->skills }}</p>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CV PDF</title>
</head>
<body>
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
</body>
</html>
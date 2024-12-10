<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <title>Create CV</title>
</head>
<body>
    <div class="container mt-5">
        <h1 class="mb-4">Create CV</h1>
        <form action="{{ route('cvs.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="name">Name:</label>
                <input type="text" name="name" id="name" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" name="email" id="email" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="profile">Profile:</label>
                <textarea name="profile" id="profile" class="form-control" required></textarea>
            </div>
            <div class="form-group">
                <label for="education">Education:</label>
                <textarea name="education" id="education" class="form-control" required></textarea>
            </div>
            <div class="form-group">
                <label for="experience">Experience:</label>
                <textarea name="experience" id="experience" class="form-control" required></textarea>
            </div>
            <div class="form-group">
                <label for="skills">Skills:</label>
                <textarea name="skills" id="skills" class="form-control" required></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Create CV</button>
        </form>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    </body>
    </html>
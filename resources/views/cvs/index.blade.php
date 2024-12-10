<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <title>CVs</title>
</head>
<body>
<div class="container mt-5">
    <h1 class="mb-4">CV List</h1>
    <a href="{{ route('cvs.create') }}" class="btn btn-success mb-3">Create New CV</a>
    @if (session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif
    <ul class="list-group">
        @foreach ($cvs as $cv)
            <li class="list-group-item d-flex justify-content-between align-items-center">
                <a href="{{ route('cvs.show', $cv->id) }}">{{ $cv->name }}</a>
                <div>
                    <a href="{{ route('cvs.edit', $cv->id) }}" class="btn btn-warning btn-sm">Edit</a>
                    <form action="{{ route('cvs.destroy', $cv->id) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                    </form>
                </div>
            </li>
        @endforeach
    </ul>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
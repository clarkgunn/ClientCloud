<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Files</title>
</head>
<body>
    <ul>
        @foreach ($files as $file)
        <li>{{ $file['name'] }}</li>
        @endforeach
    </ul>
</body>
</html>

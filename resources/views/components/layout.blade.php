<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>{{ $title ?? 'Todo Manager' }}</title>
</head>
<body>
<h1>Todos</h1>
<hr/>
{{ $slot }}
</body>
</html>
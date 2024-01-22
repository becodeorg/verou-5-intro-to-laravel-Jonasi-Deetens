<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
</head>
<body>
    <header>
        @include('components.header')
    </header>
    <main>
        {{ $content }}
    </main>
    <footer>      
        @include('components.footer')
    </footer>
</body>
</html>
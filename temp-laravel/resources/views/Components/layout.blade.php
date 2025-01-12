<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>My Laravel</title>
</head>
<body>
    <nav>

        <x-links href="/">Home</x-links>
        <x-links href="/about">About</x-links>
        <x-links href="/contact">Contact</x-links>
        
        
        {{-- <a href="/">Home</a>
        <a href="/about">About</a>
        <a href="/contact">Contact</a> --}}
    </nav>

    <h1>
        {{-- nag aact siya na parang {{ $slot }} pero may specific name siya --}}
        This is the {{ $headerTitle }}
    </h1>

    {{ $slot }}
</body>
</html>
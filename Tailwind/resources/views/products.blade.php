<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Anime List</title>
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="/css/app.css" rel="stylesheet" />
    <script src="https://cdn.tailwindcss.com"></script>

    <!-- Styles / Scripts -->
    @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    @endif
</head>
<body class="bg-gray-100 min-h-screen">
    <div class="container mx-auto px-4 py-8">
        <h1 class="text-5xl font-bold text-center mb-8 bg-gradient-to-r from-purple-600 to-blue-500 bg-clip-text text-transparent">
            Anime Collection
        </h1>

        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 xl:grid-cols-5 gap-6">
            @foreach ($products as $product)
                <div class="bg-white rounded-lg shadow-md overflow-hidden transition-transform duration-200 hover:scale-105 hover:shadow-lg">
                    <div class="h-48 bg-gray-200 animate-pulse"></div> <!-- Image placeholder -->
                    <div class="p-4">
                        <h3 class="text-lg font-semibold text-gray-800 mb-2 truncate">{{ $product['title'] }}</h3>
                        <div class="flex items-center justify-between text-sm text-gray-600">
                            <span class="bg-blue-100 text-blue-800 px-2 py-1 rounded">TV Series</span>
                            <span>⭐ 4.5</span>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</body>
</html>
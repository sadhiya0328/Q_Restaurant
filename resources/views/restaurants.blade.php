<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>QRestaurant | All Restaurants</title>
    <link rel="stylesheet" href="{{ asset('style.css') }}">
</head>
<body>
    <header>
        <h1>🍽️ QRestaurant</h1>
        <p>Explore top restaurants, cuisines, and price ranges</p>
    </header>

    <div class="container">
        <h2 class="page-title">Available Restaurants</h2>
        <div class="grid">
            @foreach ($restaurants as $rest)
                <div class="card">
                    <img src="{{ $rest['image'] }}" alt="{{ $rest['name'] }}">
                    <div class="info">
                        <h3>{{ $rest['name'] }}</h3>
                        <p class="meta">{{ $rest['cuisine'] }} • ⭐ {{ $rest['rating'] }}</p>
                        <p class="desc">{{ Str::limit($rest['description'], 80) }}</p>
                        <p class="location">📍 {{ $rest['location'] }}</p>
                        <p class="price-range">💰 Price Range: ₹{{ $rest['priceRange'] }}</p>
                        <a href="{{ route('menu', ['id' => $rest['id']]) }}" class="btn">
                          View Menu
                         </a>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

    <footer>
        <p>© 2025 QRestaurant | Crafted with ❤️ by sadiya</p>
    </footer>
</body>
</html>

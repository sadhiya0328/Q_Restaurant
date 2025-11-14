<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $menu['restaurantName'] ?? 'Menu' }} | QRestaurant</title>
    <link rel="stylesheet" href="{{ asset('style.css') }}">
</head>
<body>
    <header>
        <a href="{{ route('restaurants') }}" class="back">← Back</a>
        <h1>{{ $menu['restaurantName'] ?? 'Restaurant Menu' }}</h1>
        <p>Explore the signature dishes of {{ $menu['restaurantName'] }}</p>
    </header>

    <div class="container">
        <h2 class="page-title">Menu Items</h2>
        <div class="grid">
            @foreach ($menu['data'] as $item)
                <div class="card">
                    <img src="{{ $item['image'] }}" alt="{{ $item['name'] }}">
                    <div class="info">
                        <h3>{{ $item['name'] }}</h3>
                        <p class="desc">{{ $item['description'] }}</p>
                        <p class="meta">
                            {{ $item['isVeg'] ? '🟢 Veg' : '🔴 Non-Veg' }} |
                            🌶️ {{ $item['spiceLevel'] }} |
                            {{ $item['category'] }}
                        </p>
                        <p class="price">₹{{ $item['price'] }} {{ $item['currency'] }}</p>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

    <footer>
        <p>© 2025 QRestaurant | Enjoy your meal 😋</p>
    </footer>
</body>
</html>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        {{ $menu['restaurantName'] ?? 'Restaurant Menu' }} | QRestaurant
    </title>
    <link rel="stylesheet" href="{{ asset('style.css') }}">
</head>

<body>

    <!-- HEADER -->
    <header>
        <a href="{{ route('restaurants') }}" class="back">← Back</a>

        @if(isset($menu['restaurantName']))
            <h1>{{ $menu['restaurantName'] }}</h1>
            <p>Explore the signature dishes of {{ $menu['restaurantName'] }}</p>
        @else
            <h1>Restaurant Menu</h1>
            <p>Explore our special dishes</p>
        @endif
    </header>

    <!-- MENU CONTAINER -->
    <div class="container">
        <h2 class="page-title">Menu Items</h2>

        <div class="grid">

            {{-- CHECK IF MENU ITEMS EXIST --}}
            @if(isset($menu['data']) && count($menu['data']) > 0)

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

            @else
                <!-- NO MENU MESSAGE -->
                <p class="no-menu">
                    No menu items available for this restaurant.
                </p>
            @endif

        </div>
    </div>

    <!-- FOOTER -->
    <footer>
        <p>© 2025 QRestaurant | Enjoy your meal 😋</p>
    </footer>

</body>
</html>

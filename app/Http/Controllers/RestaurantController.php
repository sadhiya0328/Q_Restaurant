<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Http;

class RestaurantController extends Controller
{
    // 🏠Fetch all restaurant data (like loadCityData)
    public function loadRestaurantData()
    {
        // Fetch data from the Restaurant API
        $response = Http::get('https://qresturant.onrender.com/restaurants');

        // Check if the request was successful
        if ($response->successful()) {
            $restaurants = $response->json()['data']; // Decode JSON and access 'data'
        } else {
            // Handle error (fallback)
            $restaurants = [];
        }

        // Pass data to the view
        return view('restaurants', compact('restaurants'));
    }

    // 🍛 Fetch menu items for a specific restaurant (like place)
    public function menu($id)
    {
        // Fetch data for a specific restaurant menu
        $response = Http::get("https://qresturant.onrender.com/restaurants/menu?restaurant={$id}");

        // Check if successful
        if ($response->successful()) {
            $menu = $response->json(); // Full menu response
        } else {
            $menu = [];
        }

        // Pass data and restaurant ID to view
        return view('menu', compact('menu', 'id'));
    }
}

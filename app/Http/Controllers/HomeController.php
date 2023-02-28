<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $pages = ['Characters', 'Comics', 'Movie', 'TV', 'Games', 'Collectibles', 'Videos', 'Fans', 'News', 'Shop'];
        $comics = config('comics');
        $banners = [
            [
                'image' => 'buy-comics-digital-comics.png',
                'text' => 'Digital Comics',
            ],
            [
                'image' => 'buy-comics-merchandise.png',
                'text' => 'DC MERCHANDISE',
            ],
            [
                'image' => 'buy-comics-subscriptions.png',
                'text' => 'SUBSCRIPTION',
            ],
            [
                'image' => 'buy-comics-shop-locator.png',
                'text' => 'COMIC SHOP LOCATOR',
            ]
        ];
        return view('home', compact('pages', 'comics', 'banners'));
    }
}

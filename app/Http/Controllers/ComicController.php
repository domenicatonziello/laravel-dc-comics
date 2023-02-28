<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comic;

class ComicController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $comics = Comic::all();
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
        return view('comics.index', compact('comics', 'banners'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Comic $comic)
    {
        // dd($comic);
        return view('comics.show', compact('comic'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}

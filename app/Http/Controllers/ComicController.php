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
        return view('comics.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->all();

        // creo nuova istanza
        $comic = new Comic();
        // assegno proprietà
        $comic->fill($data);
        // salvo in db
        $comic->save();

        // redirect
        return to_route('comics.show', $comic);
    }

    /**
     * Display the specified resource.
     */
    public function show(Comic $comic)
    {
        return view('comics.show', compact('comic'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Comic $comic)
    {
        return view('comics.edit', compact('comic'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Comic $comic)
    {
        $data = $request->all();
        $comic->fill($data);
        $comic->save();

        return to_route('comics.show', $comic);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Comic $comic)
    {
        $comic->delete();
        return to_route('comics.index');
    }
}

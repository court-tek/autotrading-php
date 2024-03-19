<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Listing;
use App\Models\Photo;
use Illuminate\Support\Facades\DB;

class WelcomeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $cars = [
            "nissan" => [
                "silvia",
                "180sx",
                "sunny",
                "fairlady z",
                "GTR R33",
                "GTR R32",
                "skyline",
            ],
            "toyota" => [
                "supra",
                "aristo",
                "chaser",
                "altezza",
                "carolla 86"
            ],
            "mitsubishi" => [
                "3000 gt",
                "evolution",
            ],
            "honda" => [
                "s 2000",
                "nsx",
                "civic si",
                "prelude",
                "integra",
            ],
            "subaru" => [
                "wrx",
                "wrx sti",
                "forester",
                "impreza",
            ],
        ];
        $models = ['Nissan Silvia', 'Skyline R34', 'Mazda 3', 'Mazda RX7', 'Toyota Chaser', 'Subaru WRX', 'Subaru WRX STI', 'Ford Mustang', 'Ford Bronco'];
        $featured = Listing::all()->where('featured', 1);
        // $featured->id;
        // return $featured;
        $photos = Photo::all()->where('featured', 1);

        return view("welcome", [
            "models" => $models,
            "featured" => $featured,
            'photos' => $photos,
            'cars' => $cars
        ]);
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
    public function show(string $id)
    {
        //
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

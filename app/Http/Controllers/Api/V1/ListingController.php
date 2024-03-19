<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Photo;

class ListingController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
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
        $photos = Photo::where([
            'listing_id' => $id
        ])->get();
        
        return $photos;
    }

    /**
     * Display the specified resource.
     */
    public function welcome(string $id)
    {
        $photos = Photo::where([
            'listing_id' => $id,
            'featured' => 1
        ])->get();
        
        return $photos;
    }

    /**
     * Display the specified resource.
     */
    public function autoOptions(string $make)
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
        
        return $cars[$make];
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

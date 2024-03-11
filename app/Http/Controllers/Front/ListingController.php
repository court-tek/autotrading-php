<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Listing;
use App\Models\Photo;
use Illuminate\Http\Request;

class ListingController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $cars = [
            "wrx" => "subaru",
            "wrx sti" => "subaru",
            "chaser" => "toyota",
            "silvia" => "nissan",
            "rx7" => "mazda",
            "skyline r34" => "nissan"
        ];

        return view("front/index", ["cars" => $cars]);
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
    public function show(string $slug, string $id)
    {
        $listing = Listing::where([
            'id' => $id,
            'slug' => $slug
        ])->first();

        $photos = Photo::where([
            'listing_id' => $id
        ])->get();
        
        $photosJSON = $photos->toJson();
        // return $photosJSON;
        return view('front/show', [
            'listing' => $listing,
            'photos' => $photos,
            'photosJSON' => $photosJSON,
            'slug' => $slug,
            'id' => $id
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function api(string $id)
    {
        $photos = Photo::where([
            'listing_id' => $id
        ])->get();
        
        return $photos;
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

    // account methods

    /**
     * Remove the specified resource from storage.
     */
    public function save()
    {
        $cars = [
            "wrx" => "subaru",
            "wrx sti" => "subaru",
            "chaser" => "toyota",
            "silvia" => "nissan",
            "rx7" => "mazda",
            "skyline r34" => "nissan"
        ];

        return view("front/saved", ["cars" => $cars]);
    }
}

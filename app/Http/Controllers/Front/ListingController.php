<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Listing;
use App\Models\Photo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ListingController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $make = $request->input('make');
        $model = $request->input('model');
        $min_price = (is_null($request->input('min_price'))) ? 0 : $request->input('min_price');
        $max_price = (is_null($request->input('max_price'))) ? 1000000 : $request->input('max_price');
        $min_mileage = (is_null($request->input('min_mileage'))) ? 0 : $request->input('min_mileage');
        $max_mileage = (is_null($request->input('max_mileage'))) ? 400000 : $request->input('max_mileage');
        $min_year = (is_null($request->input('min_year'))) ? 1975 : $request->input('min_year');
        $max_year = (is_null($request->input('max_year'))) ? 2024 : $request->input('max_year');
        
        
        $listings = DB::table('listings')->where('status', 'published')->where('make', $make)->where('model', $model)->whereBetween('price', [$min_price, $max_price])->whereBetween('mileage', [$min_mileage, $max_mileage])->whereBetween('year', [$min_year, $max_year])->get();

        return view('front/index', [
            'listings' => $listings,
        ]);
    }
    // Welcomme page queries
    /**
     * Displays listings by make
     */
    public function welcomeSearch(Request $request, $make = null, $model = null, $min_price, $max_price, $min_year, $max_year)
    {    
        $filters = [
            'make' => $make,
            'model' => $model,
            'min_price' => $min_price,
            'max_price' => $max_price,
            'min_year' => $min_year,
            'max_year' => $max_year,
        ];

        $listings = DB::table('listings')->where(function($query) use($filters) {
            foreach ($filters as $column => $value) {
                if (!is_null($value)) {
                    $query->where($column, $value);
                }
            }
        })->where('status', 'published')->get();

        return view('front/index', ['listings' => $listings]);
    }

    /**
     * Displays listings by make
     */
    public function getMake(Request $request, $make = null)
    {    
        $filters = [
            'make' => $make
        ];

        $listings = DB::table('listings')->where(function($query) use($filters) {
            foreach ($filters as $column => $value) {
                if (!is_null($value)) {
                    $query->where($column, $value);
                }
            }
        })->where('status', 'published')->get();

        return view('front/index', ['listings' => $listings]);
    }

    /**
     * Displays listings by body type.
     */
    public function getBodyType(Request $request, $body_type = null)
    {    
        $filters = [
            'body_type' => $body_type,
        ];

        $listings = DB::table('listings')->where(function($query) use($filters) {
            foreach ($filters as $column => $value) {
                if (!is_null($value)) {
                    $query->where($column, $value);
                }
            }
        })->where('status', 'published')->get();

        return view('front/index', ['listings' => $listings]);
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

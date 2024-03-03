<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class listingsController extends Controller
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
    public function show(string $id)
    {
        $car = [
            "title" => "2019 acura nsx",
            "thumbnails" => [
                "https://raw.githubusercontent.com/court-tek/autotrading-php/main/public/images/acura_nsx1.jpeg",
                "https://raw.githubusercontent.com/court-tek/autotrading-php/main/public/images/acura_nsx2.jpeg",
                "https://raw.githubusercontent.com/court-tek/autotrading-php/main/public/images/acura_nsx3.jpeg",
                "https://raw.githubusercontent.com/court-tek/autotrading-php/main/public/images/acura_nsx4.jpeg",
                "https://raw.githubusercontent.com/court-tek/autotrading-php/main/public/images/acura_nsx5.jpeg",
                "https://raw.githubusercontent.com/court-tek/autotrading-php/main/public/images/acura_nsx6.jpeg"
            ]
        ];

        return view("front/show", ["car" => $car]);
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

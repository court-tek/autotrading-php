<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Listing;
use App\Helper\Helper;

class AdminController extends Controller
{
    /**
     * Displays the admin home dashboard.
     */
    public function dashboard()
    {
        return view("admin/dashboard");
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $listings = Listing::all();

        return view("admin/listings/index", ["listings" => $listings]);
    }
    
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("admin/listings/create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validations
        request()->validate([
            'title' => 'required',
            'vin_number' => 'required',
            'mileage' => 'required',
            'transmission' => 'required',
            'fuel' => 'reuired',
            'color' => 'required',
            'driveline' => 'required',
            'type' => 'required',
            'interior' => 'required',
            'mpg' => 'required'
        ]);

        $listing = new Listing;

        $listing->title = $request->title;
        $listing->vin_number = $request->vin_number;
        $listing->model = $request->model;
        $listing->make = $request->make;
        $listing->fuel_type = $request->fuel_type;
        $listing->color = $request->color;
        $listing->body_type = $request->body_type;
        $listing->driveline = $request->driveline;
        $listing->mileage = $request->mileage;
        $listing->type = $request->type;
        $listing->transmission = $request->transmission;
        $listing->interior = $request->interior;
        $listing->engine = $request->engine;
        $listing->mpg = $request->mpg;
        $listing->wheel_type = $request->wheel_type;
        $listing->horsepower = $request->horsepower;
        $listing->year = $request->year;
        $listing->options = $request->options;
        $listing->price = $request->price;
        $listing->city = $request->city;
        $listing->state = $request->state;
        $listing->description = $request->description;

        $listing->slug = Helper::slugify("{$request->make}-{$request->model}-{$request->city}-{$request->state}");
        $listing->save();

        session()->flash('success', 'Created New Auto Listing Successfully');

        return redirect("/admin/listings/{$listing->slug}/{$listing->id}/edit");
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
    public function edit(string $slug, $id)
    {
        $listing = Listing::where(['is' => $id, 'slug' => $slug])->first();
        return view("admin/listings/edit", ['listing' => $listing]);
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

<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class welcomeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $models = ['Nissan Silvia', 'Skyline R34', 'Mazda 3', 'Mazda RX7', 'Subaru', 'Subaru WRX', 'Subaru WRX STI', 'Ford Mustang', 'Ford Bronco'];

        return view("welcome", ["models" => $models]);
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

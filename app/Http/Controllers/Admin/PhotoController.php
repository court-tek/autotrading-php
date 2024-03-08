<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Ramsey\Uuid\Type\Integer;
use App\Models\Listing;
use App\Models\User;
use App\Models\Photo;
use App\Helper\Helper;  

class PhotoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index($slug, $id)
    {
        $photos = Photo::where([
            'user_id' => auth()->user()->id,
            'listing_id' => $id
        ])->paginate(5);
        
        if($photos->total() < 1) {
            return redirect("admin/{$slug}/{$id}/photos/create");
        }

        return view('admin/photos/index', [
            'photos' => $photos,
            'id' => $id
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create($slug, $id)
    {
        // $photo = $id;

        return view('admin/photos/create');
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

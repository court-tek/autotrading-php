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
        ])->paginate(8);
        
        if($photos->total() < 1) {
            return redirect("admin/{$slug}/{$id}/photos/create");
        }

        return view('admin/photos/index', [
            'photos' => $photos,
            'id' => $id,
            'slug' => $slug
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create($slug, $id)
    {
        // $photo = $id;

        return view('admin/photos/create', ['slug' => $slug, 'id' => $id]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request, $slug, $id)
    {
         // $this->authorize('create', Photo:class); 

         request()->validate([
            'image' => 'required|file|mimes:jpg,avif,png,webp'
        ]);

        $allPhotos = Photo::all();
        $yaFeatured = Photo::where([
            'listing_id' => $id,
            'featured' => 1
        ])->first();
        
        $newName = time() . '-' . $request->file('image')->getClientOriginalName();
        $size = $request->file('image')->getSize();
        $request->file('image')->move(public_path('images'), $newName);
        

        $photo = new Photo;

        // die(var_dump($article->user_id));
        $photo->name = $newName;
        $photo->size = $size;
        $photo->user_id = auth()->user()->id;
        if ($yaFeatured) {
            $photo->featured = 0;
        } else {
            $photo->featured = 1;
        }
        $photo->listing_id = $id;
        // $photo->featured = ($allPhotos->count() < 1 ) ? 1 : 0;
        $photo->save();

        session()->flash('success', "Added New Photo to id: {$id} Successfully");

        return redirect("admin/{$slug}/{$id}/photos");
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
     * Update the specified resource in storage.
     */
    public function featured($slug, $id, $photo_id)
    {
  
        $old_photo = Photo::where([
            'listing_id' => $id,
            'featured' => 1
        ])->first();

        $old_photo->featured = 0;
        
        $old_photo->save();

        $new_photo = Photo::where([
            'listing_id' => $id,
                'id' => $photo_id
            ])->first();
    
        $new_photo->featured = 1;
    
        $new_photo->save();

        session()->flash('success', 'This photo is now the featured');

        return redirect("/admin/{$slug}/{$id}/photos");
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $slug, string $id, string $photo_id)
    {
        $listing = Photo::find($photo_id);

        $listing->delete();

        session()->flash('success', "Photo Has Been Deleted Successfully");

        return redirect("admin/{$slug}/{$id}/photos");
    }
}

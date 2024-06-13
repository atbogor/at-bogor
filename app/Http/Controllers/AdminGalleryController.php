<?php

namespace App\Http\Controllers;

use App\Models\Gallery;
use Cviebrock\EloquentSluggable\Services\SlugService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AdminGalleryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('dashboard.gallery.index', [
            'title' => 'Gallery',
            'active' => 'gallery',
            'galleries' => Gallery::orderBy('id')->paginate(5)->withQueryString()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.gallery.create', [

        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'title' => 'required|max:255',
            'slug' => 'required|unique:tickets',
            'image' => 'image|file|max:1024',
        ]);

        if ($request->file('image')) {
            $validatedData['image'] = $request->file('image')->store('gallery-images');
        }

        $validatedData['user_id'] = auth()->user()->id;

        Gallery::create($validatedData);
        return redirect('/dashboard/galleries')->with('success', 'New gallery item has been added!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Gallery $gallery)
    {
        return view('dashboard.gallery.show', [
            'gallery' => $gallery,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Gallery $gallery)
    {
        return view('dashboard.gallery.edit', [
            'gallery' => $gallery,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Gallery $gallery)
    {
        $rules = [
            'title' => 'required|max:255',
            'image' => 'image|file|max:1024',
        ];

        if ($request->slug != $gallery->slug) {
            $rules['slug'] = 'required|unique:galleries';
        }

        $validatedData = $request->validate($rules);

        if ($request->file('image')) {
            if ($request->oldImage) {
                Storage::delete($request->oldImage);
            }
            $validatedData['image'] = $request->file('image')->store('gallery-images');
        }

        Gallery::where('id', $gallery->id)->update($validatedData);
        return redirect('/dashboard/galleries')->with('success', 'New Gallery Item has been updated!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Gallery $gallery)
    {
        Gallery::destroy($gallery->id);
        return redirect('/dashboard/galleries')->with('success', 'Gallery Item has been deleted!');
    }

    public function checkSlug(Request $request)
    {
        $slug = SlugService::createSlug(Gallery::class, 'slug', $request->title);
        return response()->json(['slug' => $slug]);
    }
}

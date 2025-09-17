<?php

namespace App\Http\Controllers;

use App\Models\Gallery;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class GalleryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.add-gallery', [
            'data'     => Gallery::all(),
            'title'    => 'Add Gallery'
        ]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'img' => 'required|array',
            'img.*' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $imagePaths = [];

        if ($request->hasFile('img')) {
            foreach ($request->file('img') as $image) {
                // Create a unique filename
                $filename = time() . '-' . uniqid() . '.' . $image->getClientOriginalExtension();

                // Store the file
                $path = $image->storeAs('img', $filename, 'public');

                $imagePaths[] = $path;
            }
        }

        // Save to database
        Gallery::create([
            'name' => $request->input('name', 'Sample Product'),
            'img' => json_encode($imagePaths, JSON_UNESCAPED_SLASHES)
        ]);

        // Show notification
        notyf()
            ->duration(4000)
            ->position('x', 'right')
            ->position('y', 'top')
            ->success('Images uploaded successfully.');

        return redirect()->back();
    }

    public function destroy($id)
    {
        try {
            $category = Gallery::findOrFail($id);
            $category->delete();

            notyf()
                ->duration(4000)
                ->position('x', 'right')
                ->position('y', 'top')
                ->success('Image Deleted Successfully');

        } catch (\Exception $e) {
            notyf()
                ->duration(4000)
                ->position('x', 'right')
                ->position('y', 'top')
                ->error('Something went wrong: ' . $e->getMessage());
        }

        return redirect()->back();
    }

    public function show()
    {
        $data = Gallery::all();
        return view('gallery',compact('data'));
    }

}

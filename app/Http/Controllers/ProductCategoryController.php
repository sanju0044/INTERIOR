<?php

namespace App\Http\Controllers;

use App\Models\product_category;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProductCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.product-category', [
            'data'  => product_category::all(),
            'title' => 'Product Category'
        ]);
    }

    public function edit($id)
    {
        $category = product_category::findOrFail($id);
        return response()->json($category);
    }



     public function store(Request $request)
    {
        try {
            $validated = $request->validate([
                'product_cat' => 'required|string|max:255',
                'product_img' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',
            ]);

            // Check if image is uploaded
            if ($request->hasFile('product_img')) {
                $imageName = time() . '.' . $request->file('product_img')->getClientOriginalExtension();
                $request->file('product_img')->move(public_path('uploads/product_categories'), $imageName);

                // Save path in DB
                $validated['product_img'] = 'uploads/product_categories/' . $imageName;
            }

            if ($request->id) {
                // Update
                $category = product_category::findOrFail($request->id);

                // If new image uploaded, delete old one
                if ($request->hasFile('product_img') && $category->product_img && file_exists(public_path($category->product_img))) {
                    unlink(public_path($category->product_img));
                }

                $category->update($validated);
                notyf()->success('Product Updated Successfully');
            } else {
                // Create
                product_category::create($validated);
                notyf()->success('Product Created Successfully');
            }

            return redirect()->back();

        } catch (\Illuminate\Validation\ValidationException $e) {
            foreach ($e->errors() as $field => $messages) {
                foreach ($messages as $message) {
                    notyf()->error($message);
                }
            }
            return redirect()->back()->withInput();

        } catch (\Exception $e) {
            notyf()->error('Something went wrong: ' . $e->getMessage());
            return redirect()->back();
        }
    }


    public function destroy($id)
    {
        try {
            $category = product_category::findOrFail($id);
            $category->delete();

            notyf()
                ->duration(4000)
                ->position('x', 'right')
                ->position('y', 'top')
                ->success('Product Category Deleted Successfully');

        } catch (\Exception $e) {
            notyf()
                ->duration(4000)
                ->position('x', 'right')
                ->position('y', 'top')
                ->error('Something went wrong: ' . $e->getMessage());
        }

        return redirect()->back();
    }

}

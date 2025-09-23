<?php

namespace App\Http\Controllers;

use App\Models\product;
use App\Models\product_category;
use App\Models\provide_solution;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProductController extends Controller
{

    public function index($id = null)
    {
        $data_cat = product_category::all();
        $data_pov_sol = provide_solution::with('category')->get(); // could filter later with AJAX

        return view('admin.product', [
            'data'       => Product::latest()->paginate(10), // paginated list
            'data_cat'       => $data_cat,
            'data_pov_sol'   => $data_pov_sol,
            'title'          => 'Product'
        ]);
    }


    // public function store(Request $request)
    // {
    //     try {
    //         $validated = $request->validate([
    //             'product_cat_id'       => 'required|integer',
    //             'provide_solution_id'  => 'nullable|integer',
    //             'multi_img'         => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',
    //             'description'          => 'nullable',
    //             'img'                  => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',
    //         ]);

    //         // Handle image upload if provided
    //         if ($request->hasFile('img')) {
    //             $validated['img'] = $request->file('img')->store('products', 'public');
    //         }

    //         if ($request->id) {
    //             // Update
    //             $product = Product::findOrFail($request->id);
    //             $product->update($validated);

    //             notyf()
    //                 ->duration(4000)
    //                 ->position('x', 'right')
    //                 ->position('y', 'top')
    //                 ->success('Product updated successfully.');
    //         } else {
    //             // Create
    //             Product::create($validated);

    //             notyf()
    //                 ->duration(4000)
    //                 ->position('x', 'right')
    //                 ->position('y', 'top')
    //                 ->success('Product created successfully.');
    //         }

    //         return redirect()->back();

    //     } catch (\Illuminate\Validation\ValidationException $e) {
    //         foreach ($e->errors() as $messages) {
    //             foreach ($messages as $message) {
    //                 notyf()->error($message);
    //             }
    //         }
    //         return redirect()->back()->withInput();

    //     } catch (\Exception $e) {
    //         notyf()
    //             ->duration(4000)
    //             ->position('x', 'right')
    //             ->position('y', 'top')
    //             ->error('Something went wrong: ' . $e->getMessage());
    //         return redirect()->back();
    //     }
    // }
    public function store(Request $request)
    {
        try {
            $validated = $request->validate([
                'product_cat_id'      => 'required|integer',
                'provide_solution_id' => 'nullable|integer',
                'multi_img'           => 'nullable|array',
                'multi_img.*'         => 'image|mimes:jpg,jpeg,png,webp',
                'description'         => 'nullable',
                'img'                 => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',
            ]);

            // Handle single image upload
            if ($request->hasFile('img')) {
                $validated['img'] = $request->file('img')->store('products', 'public');
            }

            // Handle multiple images
            $multiImgPaths = [];
            if ($request->hasFile('multi_img')) {
                foreach ($request->file('multi_img') as $image) {
                    $multiImgPaths[] = $image->store('products/multi', 'public');
                }
                $validated['multi_img'] = json_encode($multiImgPaths); // Save as JSON
            }

            if ($request->id) {
                // Update
                $product = Product::findOrFail($request->id);
                $product->update($validated);

                notyf()
                    ->duration(4000)
                    ->position('x', 'right')
                    ->position('y', 'top')
                    ->success('Product updated successfully.');
            } else {
                // Create
                Product::create($validated);

                notyf()
                    ->duration(4000)
                    ->position('x', 'right')
                    ->position('y', 'top')
                    ->success('Product created successfully.');
            }

            return redirect()->back();

        } catch (\Illuminate\Validation\ValidationException $e) {
            foreach ($e->errors() as $messages) {
                foreach ($messages as $message) {
                    notyf()->error($message);
                }
            }
            return redirect()->back()->withInput();

        } catch (\Exception $e) {
            notyf()
                ->duration(4000)
                ->position('x', 'right')
                ->position('y', 'top')
                ->error('Something went wrong: ' . $e->getMessage());
            return redirect()->back();
        }
    }

    public function edit($id)
    {
        $product = Product::findOrFail($id);
        return response()->json($product);
    }

    public function getProductRange($id) {
        $data = provide_solution::where('all_product_id', $id)->get();
        return view('product-category', compact('data'));
    }

    public function getProductDetails($id) {
        $data = provide_solution::where('id', $id)->first();
        $navdata = product::where('provide_solution_id', $id)->get();
        return view('product-details', compact('navdata','data'));
    }


}

<?php

namespace App\Http\Controllers;

use App\Models\provide_solution;
use App\Models\product_category;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProvideSolutionController extends Controller
{

    public function index()
    {

        $title    = 'Provide Solution';
        $category = product_category::all();
        $data     = provide_solution::all();
        return view('admin.provide-solution',compact('category','data','title'));
    }

      public function store(Request $request)
    {
        try {
            $validated = $request->validate([
                'all_product_id'          => 'required|string|max:255',
                'solution'                => 'required|string|max:255',
                'provide_solutions_img'   => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',
            ]);

            // Handle image upload
            if ($request->hasFile('provide_solutions_img')) {
                $imageName = uniqid() . '.' . $request->file('provide_solutions_img')->getClientOriginalExtension();
                $request->file('provide_solutions_img')->move(public_path('uploads/product_solutions'), $imageName);

                $validated['provide_solutions_img'] = 'uploads/product_solutions/' . $imageName;
            }

            if ($request->id) {
                // Update
                $solution = provide_solution::findOrFail($request->id);

                // Delete old image if new one is uploaded
                if ($request->hasFile('provide_solutions_img') && $solution->provide_solutions_img && file_exists(public_path($solution->provide_solutions_img))) {
                    unlink(public_path($solution->provide_solutions_img));
                }

                $solution->update($validated);
                notyf()->duration(4000)->position('x', 'right')->position('y', 'top')->success('Solutions Updated Successfully');
            } else {
                // Create
                provide_solution::create($validated);
                notyf()->duration(4000)->position('x', 'right')->position('y', 'top')->success('Solutions Created Successfully');
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
            notyf()->duration(4000)->position('x', 'right')->position('y', 'top')
                ->error('Something went wrong: ' . $e->getMessage());
            return redirect()->back();
        }
    }
    public function edit($id)
    {
        $psolution = provide_solution::findOrFail($id);
        return response()->json($psolution);
    }
    public function destroy($id)
    {
        try {
            $category = provide_solution::findOrFail($id);
            $category->delete();

            notyf()
                ->duration(4000)
                ->position('x', 'right')
                ->position('y', 'top')
                ->success('Provide Solution Deleted Successfully');

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

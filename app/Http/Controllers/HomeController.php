<?php

namespace App\Http\Controllers;


use App\Models\product;
use App\Models\product_category;
use App\Models\provide_solution;
use Illuminate\Http\Request;
use Livewire\Attributes\Validate;

class HomeController extends Controller
{


    public function index()
    {
        $categories = product_category::all();
        return view('index', compact('categories'));

    }

    public function productRange($encryptedId)
    {
        $all_product_id = decrypt($encryptedId);
        $pro_range = provide_solution::where('all_product_id', $all_product_id)->get();
        return view('product-range', compact('pro_range'));
    }

    public function productDetails($encryptedId)
    {
        $provide_solution_id = decrypt($encryptedId);
        $pro_details = product::where('provide_solution_id', $provide_solution_id)->get();
        $pro_title = product::where('provide_solution_id', $provide_solution_id)->first();
        return view('product-details', compact('pro_details','pro_title'));
    }

    public function getDetails($encryptedId)
    {
        $id = decrypt($encryptedId);
        $data = product::findOrFail($id);
        return view('details', compact('data'));
    }

}

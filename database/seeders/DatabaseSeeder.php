<?php

namespace Database\Seeders;

use App\Models\product_category;
use App\Models\provide_solution;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'Admin',
            'email' => 'admin@gmail.com',
            'password' => Hash::make('admin@gmail.com'),
        ]);

        product_category::insert([
            ['product_cat' => 'STRUCTURE AND SITE SETUP'],
            ['product_cat' => 'FACADE AND INTERIOR'],
            ['product_cat' => 'FINISHING AND DECOR'],
        ]);
        provide_solution::insert([
            ['all_product_id' => '1','solution'=>'Construction Chemicals'],
            ['all_product_id' => '1','solution'=>'Sanitary Ware & Fittings'],
            ['all_product_id' => '1','solution'=>'CPVC Pipes & Fittings'],
            ['all_product_id' => '2','solution'=>'Facade & UPVC'],
            ['all_product_id' => '2','solution'=>'Electrical'],
            ['all_product_id' => '2','solution'=>'Tiles'],
            ['all_product_id' => '3','solution'=>'Paints'],
            ['all_product_id' => '3','solution'=>'Kitchen and Custom Products'],
            ['all_product_id' => '3','solution'=>'Other Interior Products'],
        ]);

        \App\Models\product::insert([

            #Category 1
            ['product_cat_id' => '1','provide_solution_id'=>'1','all_solution'=>'Sealants & Crack Fillers'],
            ['product_cat_id' => '1','provide_solution_id'=>'1','all_solution'=>'Waterproofing Solutions'],
            ['product_cat_id' => '1','provide_solution_id'=>'1','all_solution'=>'Concrete Admixtures'],
            ['product_cat_id' => '1','provide_solution_id'=>'1','all_solution'=>'Surface Treatments'],
            ['product_cat_id' => '1','provide_solution_id'=>'1','all_solution'=>'Tile Adhesives and Grouts'],
            ['product_cat_id' => '1','provide_solution_id'=>'1','all_solution'=>'Protective Coatings and Repairs'],
            ['product_cat_id' => '1','provide_solution_id'=>'1','all_solution'=>'Other products like Emulsifiers,Bituminous Emulsifiers and Bonding agents'],

            ['product_cat_id' => '1','provide_solution_id'=>'2','all_solution'=>'Wash Basins'],
            ['product_cat_id' => '1','provide_solution_id'=>'2','all_solution'=>'Urinals'],
            ['product_cat_id' => '1','provide_solution_id'=>'2','all_solution'=>'Showers'],
            ['product_cat_id' => '1','provide_solution_id'=>'2','all_solution'=>'Accessories'],
            ['product_cat_id' => '1','provide_solution_id'=>'2','all_solution'=>'Faucets'],
            ['product_cat_id' => '1','provide_solution_id'=>'2','all_solution'=>'Toilets'],

            ['product_cat_id' => '1','provide_solution_id'=>'3','all_solution'=>'CPVC Pipes'],
            ['product_cat_id' => '1','provide_solution_id'=>'3','all_solution'=>'UPVC Pipes'],
            ['product_cat_id' => '1','provide_solution_id'=>'3','all_solution'=>'Valves & Taps'],
            ['product_cat_id' => '1','provide_solution_id'=>'3','all_solution'=>'Clamps & Supports'],
            ['product_cat_id' => '1','provide_solution_id'=>'3','all_solution'=>'Elbows, Tees, Couplers'],

             #Category 2
            ['product_cat_id' => '2','provide_solution_id'=>'4','all_solution'=>'Aluminium Composite Panels (ACP)'],
            ['product_cat_id' => '2','provide_solution_id'=>'4','all_solution'=>'Glass Façade Systems'],
            ['product_cat_id' => '2','provide_solution_id'=>'4','all_solution'=>'HPL Sheets (High Pressure Laminates)'],
            ['product_cat_id' => '2','provide_solution_id'=>'4','all_solution'=>'Cladding Panels'],
            ['product_cat_id' => '2','provide_solution_id'=>'4','all_solution'=>'Louvers & Pergolas'],
            ['product_cat_id' => '2','provide_solution_id'=>'4','all_solution'=>'Ventilated Façade Systems'],
            ['product_cat_id' => '2','provide_solution_id'=>'4','all_solution'=>'Sliding Windows/Doors'],
            ['product_cat_id' => '2','provide_solution_id'=>'4','all_solution'=>'Casement Windows/Doors'],
            ['product_cat_id' => '2','provide_solution_id'=>'4','all_solution'=>'Tilt-and-Turn Windows'],
            ['product_cat_id' => '2','provide_solution_id'=>'4','all_solution'=>'Louvered Ventilators'],
            ['product_cat_id' => '2','provide_solution_id'=>'4','all_solution'=>'Double/Triple Glazed Units'],
            ['product_cat_id' => '2','provide_solution_id'=>'4','all_solution'=>'Fixed Glass Windows'],

            ['product_cat_id' => '2','provide_solution_id'=>'5','all_solution'=>'Electrical Wiring and Cabling'],
            ['product_cat_id' => '2','provide_solution_id'=>'5','all_solution'=>'Electrical Panel and Distribution'],
            ['product_cat_id' => '2','provide_solution_id'=>'5','all_solution'=>'Power Outlets and Switches'],
            ['product_cat_id' => '2','provide_solution_id'=>'5','all_solution'=>'Lighting Fixtures and Installation'],

            ['product_cat_id' => '2','provide_solution_id'=>'6','all_solution'=>'Ceramic Tiles'],
            ['product_cat_id' => '2','provide_solution_id'=>'6','all_solution'=>'Glazed Vitrified Tiles (GVT)'],
            ['product_cat_id' => '2','provide_solution_id'=>'6','all_solution'=>'Porcelain Tiles'],
            ['product_cat_id' => '2','provide_solution_id'=>'6','all_solution'=>'Mosaic Tiles'],
            ['product_cat_id' => '2','provide_solution_id'=>'6','all_solution'=>'Wooden Finish Tiles'],
            ['product_cat_id' => '2','provide_solution_id'=>'6','all_solution'=>'Anti-skid Tiles'],
            ['product_cat_id' => '2','provide_solution_id'=>'6','all_solution'=>'Exterior Parking Tiles'],
            ['product_cat_id' => '2','provide_solution_id'=>'6','all_solution'=>'Double Charged Vitrified Tiles'],
            ['product_cat_id' => '2','provide_solution_id'=>'6','all_solution'=>'Vitrified Tiles'],

             #Category 3
            ['product_cat_id' => '3','provide_solution_id'=>'7','all_solution'=>'Interior Emulsion Paints'],
            ['product_cat_id' => '3','provide_solution_id'=>'7','all_solution'=>'Exterior Emulsion Paints'],
            ['product_cat_id' => '3','provide_solution_id'=>'7','all_solution'=>'Distemper Paints'],
            ['product_cat_id' => '3','provide_solution_id'=>'7','all_solution'=>'Texture Paints'],
            ['product_cat_id' => '3','provide_solution_id'=>'7','all_solution'=>'Primers & Undercoats'],
            ['product_cat_id' => '3','provide_solution_id'=>'7','all_solution'=>'Enamel Paints'],

            ['product_cat_id' => '3','provide_solution_id'=>'8','all_solution'=>'Kitchens'],
            ['product_cat_id' => '3','provide_solution_id'=>'8','all_solution'=>'Shutters & Laminates'],
            ['product_cat_id' => '3','provide_solution_id'=>'8','all_solution'=>'Accessories'],
            ['product_cat_id' => '3','provide_solution_id'=>'8','all_solution'=>'Custom Furniture'],
            ['product_cat_id' => '3','provide_solution_id'=>'8','all_solution'=>'Wardrobes'],

            ['product_cat_id' => '3','provide_solution_id'=>'9','all_solution'=>'Wall Panels'],
            ['product_cat_id' => '3','provide_solution_id'=>'9','all_solution'=>'Partition Systems'],
            ['product_cat_id' => '3','provide_solution_id'=>'9','all_solution'=>'Acoustic Panels'],
            ['product_cat_id' => '3','provide_solution_id'=>'9','all_solution'=>'Decorative Laminates & Veneers'],
            ['product_cat_id' => '3','provide_solution_id'=>'9','all_solution'=>'False Ceilings'],

        ]);
    }
}

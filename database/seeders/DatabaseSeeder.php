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
            ['product_cat' => 'Interior Designing','product_img'=>''],
            ['product_cat' => 'Modular Kitchen','product_img'=>''],
            ['product_cat' => 'Wall','product_img'=>''],
            ['product_cat' => 'Ceiling','product_img'=>''],
            ['product_cat' => 'Wardrobes','product_img'=>''],
            ['product_cat' => 'Tiles and Marble','product_img'=>''],
            ['product_cat' => 'Paint & Chemicals','product_img'=>''],
            ['product_cat' => 'Kitchen','product_img'=>''],
            ['product_cat' => 'Wardrobe','product_img'=>''],
            ['product_cat' => 'Premium Bathroom ','product_img'=>''],

        ]);
        provide_solution::insert([
            ['all_product_id' => '1','solution'=>'Full Home Interiors','provide_solutions_img' => ''],
            ['all_product_id' => '1','solution'=>'1 BHK','provide_solutions_img' => ''],
            ['all_product_id' => '1','solution'=>'2 BHK','provide_solutions_img' => ''],
            ['all_product_id' => '1','solution'=>'3 BHK','provide_solutions_img' => ''],
            ['all_product_id' => '1','solution'=>'3 BHK +','provide_solutions_img' => ''],

            ['all_product_id' => '2','solution'=>'L-Shape','provide_solutions_img' => ''],
            ['all_product_id' => '2','solution'=>'U-Shape','provide_solutions_img' => ''],
            ['all_product_id' => '2','solution'=>'Parallel','provide_solutions_img' => ''],
            ['all_product_id' => '2','solution'=>'G-Shape','provide_solutions_img' => ''],
            ['all_product_id' => '2','solution'=>'Island','provide_solutions_img' => ''],

            ['all_product_id' => '3','solution'=>'Paint','provide_solutions_img' => ''],
            ['all_product_id' => '3','solution'=>'Texture','provide_solutions_img' => ''],
            ['all_product_id' => '3','solution'=>'Louvers','provide_solutions_img' => ''],
            ['all_product_id' => '3','solution'=>'Panels','provide_solutions_img' => ''],
            ['all_product_id' => '3','solution'=>'Tiles','provide_solutions_img' => ''],

            ['all_product_id' => '4','solution'=>'POP Ceiling','provide_solutions_img' => ''],
            ['all_product_id' => '4','solution'=>'Gypsum Board','provide_solutions_img' => ''],
            ['all_product_id' => '4','solution'=>'Cove','provide_solutions_img' => ''],
            ['all_product_id' => '4','solution'=>'Metal ','provide_solutions_img' => ''],

            ['all_product_id' => '5','solution'=>'Coventional','provide_solutions_img' => ''],
            ['all_product_id' => '5','solution'=>'Walk-in','provide_solutions_img' => ''],
            ['all_product_id' => '5','solution'=>'Freestanding','provide_solutions_img' => ''],
            ['all_product_id' => '5','solution'=>'Mirrored','provide_solutions_img' => ''],
            ['all_product_id' => '5','solution'=>'L-Shape','provide_solutions_img' => ''],
            ['all_product_id' => '5','solution'=>'Aluminium Profile','provide_solutions_img' => ''],

            ['all_product_id' => '6','solution'=>'Wall Tiles','provide_solutions_img' => ''],
            ['all_product_id' => '6','solution'=>'Floor Tiles','provide_solutions_img' => ''],
            ['all_product_id' => '6','solution'=>'Bathroom Tiles','provide_solutions_img' => ''],
            ['all_product_id' => '6','solution'=>'Kitchen','provide_solutions_img' => ''],
            ['all_product_id' => '6','solution'=>'Bedroom','provide_solutions_img' => ''],
            ['all_product_id' => '6','solution'=>'Parking','provide_solutions_img' => ''],
            ['all_product_id' => '6','solution'=>'Quartz','provide_solutions_img' => ''],
            ['all_product_id' => '6','solution'=>'Granite & Marble','provide_solutions_img' => ''],

            ['all_product_id' => '7','solution'=>'Interior Paints','provide_solutions_img' => ''],
            ['all_product_id' => '7','solution'=>'Exterior Paints','provide_solutions_img' => ''],
            ['all_product_id' => '7','solution'=>'Floor Paints','provide_solutions_img' => ''],
            ['all_product_id' => '7','solution'=>'Enamels','provide_solutions_img' => ''],
            ['all_product_id' => '7','solution'=>'Wood coating','provide_solutions_img' => ''],
            ['all_product_id' => '7','solution'=>'Waterproofing (Interior & exterior)','provide_solutions_img' => ''],

            ['all_product_id' => '8','solution'=>'L-type','provide_solutions_img' => ''],
            ['all_product_id' => '8','solution'=>'U-type','provide_solutions_img' => ''],
            ['all_product_id' => '8','solution'=>'G-type','provide_solutions_img' => ''],
            ['all_product_id' => '8','solution'=>'Island','provide_solutions_img' => ''],
            ['all_product_id' => '8','solution'=>'Parallel','provide_solutions_img' => ''],
            ['all_product_id' => '8','solution'=>'Along the wall','provide_solutions_img' => ''],

            ['all_product_id' => '9','solution'=>'Sliding','provide_solutions_img' => ''],
            ['all_product_id' => '9','solution'=>'Walk in closet','provide_solutions_img' => ''],
            ['all_product_id' => '9','solution'=>'Mirrored','provide_solutions_img' => ''],
            ['all_product_id' => '9','solution'=>'Wardrobes','provide_solutions_img' => ''],
            ['all_product_id' => '9','solution'=>'Coventional','provide_solutions_img' => ''],
            ['all_product_id' => '9','solution'=>'Walk-in','provide_solutions_img' => ''],
            ['all_product_id' => '9','solution'=>'Freestanding','provide_solutions_img' => ''],
            ['all_product_id' => '9','solution'=>'Mirrored','provide_solutions_img' => ''],
            ['all_product_id' => '9','solution'=>'L-Shape','provide_solutions_img' => ''],
            ['all_product_id' => '9','solution'=>'Aluminium Profile','provide_solutions_img' => ''],

            ['all_product_id' => '10','solution'=>'Faucets','provide_solutions_img' => ''],
            ['all_product_id' => '10','solution'=>'Sanitaryware (Washbasins & Seats)','provide_solutions_img' => ''],
            ['all_product_id' => '10','solution'=>'Vanity','provide_solutions_img' => ''],
            ['all_product_id' => '10','solution'=>'Wellness','provide_solutions_img' => ''],
            ['all_product_id' => '10','solution'=>'Shower Enclosures','provide_solutions_img' => ''],
            ['all_product_id' => '10','solution'=>'Shower Panels','provide_solutions_img' => ''],
            ['all_product_id' => '10','solution'=>'Bathtubs','provide_solutions_img' => ''],
            ['all_product_id' => '10','solution'=>'Jacuzis','provide_solutions_img' => ''],
            ['all_product_id' => '10','solution'=>'Spas','provide_solutions_img' => ''],
            ['all_product_id' => '10','solution'=>'Shower','provide_solutions_img' => ''],


        ]);

        \App\Models\product::insert([
             ['product_cat_id' => '1','provide_solution_id'=>'1','all_solution' => '','img' => '','description' => ''],
             ['product_cat_id' => '1','provide_solution_id'=>'2','all_solution' => '','img' => '','description' => ''],
             ['product_cat_id' => '1','provide_solution_id'=>'3','all_solution' => '','img' => '','description' => ''],
             ['product_cat_id' => '1','provide_solution_id'=>'4','all_solution' => '','img' => '','description' => ''],
             ['product_cat_id' => '1','provide_solution_id'=>'5','all_solution' => '','img' => '','description' => ''],

             ['product_cat_id' => '2','provide_solution_id'=>'6','all_solution' => '','img' => '','description' => ''],
             ['product_cat_id' => '2','provide_solution_id'=>'7','all_solution' => '','img' => '','description' => ''],
             ['product_cat_id' => '2','provide_solution_id'=>'8','all_solution' => '','img' => '','description' => ''],
             ['product_cat_id' => '2','provide_solution_id'=>'9','all_solution' => '','img' => '','description' => ''],
             ['product_cat_id' => '2','provide_solution_id'=>'10','all_solution' => '','img' => '','description' => ''],

             ['product_cat_id' => '3','provide_solution_id'=>'11','all_solution' => '','img' => '','description' => ''],
             ['product_cat_id' => '3','provide_solution_id'=>'12','all_solution' => '','img' => '','description' => ''],
             ['product_cat_id' => '3','provide_solution_id'=>'13','all_solution' => '','img' => '','description' => ''],
             ['product_cat_id' => '3','provide_solution_id'=>'14','all_solution' => '','img' => '','description' => ''],
             ['product_cat_id' => '3','provide_solution_id'=>'15','all_solution' => '','img' => '','description' => ''],

             ['product_cat_id' => '4','provide_solution_id'=>'16','all_solution' => '','img' => '','description' => ''],
             ['product_cat_id' => '4','provide_solution_id'=>'17','all_solution' => '','img' => '','description' => ''],
             ['product_cat_id' => '4','provide_solution_id'=>'18','all_solution' => '','img' => '','description' => ''],
             ['product_cat_id' => '4','provide_solution_id'=>'19','all_solution' => '','img' => '','description' => ''],

             ['product_cat_id' => '5','provide_solution_id'=>'20','all_solution' => '','img' => '','description' => ''],
             ['product_cat_id' => '5','provide_solution_id'=>'21','all_solution' => '','img' => '','description' => ''],
             ['product_cat_id' => '5','provide_solution_id'=>'22','all_solution' => '','img' => '','description' => ''],
             ['product_cat_id' => '5','provide_solution_id'=>'23','all_solution' => '','img' => '','description' => ''],
             ['product_cat_id' => '5','provide_solution_id'=>'24','all_solution' => '','img' => '','description' => ''],
             ['product_cat_id' => '5','provide_solution_id'=>'25','all_solution' => '','img' => '','description' => ''],

             ['product_cat_id' => '6','provide_solution_id'=>'26','all_solution' => '','img' => '','description' => ''],
             ['product_cat_id' => '6','provide_solution_id'=>'27','all_solution' => '','img' => '','description' => ''],
             ['product_cat_id' => '6','provide_solution_id'=>'28','all_solution' => '','img' => '','description' => ''],
             ['product_cat_id' => '6','provide_solution_id'=>'29','all_solution' => '','img' => '','description' => ''],
             ['product_cat_id' => '6','provide_solution_id'=>'30','all_solution' => '','img' => '','description' => ''],
             ['product_cat_id' => '6','provide_solution_id'=>'31','all_solution' => '','img' => '','description' => ''],
             ['product_cat_id' => '6','provide_solution_id'=>'32','all_solution' => '','img' => '','description' => ''],
             ['product_cat_id' => '6','provide_solution_id'=>'33','all_solution' => '','img' => '','description' => ''],

             ['product_cat_id' => '7','provide_solution_id'=>'34','all_solution' => '','img' => '','description' => ''],
             ['product_cat_id' => '7','provide_solution_id'=>'35','all_solution' => '','img' => '','description' => ''],
             ['product_cat_id' => '7','provide_solution_id'=>'36','all_solution' => '','img' => '','description' => ''],
             ['product_cat_id' => '7','provide_solution_id'=>'37','all_solution' => '','img' => '','description' => ''],
             ['product_cat_id' => '7','provide_solution_id'=>'38','all_solution' => '','img' => '','description' => ''],
             ['product_cat_id' => '7','provide_solution_id'=>'39','all_solution' => '','img' => '','description' => ''],

             ['product_cat_id' => '8','provide_solution_id'=>'40','all_solution' => '','img' => '','description' => ''],
             ['product_cat_id' => '8','provide_solution_id'=>'41','all_solution' => '','img' => '','description' => ''],
             ['product_cat_id' => '8','provide_solution_id'=>'42','all_solution' => '','img' => '','description' => ''],
             ['product_cat_id' => '8','provide_solution_id'=>'43','all_solution' => '','img' => '','description' => ''],
             ['product_cat_id' => '8','provide_solution_id'=>'44','all_solution' => '','img' => '','description' => ''],
             ['product_cat_id' => '8','provide_solution_id'=>'45','all_solution' => '','img' => '','description' => ''],

             ['product_cat_id' => '9','provide_solution_id'=>'46','all_solution' => '','img' => '','description' => ''],
             ['product_cat_id' => '9','provide_solution_id'=>'47','all_solution' => '','img' => '','description' => ''],
             ['product_cat_id' => '9','provide_solution_id'=>'48','all_solution' => '','img' => '','description' => ''],
             ['product_cat_id' => '9','provide_solution_id'=>'49','all_solution' => '','img' => '','description' => ''],
             ['product_cat_id' => '9','provide_solution_id'=>'50','all_solution' => '','img' => '','description' => ''],
             ['product_cat_id' => '9','provide_solution_id'=>'51','all_solution' => '','img' => '','description' => ''],
             ['product_cat_id' => '9','provide_solution_id'=>'52','all_solution' => '','img' => '','description' => ''],
             ['product_cat_id' => '9','provide_solution_id'=>'53','all_solution' => '','img' => '','description' => ''],
             ['product_cat_id' => '9','provide_solution_id'=>'54','all_solution' => '','img' => '','description' => ''],
             ['product_cat_id' => '9','provide_solution_id'=>'55','all_solution' => '','img' => '','description' => ''],

             ['product_cat_id' => '10','provide_solution_id'=>'56','all_solution' => '','img' => '','description' => ''],
             ['product_cat_id' => '10','provide_solution_id'=>'57','all_solution' => '','img' => '','description' => ''],
             ['product_cat_id' => '10','provide_solution_id'=>'58','all_solution' => '','img' => '','description' => ''],
             ['product_cat_id' => '10','provide_solution_id'=>'59','all_solution' => '','img' => '','description' => ''],
             ['product_cat_id' => '10','provide_solution_id'=>'60','all_solution' => '','img' => '','description' => ''],
             ['product_cat_id' => '10','provide_solution_id'=>'61','all_solution' => '','img' => '','description' => ''],
             ['product_cat_id' => '10','provide_solution_id'=>'62','all_solution' => '','img' => '','description' => ''],
             ['product_cat_id' => '10','provide_solution_id'=>'63','all_solution' => '','img' => '','description' => ''],
             ['product_cat_id' => '10','provide_solution_id'=>'64','all_solution' => '','img' => '','description' => ''],
             ['product_cat_id' => '10','provide_solution_id'=>'65','all_solution' => '','img' => '','description' => ''],

        ]);
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class product extends Model
{

    protected $table = 'products';
    protected $fillable = ['product_cat_id','provide_solution_id','all_solution','img','description'];

    public function category()
    {
        return $this->belongsTo(product_category::class, 'product_cat_id', 'id');
    }

    public function solutions()
    {
        return $this->belongsTo(provide_solution::class, 'provide_solution_id', 'id');
    }
}

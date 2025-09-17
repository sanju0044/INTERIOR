<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class provide_solution extends Model
{
    protected $table = 'provide_solutions';
    protected $fillable = ['all_product_id','solution','provide_solutions_img'];

    public function category()
    {
        return $this->belongsTo(product_category::class, 'all_product_id', 'id');
    }
}

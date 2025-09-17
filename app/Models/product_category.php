<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class product_category extends Model
{
    protected $table = 'product_categorys';
    protected $fillable = ['product_cat','product_img'];

    public function solutions()
    {
        return $this->hasMany(provide_solution::class, 'all_product_id', 'id');
    }


}


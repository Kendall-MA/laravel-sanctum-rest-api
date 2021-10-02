<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    // If the table isn't called products we can specify it here
    //protected $table = 'my_products';

    protected $fillable = [
        'name',
        'slug',
        'description',
        'price'
    ];
}

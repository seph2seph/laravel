<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Product extends Model
{
    use HasFactory;
    protected $table = 'products';
    protected $fillable = [
        'lrn',
        'image',
        'first_name',
        'middle_name',
        'last_name',
        'age',
        'section',
        'year_level',
        'contact',
        'gender',
        'address',
    ];
}

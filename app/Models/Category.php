<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    // Add this line to allow mass assignment for the 'name' attribute
    protected $fillable = ['name'];
//     public function create()
// {
//     $categories = Category::all(); // Fetch all categories
//     return view('products.create', compact('categories')); // Pass categories to view
// }
}


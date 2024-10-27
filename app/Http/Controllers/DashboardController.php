<?php
namespace App\Http\Controllers;

use App\Models\Product; // Assuming you have a Product model
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        // Fetch products from the database
        $products = Product::all(); // Adjust this query as needed

        // Pass products to the view
        return view('dashboard', compact('products'));
    }
}

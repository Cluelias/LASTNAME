<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $products = [
            ['title' => 'The Hobbit', 'author' => 'J.R.R. Tolkien', 'price' => 15.99],
            ['title' => '1984', 'author' => 'George Orwell', 'price' => 12.99],
            ['title' => 'To Kill a Mockingbird', 'author' => 'Harper Lee', 'price' => 10.99],
            ['title' => 'The Great Gatsby', 'author' => 'F. Scott Fitzgerald', 'price' => 14.99],
            ['title' => 'Moby Dick', 'author' => 'Herman Melville', 'price' => 13.50]
        ];

        return view('products', ['products' => $products]);
    }
}
